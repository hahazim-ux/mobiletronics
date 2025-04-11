<!DOCTYPE html>
<html>
<head>
    <title>Review List</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
        img { max-width: 100px; height: auto; }
        .actions { white-space: nowrap; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>All Reviews</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if(session('fail'))
        <div class="error">{{ session('fail') }}</div>
    @endif

    <div style="margin: 20px 0;">
        <a href="{{ route('reviews.create') }}" style="padding: 8px 15px; background: #4CAF50; color: white; text-decoration: none;">+ Add New Review</a>
    </div>

    @if($reviews->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->reviewId }}</td>
                    <td>
                        @if($review->reviewImage)
                            <img src="{{ asset('review_images/' . $review->reviewImage) }}" alt="Review Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ Str::limit($review->reviewDesc, 100) }}</td>
                    <td class="actions">
                        <a href="{{ route('reviews.edit', $review->reviewId) }}" style="margin-right: 10px;">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->reviewId) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this review?')" style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No reviews found.</p>
    @endif
</body
