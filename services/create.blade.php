@extends('layouts.adminlayouts')

@section('title', 'Add New Service')

@section('content')

    @if(session('fail'))
        <div class="text-red-600 mb-4">{{ session('fail') }}</div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-xl">
        @csrf

        <div class="mb-4">
            <label for="serviceName" class="block font-semibold mb-1">Service Name</label>
            <input type="text" name="serviceName" id="serviceName" value="{{ old('serviceName') }}"
                   class="w-full border border-gray-300 p-2 rounded" required>
            @error('serviceName')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="serviceImage" class="block font-semibold mb-1">Service Image</label>
            <input type="file" name="serviceImage" id="serviceImage" class="w-full border border-gray-300 p-2 rounded">
            @error('serviceImage')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-between">
            <a href="{{ route('services.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Service</button>
        </div>
    </form>

@endsection
