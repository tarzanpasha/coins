<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Platform extends Model   implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'symbol',
        'name',
        'description',
    ];
    public function image()
    {
        return $this->hasOne(Media::class, 'model_id', 'id')->where('model_type','App\Models\Platform');
    }

    public function money()
    {
        return $this->hasMany(Money::class, 'id', 'platform_id');
    }

    public function getImage($image)
    {
        if (!$image) {
            return '';
        } else {
            return   '/storage/'.$image->id.'/'.$image->file_name;
        }
    }

    public function getSymbol($chain)
    {
        if (!$chain) {
            return '';
        } else {
            return   $chain->symbol;
        }
    }

}
