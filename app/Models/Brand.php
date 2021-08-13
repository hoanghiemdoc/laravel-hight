<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guarded = [];


    // định nghĩa quan hệ của brand tới product

    public function products(){
        return $this->hasMany(Product::class,'brand_id','id');

        // thuc hien ket noi các khóa từ class lại với nhau
    }
}
