<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Betting extends Model
{
    use HasFactory;
    protected $table = "bettings";

    protected $fillable = ['logo','name','description','bonus','turnover','min_odds','slug','website_url','referral_url','review'];

    // public function setSlugAttribute(){
    //     $this->attributes['slug'] = str_slug($this->country_id , "-");
    // }
   
    public function feature(){
    
        return $this->hasMany(Feature::class, 'betting_id', 'id');
    }

    public function countries(){
    
        return $this->hasMany(CountryBetting::class, 'betting_id', 'id');
    }
}
