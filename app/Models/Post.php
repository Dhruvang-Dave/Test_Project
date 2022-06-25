<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query , $search){
            
            $query->where('title' ,'like' , '%' . $search . '%')
                    ->orWhere('language' ,'like' , '%' . $search . '%');
        });
        
        $query->when($filters['catagories'] ?? false, function($query , $catagories){
            
            $query->whereAs('catagories' , function($query , $catagories){
                $query->Where('slug' , $catagories);

            });
        });

        $query->when($filters['author'] ?? false, function($query , $author){
            
            $query->whereAs('author' , function($query , $catagories){
                $query->Where('username' , $author);

            });
        });

    }

    // public function getRouteKeyName(){
    //     return Slug;   // return parent::getRouteKeyName();  
    // }
}


// $ composer require itsgoingd/clockwork
