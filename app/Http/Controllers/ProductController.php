<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller{

    public function showAllProducts(Request $request){
        // $products = Product::where('id', Auth::id())->paginate(8);
        $products = Product::all();
        $detail = 0;
        return view('home')->with(compact('products'))->with('detail',$detail);
    }

    public function showSearchPage(){

        return view('search');
    }

    public function showSearchedProducts(Request $request){
        // $products = Product::where('id', Auth::id())->paginate(8);

        $search_query = $request->search;
        $products = Product::all();

        if(! $search_query == NULL){
            $products = Product::where('name', 'LIKE', "%$search_query%");
        }

        return view('search')->with(compact('products'));
    }

    public function showAddPage(Request $request){
        return view('add');
    }

    public function addProduct(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:20|unique:products',
            'description' => 'required|min:5',
            'price' => 'required|integer|gte:1000',
            'stock' => 'required|integer|gte:1',
            'image' => 'required|mimes:jpg, png, jpeg'
        ]);

        $name = $request->name;
        $desc = $request->description;
        $price = $request->price;
        $stock = $request->stock;
        $image = $request->image;

        $ext = $request->file('image')->extension();

        Storage::putFileAs('/public/assets', $image, $name.'.'.$ext);

        Product::insert([
            'name' => $name,
            'description' => $desc,
            'price' => $price,
            'stock' => $stock,
            'image' => $name.'.'.$ext
        ]);

        return redirect()->back();
    }
}


