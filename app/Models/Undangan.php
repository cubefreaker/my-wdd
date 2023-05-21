<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;

class Undangan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'undangan';

    protected $fillable = [
        'undangan_group_id',
        'nama_undangan',
        'laravel_controller_class',
        'status', //'active', 'inactive'
    ];

    public function undangan_group()
    {
        return $this->belongsTo(UndanganGroup::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
