<!-- resources/views/post/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        /* General Styles for Navbar */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar .nav-links {
            display: flex;
        }

        /* Responsive Dropdown for Small Screens */
        @media screen and (max-width: 768px) {
            .navbar .nav-links {
                display: none;
                flex-direction: column;
                background-color: #333
                position: absolute;
                top: 60px;
                right: 20px;
                width: 200px;
            }

            .navbar .nav-links.active {
                display: flex;
            }

            .navbar .menu-icon {
                display: block;
                color: white;
                font-size: 1.5em;
                cursor: pointer;
            }
        }

        /* Hide Menu Icon on Larger Screens */
        .menu-icon {
            display: none;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <!-- Logo Section -->
        <div class="logo">
            MyWebsite
        </div>
        <!-- Navigation Links -->
        <div class="nav-links">
         <a href="{{ route('login') }}">Login</a>
        </div>
    </nav>
    <h1>{{ $post->title }}</h1>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    
    <!-- Display other columns if they exist -->
    <p><strong>Post ID:</strong> {{ $post->id }}</p>
    <p><strong>Created At:</strong> {{ $post->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $post->updated_at }}</p>

    <a href="{{ url('/') }}">Back to all posts</a>
</body>
</html>

