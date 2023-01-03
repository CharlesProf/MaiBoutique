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
            'username' => 'MaiBoutique Admin',
            'email' => 'admin@maiboutique.com',
            'password' => bcrypt('maiboutique'),
            'phone' => '12345678910',
            'address' => 'Kencana Loka',
            'role' => 'admin'
        ]);

        //USER ACCOUNT
        User::insert([
            'username' => 'MaiBoutique Member',
            'email' => 'member@maiboutique.com',
            'password' => bcrypt('maiboutique'),
            'phone' => '08119701262',
            'address'=> 'Taman Chrysant',
            'role' => 'member'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'blue shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'blue shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Blue Shorts',
            'description' => 'Shorts in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'blue shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Red Shirt',
            'description' => 'Shirt in red',
            'price' => 15000,
            'stock' => 10,
            'image' => 'red shirt.jpg'
        ]);

        Product::insert([
            'name' => 'Red Shorts',
            'description' => 'Shorts in red',
            'price' => 15000,
            'stock' => 10,
            'image' => 'red shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Blue Shirt',
            'description' => 'Shirt in blue',
            'price' => 15000,
            'stock' => 10,
            'image' => 'blue shirt.jpg'
        ]);

        Product::insert([
            'name' => 'Yellow Shirt',
            'description' => 'Shirt in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'yellow shirt.jpg'
        ]);

        Product::insert([
            'name' => 'Yellow Jacket',
            'description' => 'Jacket in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'yellow jacket.jpeg'
        ]);

        Product::insert([
            'name' => 'Yellow Shorts',
            'description' => 'Shorts in yellow',
            'price' => 15000,
            'stock' => 10,
            'image' => 'yellow shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Aquamarine Shorts',
            'description' => 'Shorts in aquamarine',
            'price' => 15000,
            'stock' => 10,
            'image' => 'aquamarine shorts.jpg'
        ]);

        Product::insert([
            'name' => 'Green Shorts',
            'description' => 'Shorts in green',
            'price' => 15000,
            'stock' => 10,
            'image' => 'green shorts.png'
        ]);
    }
}

