<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index($id)
    {
        $details = TransactionDetail::where('transaction_id', $id)->get();
        return view('transaction-detail-history',compact('details'));
    }
}
