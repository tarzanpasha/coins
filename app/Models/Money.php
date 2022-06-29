<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Chain;


class Money extends Model   implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'symbol',
        'description',
        'chain_id',
        'is_presale',
        'contract_address',
        'presale_link',
        'description',
        'launch_date',
        'custom_chart_link',
        'custom_swap_link',
        'website_link',
        'telegram_link',
        'twitter_link',
        'discord_link'
    ];

    protected $casts = [
        'is_presale' => 'boolean',
    ];

    public function chain()
    {
        return $this->belongsTo(Chain::class);
    }



    public function image()
    {
        return $this->hasOne(Media::class, 'model_id', 'id')->where('model_type','App\Models\Money');
    }





}
