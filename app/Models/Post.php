<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\catagories;

// use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'language', 'body' , 'id', 'catagories_id', 'user_id' , 'slug' , 'thumbnail'];

    protected $with = ['catagories', 'author'];
    
    public function catagories(){
        
        return $this->belongsTo(catagories::class);
        
    }

    public function comments(){
        
        return $this->hasMany(Comment::class);
    }

    public function author(){
         
            return $this->belongsTo(User::class, 'user_id');

    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, fn($query , $search)=>
            
            $query->where('title' ,'like' , '%' . $search . '%')
                    ->orWhere('language' ,'like' , '%' . $search . '%'));
        
        
        $query->when($filters['catagories'] ?? false, fn($query , $catagories) =>
            
            $query->whereHas('catagories' , fn($query) =>
                $query->Where('name' , $catagories)

            ));

        $query->when($filters['author'] ?? false, fn($query , $author) =>
            
            $query->whereAs('author' , fn($query) =>
                $query->Where('username' , $author)
            ));

    }

    // public function getRouteKeyName(){
    //     return Slug;   // return parent::getRouteKeyName();  
    // }
}


// $ composer require itsgoingd/clockwork
