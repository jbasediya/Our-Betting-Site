<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = ['betting_id','description','status',];

    public function betting(){
    
        return $this->belongsToMany(Betting::class, 'id', 'betting_id');
    }
}
