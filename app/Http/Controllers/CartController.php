<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        return view('shop.cart', compact('carts'));
    }

    public function store(Request $request)
    {
        
        $same = Cart::where('user_id',Auth::user()->id)
            ->where('product_id',$request->product_id)
            ->first();
        if($same != null)
        {
            $same->quantity = $request->quantity;
            $same->save();
        }
        else
        {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        return redirect('/cart-index');
    }

    public function updateQuantity(Request $request, $id)
    {
        Cart::where('id',$id)->update([
            'quantity' => $request->quantity
        ]);
        return redirect('/cart-index');
    }
}
