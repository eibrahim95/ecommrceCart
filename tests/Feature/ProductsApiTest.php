<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsApiTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_products()
    {
        $total = Product::count();
        $response = $this->get('/api/products');
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('products.total', $total);

    }
    public function test_add_product(){
        $response = $this->json('POST', '/api/products', [
            'name' => "Sony TV",
            'description' => "A Great Sony TV, A very Great Sony TV",
            'image' => "https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.jpg",
            'price' => 1234,
        ]);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('product.name', 'Sony TV')
            ->assertJsonPath('product.description', 'A Great Sony TV, A very Great Sony TV')
            ->assertJsonPath('product.price', '1234.0')
            ->assertJsonPath('product.image', 'https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.jpg');
        $response = $this->json('POST', '/api/products', [
            'name' => null,
            'description' => "A Great Sony TV",
            'image' => "https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.png",
            'price' => '12usd',
        ]);
        $response->assertStatus(422)->assertJson([
            'message' => "The given data was invalid.",
        ])
            ->assertJsonPath('errors.name', [0 => "The name field is required."])
            ->assertJsonPath('errors.image',  [0 => "The image is an invalid image."])
            ->assertJsonPath('errors.price',  [0 => "The price must be a number."]);
    }
    public function test_get_product_details(){
        $product = Product::inRandomOrder()->first();
        $response = $this->get('/api/products/'.$product->id);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('product.name', $product->name)
            ->assertJsonPath('product.description', $product->description)
            ->assertJsonPath('product.price', $product->price)
            ->assertJsonPath('product.image', $product->image);
    }
    public function test_update_product(){
        $product = Product::inRandomOrder()->first();
        $response = $this->json('PUT', '/api/products/'.$product->id, [
            'name' => "Sony TV",
            'description' => "A Great Sony TV, A very Great Sony TV",
            'image' => "https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.jpg",
            'price' => 1234,
        ]);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('product.name', 'Sony TV')
            ->assertJsonPath('product.description', 'A Great Sony TV, A very Great Sony TV')
            ->assertJsonPath('product.price', '1234.0')
            ->assertJsonPath('product.image', 'https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.jpg');
        $response = $this->json('PUT', '/api/products/'.$product->id, [
            'name' => null,
            'description' => "A Great Sony TV",
            'image' => "https://cf4.s3.souqcdn.com/item/2020/08/26/13/17/27/41/1/item_XL_131727411_6046129e9cab4.png",
            'price' => '12usd',
        ]);
        $response->assertStatus(422)->assertJson([
            'message' => "The given data was invalid.",
        ])
            ->assertJsonPath('errors.name', [0 => "The name field is required."])
            ->assertJsonPath('errors.image',  [0 => "The image is an invalid image."])
            ->assertJsonPath('errors.price',  [0 => "The price must be a number."]);
    }
    public function test_product_delete(){
        $total = Product::count();
        $product = Product::inRandomOrder()->first();
        $product_id = $product->id;
        $response = $this->json('DELETE', '/api/products/'.$product_id);
        $response->assertStatus(200)->assertJson([
            'status' => 1,
        ])
            ->assertJsonPath('products.total', $total-1);
        $product = Product::where(['id'=>$product_id])->first();
        $this->assertEquals($product, null);

    }
}
