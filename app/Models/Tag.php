<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
