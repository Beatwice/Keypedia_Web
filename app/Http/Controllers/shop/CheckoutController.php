<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    
    public function store()
    {
        $carts = Cart::where('user_id', Auth::user()->id);
        $cartsUser = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach($cartsUser as $item)
        {
            $transaction->detail()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity
            ]);
        }
        Cart::where('user_id', Auth::user()->id)->delete();
        return redirect('/');

    }
}
