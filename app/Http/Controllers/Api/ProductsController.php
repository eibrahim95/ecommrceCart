<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\EditProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the products resource.
     *
     * @return array
     */
    public function index(): array
    {
        return ['status'=>1, 'products'=>Product::paginate(40)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProductRequest $request
     * @return array
     */
    public function store(CreateProductRequest $request): array
    {
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
        ]);
        $product->save();
        $product->refresh();
        return ['status'=>1, 'product'=>$product];
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return array
     */
    public function show(Product $product): array
    {
        return ['status'=>1, 'product'=>$product];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditProductRequest $request
     * @param Product $product
     * @return array
     */
    public function update(EditProductRequest $request, Product $product): array
    {
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
        ]);
        $product->refresh();
        return ['status'=>1, 'product'=>$product];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return array
     */
    public function destroy(Product $product): array
    {
        $product->delete();
        return ['status'=>1, 'products'=>Product::paginate(40)];
    }
}
