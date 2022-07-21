<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $fillable = ['dish_name', 'price', 'foto_url', 'restourant_id'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    protected $with = ['restourant'];
 
    public function restourant(){
       return $this->belongsTo(Restourant::class);
    }

    
   
}
