<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganGroup extends Model
{
    use HasFactory;

    protected $table = 'undangan_group';

    protected $fillable = [
        'nama_undangan_group',
        'price_amount',
        'status', //'active', 'inactive' 
    ];

    protected $casts = [
        'price_amount' => 'decimal:2'
    ];
}
