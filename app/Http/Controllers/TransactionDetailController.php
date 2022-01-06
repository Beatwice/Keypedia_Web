<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index($id)
    {
        $transaction = Transaction::where('id',$id)->first();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $categories = Category::all();
        return view('transaction-detail-history',compact('details','transaction','categories'));
    }
}
