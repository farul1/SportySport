<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $units = Unit::all();
        return view('products.create', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:products',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'satuan_id' => 'required|exists:units,id',
        ]);

        $productData = $request->except('_token');

        Product::create($productData);

        return redirect()->route('products.index')->with('success', 'Product berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $units = Unit::all();

        return view('products.edit', compact('product', 'units'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:products,kode,'.$id,
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'satuan_id' => 'required|exists:units,id',
        ]);

        $product->update($request->except('_token'));

        return redirect()->route('products.index')->with('success', 'Product berhasil diperbarui.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product berhasil dihapus.');
    }
}
