<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendorId',
        'imagePath', 
        'productName', 
        'productPrice',
        'description', 
        'created_at', 
        'updated_at'
    ];
}
