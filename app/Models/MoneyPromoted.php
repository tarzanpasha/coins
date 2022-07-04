<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyPromoted extends Model
{
    use HasFactory;
    protected $fillable = [
        'money_id',
        'date_begin',
        'date_end'
    ];

    public function money()
    {
        return $this->belongsTo(Money::class);
    }
}
