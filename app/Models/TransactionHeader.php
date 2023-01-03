<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class TransactionHeader extends Model
{
    use HasFactory;

    public $table = "transaction_header";

    protected $fillable = [
        'transaction_id',
        'purchased_date_at',
        'total_purchase',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
