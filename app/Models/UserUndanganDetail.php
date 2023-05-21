<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class UserUndanganDetail extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    
    protected $table = 'user_undangan_detail';

    protected $fillable = [
        'user_id',
        'undangan_id',
        'groom_name',
        'bride_name',
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
        'address_akad',
        'address_resepsi',
        'address_unduhmantu',
        'map_akad_latlng',
        'map_resepsi_latlng',
        'map_unduhmantu_latlng',
        'gmap_akad_url',
        'gmap_resepsi_url',
        'gmap_unduhmantu_url',
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

