<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Buyer extends Model
{
    use HasFactory;
    protected $fillable = ['name','dni','contact'];

    public function articles(){
        return $this->hasMany(Product::class);
    }
}
