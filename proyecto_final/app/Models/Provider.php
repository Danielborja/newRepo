<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = ['name','dni','adress'];

    public function subjects(){
        return $this->belongsToMany(Product::class,'product_provider');
    }
}
