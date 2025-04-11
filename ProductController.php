<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::orderBy('productId', 'desc')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'productImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('productImage')) {
                $imageName = time().'.'.$request->productImage->extension();
                $request->productImage->move(public_path('product_images'), $imageName);
                $validated['productImage'] = $imageName;
            }

            ProductModel::create($validated);
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('fail', 'Failed to create product: '.$e->getMessage());
        }
    }

    public function show($id)
    {
        $product = ProductModel::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = ProductModel::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = ProductModel::findOrFail($id);

        $validated = $request->validate([
            'productName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'productImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('productImage')) {
                // Delete old image if exists
                if ($product->productImage && file_exists(public_path('product_images/'.$product->productImage))) {
                    unlink(public_path('product_images/'.$product->productImage));
                }

                $imageName = time().'.'.$request->productImage->extension();
                $request->productImage->move(public_path('product_images'), $imageName);
                $validated['productImage'] = $imageName;
            }

            $product->update($validated);
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('fail', 'Failed to update product: '.$e->getMessage());
        }
    }

    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);

        try {
            // Delete associated image
            if ($product->productImage && file_exists(public_path('product_images/'.$product->productImage))) {
                unlink(public_path('product_images/'.$product->productImage));
            }

            $product->delete();
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('fail', 'Failed to delete product: '.$e->getMessage());
        }
    }
}
