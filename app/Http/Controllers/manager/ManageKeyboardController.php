<?php

namespace App\Http\Controllers\manager;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ManageKeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view ('manager.add-keyboard', compact('categories'));
    }

    public function update_page($id)
    {
        $categories = Category::all();
        $product = Product::where('id',$id)->first();
        return view ('manager.update-keyboard', compact('categories','product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'keyboard_name' => 'required|min:5',
            'keyboard_price' => 'required|integer|min:0',
            'description' => 'required|min:10',
            'keyboard_image' => 'required|file|image'
        ]);
        Product::create([
            'category_id' => $request->category_id,
            'keyboard_name' => $request->keyboard_name,
            'keyboard_price' => $request->keyboard_price,
            'description' => $request->description,
            'keyboard_image' => $request->file('keyboard_image')->store('keyboard-images','public'),
        ]);
        return redirect('/add_keyboard');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $request->validate([
            'keyboard_name' => 'required|min:5',
            'keyboard_price' => 'required|integer|min:0',
            'description' => 'required|min:10',
            'keyboard_image' => 'file|image'
        ]);
        $product =  Product::where('id',$id)->first();
        $product->category_id = $request->category_id;
        $product->keyboard_name = $request->keyboard_name;
        $product->keyboard_price = $request->keyboard_price;
        $product->description = $request->description;
        if($request->keyboard_image != NULL)
        {
            $product->keyboard_image = $request->file('keyboard_image')->store('keyboard-images','public');
        }            
        $product->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product, $id)
    {
        $product = Product::where('id',$id)->first();
        $id_cart = $product->category_id;
        $product->delete();
        return redirect('view-keyboard/'.$id_cart);
    }
}
