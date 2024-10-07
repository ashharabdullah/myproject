<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'price', 'seller_id'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function buyers()
    {
        return $this->belongsToMany(Buyer::class);
    }
}
