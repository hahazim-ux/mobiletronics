<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        textarea { width: 100%; min-height: 100px; }
        .error { color: red; }
        .error-list { padding-left: 20px; }
        .current-image { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Edit Review</h1>

    @if($errors->any())
        <div class="error">
            <ul class="error-list">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reviews.update', $review->reviewId) }}" method="POST" enctype="multipart/form-data" style="max-width: 600px;">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="reviewDesc">Description:</label>
            <textarea name="reviewDesc" id="reviewDesc" required>{{ old('reviewDesc', $review->reviewDesc) }}</textarea>
        </div>

        <div class="form-group">
            <label>Current Image:</label>
            @if($review->reviewImage)
                <div class="current-image">
                    <img src="{{ asset('review_images/' . $review->reviewImage) }}" width="150">
                </div>
            @else
                <p>No image uploaded</p>
            @endif
            
            <label for="reviewImage">Change Image (optional):</label>
            <input type="file" name="reviewImage" id="reviewImage">
            <small>Accepted formats: jpeg, png, jpg, gif. Max size: 2MB</small>
        </div>

        <div class="form-group">
            <button type="submit" style="padding: 8px 15px; background: #4CAF50; color: white; border: none;">Update</button>
            <a href="{{ route('reviews.index') }}" style="padding: 8px 15px; background: #ccc; color: black; text-decoration: none; margin-left: 10px;">Cancel</a>
        </div>
    </form>
</body>
</html>