<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;  

class Dresses extends Model
{
    use HasFactory;
    //use Sluggable; 
    protected $fillable = ['name', 'size', 'color', 'material', 'gender', 'origin', 'description', 'price', 'quantity', 'designer', 'status', 'categoryId', 'manufacturing_date']; 

    // public function sluggable(): array 
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name',
    //             'onUpdate' => true
    //         ]
    //     ];
    // }
}