<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagories extends Model
{
    // protected $fillable = ['id'];
    use HasFactory;

    public function posts(){
        
        return $this->hasMany(Post::class);
        
    }
}
