<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagePath', 
        'contentTitle', 
        'author', 
        'category', 
        'content', 
        'created_at', 
        'updated_at'
    ];
}
