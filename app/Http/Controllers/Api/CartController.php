<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartCoupon;
use App\Models\CartItem;
use App\Models\Coupon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    protected $cart;
    protected $count;

    /**
     * CartController constructor.
     * @param Request $request
     */
    public function __construct(Request $request){
        if(!App::runningInConsole()) {
            $this->update_cart($request);
        }
    }

    /**
     * @param Request $request
     */
    public function update_cart(Request $request): void{
        $this->cart = Cart::with(['items', 'discounts'])->where(['session_id'=>$request->input('session_id')])->firstOrCreate(['session_id'=>$request->input('session_id')]);
        $this->count = $this->cart ? $this->cart->items()->count() : 0;
    }

    /**
     * @return array
     */
    public function get_cart(): array
    {
        return ['count'=>$this->count, 'content'=>$this->cart];
    }
    /**
     * @param Request $request
     * @return array
     */
    public function cart(Request $request): array
    {
        return ['status'=>1,'cart'=>$this->get_cart()];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function change_cart(Request $request): array
    {
        $item = $this->cart->items()->whereHas('product', function (Builder $query) use ($request){
            $query->where(['id'=>$request->input('product_id')]);
        })->first();
        $item = $item ?$item: CartItem::create(['cart_id'=>$this->cart->id, 'product_id'=>$request->input('product_id'), 'count'=>0]);
        $change_type = $request->input('change_type');
        if ($change_type == '+'){
            $item->count += 1;
            $item->save();
            $item->refresh();
        }
        else if ($change_type == '-' && $item->count > 1){
            $item->count -= 1;
            $item->save();
            $item->refresh();
            $this->cart->refresh();
            if($this->cart->grand_total < 0){
                $item->count += 1;
                $item->save();
                return ['status'=>0, 'errors'=>['reasons'=>["Removing this item makes the grand total less than zero, please remove a coupon first"]]];
            }
        }
        else {
            $item->delete();
        }
        $this->update_cart($request);
        return ['status'=>1,'cart'=>$this->get_cart()];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function apply_coupon(Request $request): array
    {
        $coupon = Coupon::where(['code'=>$request->input('code')])->first();
        $applied = $this->cart->discounts()->where(['coupon_id'=>$coupon->id])->first();
        if($applied){
            return ['status'=>0, 'errors'=>['coupon'=>["Already applied"]]];
        }
        $discount  = CartCoupon::create(['coupon_id'=>$coupon->id, 'cart_id'=>$this->cart->id]);
        if($this->cart->grand_total < 0){
            $discount->delete();
            return ['status'=>0, 'errors'=>['coupon'=>["The discount the coupon provides exceeds the order total"]]];
        }
        $this->update_cart($request);
        return ['status'=>1, 'cart'=>$this->get_cart()];
    }

    /**
     * @param Request $request
     * @param CartCoupon $cart_coupon
     * @return array
     */
    public function remove_coupon(Request $request, CartCoupon $cart_coupon): array
    {
        if ($this->cart && $cart_coupon->cart && $this->cart->id == $cart_coupon->cart->id){
            $cart_coupon->delete();
        }
        $this->update_cart($request);
        return ['status'=>1, 'cart'=>$this->get_cart()];
    }
}
