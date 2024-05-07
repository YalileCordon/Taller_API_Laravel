<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Category extends Model
{
    use HasFactory;

    protected $table = 'Category';
    protected $fillable = ['code', 'name', 'description', 'status'];

    // Relación uno a muchos con la clase Dress
    public function dresses()
    {
        return $this->hasMany(Dresses::class);
    }
}




