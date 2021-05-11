<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['session_id'];
    protected $appends = ['total', 'discount', 'grand_total'];
    public function items(){
        return $this->hasMany(CartItem::class)->with('product');
    }
    public function discounts(){
        return $this->hasMany(CartCoupon::class)->with('coupon');
    }
    public function getTotalAttribute(){
        return array_sum($this->items()->with('product')->get()->map(function ($item) {
            return $item->product->price * $item->count;
        })->toArray());

    }
    public function getDiscountAttribute(){
        $total = $this->total;
        return array_sum($this->discounts()->with('coupon')->get()->map(function ($item) use ($total) {
            return $item->coupon->coupon_type == 'percentage' ? $item->coupon->value / 100 * $total : $item->coupon->value;
        })->toArray());
    }
    public function getGrandTotalAttribute(){
        return $this->total - $this->discount;
    }
}
