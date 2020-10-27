<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    use HasFactory;
<<<<<<< HEAD
    public function tags(){
        return $this->belongsToMany(Tag::class);
=======

    public function reviews()
    {
      return $this->hasMany(Review::class);
>>>>>>> ghulam_ali
    }
}
