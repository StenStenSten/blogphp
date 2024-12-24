<!-- resources/views/post/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    
    <!-- Display other columns if they exist -->
    <p><strong>Post ID:</strong> {{ $post->id }}</p>
    <p><strong>Created At:</strong> {{ $post->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $post->updated_at }}</p>

    <a href="{{ url('/') }}">Back to all posts</a>
</body>
</html>

