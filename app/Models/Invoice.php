<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    
    protected $guarded = ['id'];

    protected $casts = [
        'price_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
    ];
}
