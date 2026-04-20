<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'code' => 'required|unique:products,code|max:20',
            'stock' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil ditambahkan!');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:100',
            'code' => 'required|max:20|unique:products,code,' . $product->id,
            'stock' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil dihapus!');
    }
}
