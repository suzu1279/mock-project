<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        $viewType = $request->query('type', 'recommended');
        $items = [];
        $item = Item::with('purchase')->findOrFail($items);
        $items = Item::where('user_id', '!=', auth()->id())->get();

        if ($viewType === 'recommended') {
            $items = Item::inRandomOrder()->limit(10)->get();
        } elseif ($viewType === 'my_list') {
            // $items = Auth::user()->myListItems()->get();
            $items = Item::where('is_in_my_list', true)->get();
        }
        return view('index', compact('items', 'viewType'));
    }

    public function register(RegisterRequest $request)
    {
        $form = $request->all();
        User::create($form);
        return view('edit', compact('form'));
    }

    public function login(LoginRequest $request)
    {
        $form = $request->all();
        $items = item::all();
        return redirect('/');
    }
}
