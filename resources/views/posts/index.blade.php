<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
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

    <!-- Post List -->
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">All Posts</h1>

        @foreach($posts as $post)
            <div class="p-6 mb-6 bg-white shadow-md rounded-lg">
                <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                <p>{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary mt-4">Read more</a>
            </div>
        @endforeach

        <!-- Pagination Links -->
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
