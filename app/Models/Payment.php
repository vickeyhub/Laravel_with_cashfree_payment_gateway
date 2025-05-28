<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'amount', 'order_id', 'payment_id', 'status','other'];

    protected $casts = [
        'other' => 'array'
    ];
}
