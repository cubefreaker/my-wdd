<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'undangan_group';

    protected $casts = [
        'price_amount' => 'decimal:2'
    ];
}
