<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'purchased_date_at',
        'total_purchase',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
