<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restourant extends Model
{
    use HasFactory;
    
    public $fillable = ['r_name', 'city', 'address', 'working_hours'];

public function dishes(){
    return $this->hasMany(Dish::class);
}



}
