<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendorId', 
        'imagePath', 
        'storeName', 
        'address',
        'category', 
        'wa', 
        'ig',
        'shopee',
        'others',
        'desc', 
        'created_at', 
        'updated_at'
    ];
    public function albums(){
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
