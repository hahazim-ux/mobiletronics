@extends('layouts.adminlayouts')

@section('title', 'Add New Product')

@section('content')

    <div class="mb-4">
        <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Back to Product List</a>
    </div>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="productName" class="block text-sm font-semibold">Product Name</label>
            <input type="text" id="productName" name="productName" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-semibold">Price</label>
            <input type="text" id="price" name="price" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="productImage" class="block text-sm font-semibold">Product Image</label>
            <input type="file" id="productImage" name="productImage" class="w-full px-4 py-2 border rounded-md" accept="image/*">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Product</button>
        </div>
    </form>

@endsection
