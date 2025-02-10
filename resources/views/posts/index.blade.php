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
    <nav class="flex justify-between items-center p-4 bg-white shadow-md bg-base-100 shadow-lg px-4">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="/">StenBlog</a>
        </div>
        <div class="flex-none">
            @if(auth()->check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-5 py-2 text-white bg-blue-500 rounded-md text-base hover:bg-blue-600">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif
        </div>
    </nav>

    <!-- Post List -->
    <div class="max-w-[1200px] mx-auto p-5 flex flex-col gap-5" mt-10">
        <h1 class="text-3xl font-bold mb-6">All Posts</h1>

        @if($posts->isEmpty())
            <p class="text-gray-600">No posts available at the moment.</p>
        @else
            @foreach($posts as $post)
                        <div class="p-6 mb-6 bg-white shadow-md rounded-lg flex flex-col gap-2.5">
                <h2 class="text-2xl font-semibold text-gray-900">{{ $post->title }}</h2>
                <p class="text-base text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="self-start px-5 py-2.5 text-white text-base bg-emerald-500 rounded-md hover:bg-emerald-600 mt-4">
                    Read more
                </a>
            </div>
            @endforeach

            <!-- Pagination Links -->
            <div class="mt-8 flex justify-center items-center gap-2">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</body>
</html>
