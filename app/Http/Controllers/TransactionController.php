<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id',Auth::user()->id)->get();
        $categories = Category::all();
        return view("transaction-history", compact('transactions','categories'));
    }
}
