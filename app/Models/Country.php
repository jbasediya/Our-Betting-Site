<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'status','iso_code2', 'iso_code3', 'num_code'
    ];

    protected $appends = ['slug'];

    public function getSlugAttribute()
    {
        return Str::slug($this->iso_code2, '-');
    }

    public function bettings()
    {
        return $this->hasMany(CountryBetting::class, 'country_id', 'id');
    }

   
}
