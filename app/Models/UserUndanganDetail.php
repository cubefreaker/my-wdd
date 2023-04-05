<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUndanganDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'undangan_id',
        'groom',
        'bride',
        'groom_parent_text',
        'bride_parent_text',
        'date_akad',
        'time_akad_start',
        'time_akad_end',
        'date_resepsi',
        'time_resepsi_start',
        'time_resepsi_end',
        'date_unduhmantu',
        'time_unduhmantu_start',
        'time_unduhmantu_end',
        'address',
        'map_address',
        'address_unduhmantu',
        'map_address_unduhmantu',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function undangan()
    {
        return $this->belongsTo(Undangan::class);
    }
}

