<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryBetting extends Model
{
    use HasFactory;
    
    protected $table = 'country_bettings';

    protected $fillable = ['country_id','betting_id'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function betting()
    {
        return $this->belongsTo(Betting::class, 'betting_id', 'id');
    }

}
