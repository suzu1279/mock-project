<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;
use App\Models\Profile;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        return view('edit',['form'=>$profile]);
    }

   

    public function update(ProfileRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Profile::find($request->id)->update($form);
        
        return redirect('/mypage/profile');
    }

    public function index()
    {
        $items = Item::all();

        return view('profile', ['items' => $items]);
    }
}
