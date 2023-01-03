<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller{

    public function showAllProducts(Request $request){
        $products = Product::paginate(8);
        $detail = 0;
        return view('home')->with(compact('products'))->with('detail',$detail);
    }

    public function showProductDetails(Request $request){
        $id = $request->route('id');
        $products = Product::where('id', $id)->get();
        $detail = 1;
        return view('home')
                        ->with(compact('products'))
                        ->with('detail', $detail);
    }

    public function showSearchPage(){
        return view('search');
    }

    public function showSearchedProducts(Request $request){
        $search_query = $request->search;

        if(! $search_query == NULL){
            $products = Product::where('name', 'LIKE', "%$search_query%")->paginate(8)->appends(['search' => $search_query]);
        }
        else{
            $products = Product::paginate(8);
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

        $fileName = $request->name.'.'.$ext;
        $request->image->move('assets', $fileName);

        Product::insert([
            'name' => $name,
            'description' => $desc,
            'price' => $price,
            'stock' => $stock,
            'image' => $fileName
        ]);

        return redirect()->back();
    }

    public function deleteProduct(Request $request){
        $id = $request->route('id');

        Product::where('id', '=', $id)->delete();

        return redirect('/home');
    }
}


