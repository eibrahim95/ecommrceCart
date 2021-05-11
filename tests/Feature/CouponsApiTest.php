<?php

namespace Tests\Feature;

use App\Models\Coupon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CouponsApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_coupons()
    {
        $total = Coupon::count();
        $response = $this->get('/api/coupons');
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('coupons.total', $total);
    }
    public function test_add_coupon(){
        $response = $this->json('POST', '/api/coupons', [
            'code' => "Khasm",
            'coupon_type' => "percentage",
            'value' => 1234,
        ]);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('coupon.code', 'Khasm')
            ->assertJsonPath('coupon.coupon_type', 'percentage')
            ->assertJsonPath('coupon.value', 1234);
        $response = $this->json('POST', '/api/coupons', [
            'code' => null,
            'coupon_type' => "something_else",
            'value' => '12usd',
        ]);
        $response->assertStatus(422)->assertJson([
            'message' => "The given data was invalid.",
        ])
            ->assertJsonPath('errors.code', [0 => "The code field is required."])
            ->assertJsonPath('errors.coupon_type',  [0 => "The selected coupon type is invalid."])
            ->assertJsonPath('errors.value',  [0 => "The value must be a number."]);
    }
    public function test_get_coupon_details(){
        $coupon = Coupon::inRandomOrder()->first();
        $response = $this->get('/api/coupons/'.$coupon->id);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('coupon.code', $coupon->code)
            ->assertJsonPath('coupon.coupon_type', $coupon->coupon_type)
            ->assertJsonPath('coupon.value', $coupon->value);
    }
    public function test_update_coupon(){
        $coupon = Coupon::inRandomOrder()->first();
        $response = $this->json('PUT', '/api/coupons/'.$coupon->id, [
            'code' => "Khasm",
            'coupon_type' => "percentage",
            'value' => 1234,
        ]);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('coupon.code', 'Khasm')
            ->assertJsonPath('coupon.coupon_type', 'percentage')
            ->assertJsonPath('coupon.value', 1234);
        $response = $this->json('PUT', '/api/coupons/'.$coupon->id, [
            'code' => null,
            'coupon_type' => "something_else",
            'value' => '12usd',
        ]);
        $response->assertStatus(422)->assertJson([
            'message' => "The given data was invalid.",
        ])
            ->assertJsonPath('errors.code', [0 => "The code field is required."])
            ->assertJsonPath('errors.coupon_type',  [0 => "The selected coupon type is invalid."])
            ->assertJsonPath('errors.value',  [0 => "The value must be a number."]);
    }
    public function test_coupon_delete(){
        $total = Coupon::count();
        $coupon = Coupon::inRandomOrder()->first();
        $coupon_id = $coupon->id;
        $response = $this->json('DELETE', '/api/coupons/'.$coupon_id);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('coupons.total', $total-1);
        $coupon = Coupon::where(['id'=>$coupon_id])->first();
        $this->assertEquals($coupon, null);

    }
}
