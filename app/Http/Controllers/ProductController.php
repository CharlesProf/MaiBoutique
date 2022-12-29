<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller{

    public function showAllProducts(Request $request){
        $products = Product::where('id', Auth::id())->paginate(8);
        $detail = 0;
        return view('home')->with(compact('products'))->with('detail',$detail);
    }

    public function showAddPage(Request $request){
        return view('add');
    }

    public function addProduct(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:20|unique:users',
            'description' => 'required|email:rfc,dns|unique:users',
            'price' => 'required|min:5|max:20',
            'stock' => 'required|min:10|max:13',
            'image' => 'required|mimes:'
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;

        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone,
            'address' => $address,
            'role' => "user"
        ]);



        return redirect()->back();
    }
}


