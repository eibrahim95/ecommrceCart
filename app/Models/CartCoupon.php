<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartCoupon extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'coupon_id'];
    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
