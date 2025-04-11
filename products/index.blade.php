@extends('layouts.adminlayouts')

@section('title', 'All Products')

@section('content')

    @php use Illuminate\Support\Str; @endphp

    @if(session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    @if(session('fail'))
        <div class="text-red-600 mb-4">{{ session('fail') }}</div>
    @endif

    <div class="mb-4">
        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">+ Add New Product</a>
    </div>

    @if($products->count() > 0)
        <div class="overflow-auto bg-white rounded shadow">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="py-2 px-4">ID</th>
                        <th class="py-2 px-4">Image</th>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Price</th>
                        <th class="py-2 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-2 px-4">{{ $product->productId }}</td>
                        <td class="py-2 px-4">
                            @if($product->productImage)
                                <img src="{{ asset('product_images/' . $product->productImage) }}" alt="Product Image" class="w-24">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $product->productName }}</td>
                        <td class="py-2 px-4">${{ number_format($product->price, 2) }}</td>
                        <td class="py-2 px-4 whitespace-nowrap">
                            <a href="{{ route('products.edit', $product->productId) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <form action="{{ route('products.destroy', $product->productId) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600">No products found.</p>
    @endif

@endsection

