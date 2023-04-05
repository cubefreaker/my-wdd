<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUndanganDetailMedia extends Model
{
    use HasFactory;

    protected $table = 'user_undangan_detail_media';

    protected $fillable = [
        'user_undangan_detail_id',
        'file_name',
        'file_size',
        'file_format',
        'media_type',
        'media_url',
    ];

    public function user_undangan_detail()
    {
        return $this->belongsTo(UserUndanganDetail::class);
    }
}
