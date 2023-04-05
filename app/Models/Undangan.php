<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'undangan';

    protected $fillable = [
        'undangan_group_id',
        'nama_undangan',
        'status', //'active', 'inactive'
    ];

    public function undangan_group()
    {
        return $this->belongsTo(UndanganGroup::class);
    }
}
