<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Profile;

class PurchaseController extends Controller
{
    public function addressEdit()
    {
        return view('modification');
    }

    public function addressUpdate(Request $request)
    {
      session(['shipping_address' => $request->address]);

      return redirect()->route('/purchase/{item_id}')->with('success', '配送先住所が更新されました');
    }


  

  public function purchase($id)
  {
    $item = Item::with('profiles')->find($id);
    $profiles = Profile::with('item')->find($id);

    return view('purchase', compact('item', 'profiles'));
  }

  
}
