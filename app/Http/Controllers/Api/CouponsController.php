<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coupons\CreateCouponRequest;
use App\Http\Requests\Coupons\EditCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        return ['status'=>1, 'coupons'=>Coupon::paginate(40)];

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCouponRequest $request
     * @return array
     */
    public function store(CreateCouponRequest $request): array
    {
        $coupon = Coupon::create([
            'code'=>$request->input('code'),
            'coupon_type'=>$request->input('coupon_type'),
            'value'=>$request->input('value'),
        ]);
        return ['status'=>1, 'coupon'=>$coupon];
    }

    /**
     * Display the specified resource.
     *
     * @param Coupon $coupon
     * @return array
     */
    public function show(Coupon $coupon): array
    {
        return ['status'=>1, 'coupon'=>$coupon];
    }


    /**
     * Update the specified resource in storage.
     *
     * @param EditCouponRequest $request
     * @param Coupon $coupon
     * @return array
     */
    public function update(EditCouponRequest $request, Coupon $coupon): array
    {
        $coupon->update([
            'code'=>$request->input('code'),
            'coupon_type'=>$request->input('coupon_type'),
            'value'=>$request->input('value'),
        ]);
        return ['status'=>1, 'coupon'=>$coupon];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupon $coupon
     * @return array
     */
    public function destroy(Coupon $coupon): array
    {
        $coupon->delete();
        return ['status'=>1, 'coupons'=>Coupon::paginate(40)];
    }
}
