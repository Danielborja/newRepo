<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buyer;
use App\Models\Provider;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_type','brand','model', 'price', 'buyer_id'];

    public function category(){
        return $this->belongsTo(Buyer::class);
    }

    public function students(){
        return $this->belongsToMany(Provider::class,'product_provider');
    }
}
