<?php

use App\Models\User;
use App\Models\Product;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN ACCOUNT
        User::insert([
            'username' => 'Laravel Admin',
            'email' => 'admin@laravel.com',
            'password' => bcrypt('laravel123'),
            'phone' => '12345678910',
            'address' => 'Kencana Loka',
            'role' => 'admin'
        ]);

        //USER ACCOUNT
        User::insert([
            'username' => 'Laravel User',
            'email' => 'user@laravel.com',
            'password' => bcrypt('laravel123'),
            'phone' => '08119701262',
            'address'=> 'Taman Chrysant',
            'role' => 'user'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shorts img'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shorts img'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shorts img'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shorts img'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shorts img'
        ]);

        Product::insert([
            'name' => 'Red Shirt',
            'description' => 'Shirt in red',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Red Shirts img'
        ]);

        Product::insert([
            'name' => 'Red Shorts',
            'description' => 'Shorts in red',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Red Shorts img'
        ]);

        Product::insert([
            'name' => 'Blue Shirt',
            'description' => 'Shirt in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Blue Shirt img'
        ]);

        Product::insert([
            'name' => 'Yellow Shirt',
            'description' => 'Shirt in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Yellow Shirt img'
        ]);

        Product::insert([
            'name' => 'Yellow Jacket',
            'description' => 'Jacket in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Yellow Jacket img'
        ]);

        Product::insert([
            'name' => 'Yellow Shorts',
            'description' => 'Shorts in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Yellow Shirt img'
        ]);

        Product::insert([
            'name' => 'Aquamarine Shorts',
            'description' => 'Shorts in aquamarine',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Aquamarine Shorts img'
        ]);

        Product::insert([
            'name' => 'Green Shorts',
            'description' => 'Shorts in green',
            'price' => 15000,
            'stock' => 10,
            'image' => 'Green Shorts img'
        ]);
    }
}

