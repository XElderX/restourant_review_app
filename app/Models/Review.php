<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $fillable = ['dish_id', 'author', 'comment', 'rate'];


    protected $with = ['dish'];

    public function dish(){
        return $this->belongsTo(Dish::class);
    }

    
}
