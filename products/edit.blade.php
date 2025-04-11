@extends('layouts.adminlayouts')

@section('title', 'Edit Product')

@section('content')

    <div class="mb-4">
        <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Back to Product List</a>
    </div>

    <form action="{{ route('products.update', $product->productId) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="productName" class="block text-sm font-semibold">Product Name</label>
            <input type="text" id="productName" name="productName" value="{{ old('productName', $product->productName) }}" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-semibold">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="productImage" class="block text-sm font-semibold">Product Image</label>
            <input type="file" id="productImage" name="productImage" class="w-full px-4 py-2 border rounded-md" accept="image/*">
            @if($product->productImage)
                <div class="mt-2">
                    <img src="{{ asset('product_images/' . $product->productImage) }}" alt="Product Image" class="w-32">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update Product</button>
        </div>
    </form>

@endsection
