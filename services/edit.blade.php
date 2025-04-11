@extends('layouts.adminlayouts')

@section('title', 'Edit Service')

@section('content')

    @if(session('fail'))
        <div class="text-red-600 mb-4">{{ session('fail') }}</div>
    @endif

    <form action="{{ route('services.update', $service->serviceId) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="serviceName" class="block font-semibold mb-1">Service Name</label>
            <input type="text" name="serviceName" id="serviceName" value="{{ old('serviceName', $service->serviceName) }}"
                   class="w-full border border-gray-300 p-2 rounded" required>
            @error('serviceName')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="serviceImage" class="block font-semibold mb-1">Service Image</label>
            <input type="file" name="serviceImage" id="serviceImage" class="w-full">
            @if($service->serviceImage)
                <p class="mt-2">Current Image:</p>
                <img src="{{ asset('service_images/' . $service->serviceImage) }}" alt="Service Image" class="w-24 mt-1">
            @endif
            @error('serviceImage')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
    </form>

@endsection
