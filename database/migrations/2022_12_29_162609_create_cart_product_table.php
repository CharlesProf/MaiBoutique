<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_product', function (Blueprint $table) {
            $table->unsignedBigInteger("Cartid");
            $table->unsignedBigInteger("Productid");
            $table->primary(["Productid","Cartid"]);
            $table->foreign("Cartid")->references("id")->on("cart")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("Productid")->references("id")->on("products")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_product');
    }
}
