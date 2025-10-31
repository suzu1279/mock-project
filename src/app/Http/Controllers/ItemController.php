<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Comment;
use App\Http\Requests\RegisterRequest;
use app\Models\User;

class ItemController extends Controller
{

    public function showSellForm(Request $request)
    {
        $categories = Category::all();
        
        return view('sell', compact('categories'));
    }

    public function sell(ExhibitionRequest $request)
    {
        $item = Item::create([
            'name' => $request->name,
            'image' => $request->image,
            'condition' => $request->condition,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::id(),
        ]);

        return redirect('/' )->with('success' , '商品が出品されました');
    }

    public function index(Request $request)
    {
        $items = Item::all();
        $viewType = $request->query('type', 'recommended');
        $items = [];
        $item = Item::with('purchase')->findOrFail($items);
        $items = Item::where('user_id', '!=', auth()->id())->get();

        if ($viewType === 'recommended') {
            $items = Item::inRandomOrder()->limit(15)->get();
        } elseif ($viewType === 'my_list') {
            // $items = Auth::user()->myListItems()->get();
            $items = Item::where('is_in_my_list', true)->get();
        }
        return view('index', compact('items', 'viewType'));
    }

    public function detail($id)
    {
        $item = Item::with('comments')->find($id);
        $comments = Comment::all();

        return view('detail', compact('item', 'comments'));
    }

    public function toggleLike(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $userId = Item::id();

        $like = item::where('item_id', $id)->where('user_id',$userId)->first();

        if($like){
            $like ->delete();
            return response()->json(['status' => 'remove']);
        }else{
            $like::create([
                'item_id' => $id,
                'user_id' => $userId,
            ]);
            return response()->json(['status' => 'added']);
        }

    }

    public function unlike(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->likes()->where('user_id',$request->user()->id)->delete();

        return redirect()->route('detail', $item->id);
    }

    public function store(CommentRequest $request,$itemId)
    {
        Comment::create([
            'item_id' => $request->item_id,
            'comment' => $request ->comment,
            'user_id'=> auth()->id(),
        ]);

        return redirect('/item/{item}')->route('detail', $itemId);
    }


    public function mypage()
    {
        $items = Item::all();

        return view('profile', ['items' => $items]);
    }

    public function search(Request $request)
    {
        if ($request->has('reset')) {
            return redirect('/')->withInput();
        }
        $query = Item::query();

        $query = $this->getSearchQuery($request, $query);

        if (!empty($request->keyword)) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->keyword . '%')->first();
            });
        }

        $items = $query->paginate(1);
        return view('/search', compact('items'));
    }

    private function getSearchQuery($request, $query)
    {
        if (!empty($request->keyword)) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->keyword . '%')->first();
            });
        }
        return $query;
    }

    

}