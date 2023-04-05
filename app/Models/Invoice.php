<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'undangan_id',
        'notes',
        'remark',
        'price_amount',
        'paid_amount',
        'paid_status', //'paid', 'unpaid'
    ];

    protected $casts = [
        'price_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
    ];
}
