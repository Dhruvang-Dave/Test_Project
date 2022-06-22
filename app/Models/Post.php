<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'language', 'body'];

    protected $with = ['catagories', 'author'];
    
    public function catagories(){
        
        return $this->belongsTo(catagories::class);
        
    }

    public function author(){
         
            return $this->belongsTo(User::class, 'user_id');

    }

    // public function getRouteKeyName(){
    //     return Slug;   // return parent::getRouteKeyName();
    // }
}


// $ composer require itsgoingd/clockwork
