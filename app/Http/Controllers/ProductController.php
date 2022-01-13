<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Product::class, 'product');
    }

    public function index()
    {
        return view('product.index')
            ->with('products', Product::get());
    }

    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request, Product $product)
    {
        Gate::authorize('isAdmin');
        $product = new Product;
        $product->fill($request->all());
        $filename = $request->file('image')->store('public/image');
        $product->image = basename($filename);
        $product->save();

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all())->save();
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
