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
        $products = Product::where('category_id',$id)->simplePaginate(8);
        $category_title = Category::findOrFail($id);
        $categories = Category::all();
        return view ('shop.show-keyboard-page',compact('products','category_title','categories'));
    }
    public function viewDetail($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view ('shop.detail-keyboard', compact('product','categories'));
    }

    public function searchPro(Request $request, $id) 
    {
        $category_title = Category::findOrFail($id);
        $search = $request->searchProduct;
        $categories = Category::all();
        $products = Product::where('category_id',$id) 
        ->where('keyboard_name','LIKE', '%'.$search.'%')
        ->orWhere('keyboard_price','Like', '%'.$search.'%')           
        ->get();
        return view('shop.search-keyboard-page', compact('products', 'category_title','categories'));
    }
}
