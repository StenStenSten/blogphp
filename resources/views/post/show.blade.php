<!-- resources/views/post/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar bg-base-100 shadow-lg px-4">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="/">StenBlog</a>
        </div>
        <div class="flex-none">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
    </nav>

    <!-- Post Content -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="mb-4"><strong>Content:</strong> {{ $post->content }}</p>
        
        <!-- Display other columns if they exist -->
        <p class="mb-2"><strong>Post ID:</strong> {{ $post->id }}</p>
        <p class="mb-2"><strong>Created At:</strong> {{ $post->created_at }}</p>
        <p class="mb-4"><strong>Updated At:</strong> {{ $post->updated_at }}</p>

        <a href="{{ url('/') }}" class="btn btn-secondary">Back to all posts</a>
    </div>

    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="mb-4">{{ $post->content }}</p>

    <h2 class="text-xl font-semibold mt-8">Comments:</h2>

    @foreach($post->comments as $comment)
        <div class="p-4 mt-4 bg-gray-100 rounded-md">
            <p><strong>{{ $comment->author ?? 'Anonymous' }}</strong></p>
            <p>{{ $comment->content }}</p>
            <p class="text-sm text-gray-500">Posted on {{ $comment->created_at->format('d M Y, H:i') }}</p>
        </div>
    @endforeach

    <h3 class="text-lg font-bold mt-8">Add a Comment:</h3>
    <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="author" class="block mb-1 font-bold">Your Name:</label>
            <input type="text" name="author" id="author" class="input input-bordered w-full" placeholder="Optional">
        </div>
        <div class="mb-4">
            <label for="content" class="block mb-1 font-bold">Comment:</label>
            <textarea name="content" id="content" rows="4" class="textarea textarea-bordered w-full" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</div>

</body>
</html>
