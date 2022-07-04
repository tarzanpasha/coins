<?php

namespace App\Models;

use App\Models\Chain;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Platform;


class Money extends Model   implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public const COIN_MARKET_CAP = 5;
    public const COIN_GECKO = 6;
    public const COIN_UNIVERSAL = 7;

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
        'discord_link',
        'votes',
        'platform_id'
    ];

    protected $casts = [
        'is_presale' => 'boolean',
    ];

    public function chain()
    {
        return $this->belongsTo(Chain::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }



    public function image()
    {
        return $this->hasOne(Media::class, 'model_id', 'id')->where('model_type','App\Models\Money');
    }


    public function getImage($image)
    {
        if (!$image) {
            return '';
        } else {
            return   '/storage/'.$image->id.'/'.$image->file_name;
        }
    }

    public function isCoinMarketCap($platform)
    {
        if ( !$platform ) return false;
        if ( ($platform->id == Self::COIN_MARKET_CAP) || ($platform->id == Self::COIN_UNIVERSAL) ) {
            return true;
        }
    }

    public function isCoinGecko($platform)
    {
        if ( !$platform ) return false;
        if ( ($platform->id == Self::COIN_GECKO) || ($platform->id == Self::COIN_UNIVERSAL) ) {
            return true;
        }
    }



}
