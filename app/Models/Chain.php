<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Chain extends Model  implements HasMedia
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
        return $this->hasOne(Media::class, 'model_id', 'id')->where('model_type','App\Models\Chain');
    }


    public function money()
    {
        return $this->hasMany(Money::class, 'id', 'chain_id');
    }

}
