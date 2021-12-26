<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowKeyboardController extends Controller
{
    public function index($id)
    {
        $products = Product::where('category_id',$id)->get();
        $categories = Category::findOrFail($id);
        return view ('shop.show-keyboard-page',compact('products','categories'));
    }
    public function viewDetail($id)
    {
        $product = Product::findOrFail($id);
        return view ('shop.detail-keyboard', compact('product'));
    }

    public function searchPro(Request $request, $id) 
    {
        $categories = Category::findOrFail($id);
        $search = $request->searchProduct;
        $products = Product::where('category_id',$id) 
        ->where('keyboard_name','LIKE', '%'.$search.'%')           
        ->get();
        return view('shop.search-keyboard-page', compact('products', 'categories'));
    }
}
