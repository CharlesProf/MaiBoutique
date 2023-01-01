<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionheader', function (Blueprint $table) {
            $table->unsignedBigInteger("transaction_id");
            $table->timestamp('purchased_date_at');
            $table->integer("total_purchase");
            $table->unsignedBigInteger("user_id");
            $table->foreign("transaction_id")->references("id")->on("transactiondetail")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('transactionheader');
    }
}
