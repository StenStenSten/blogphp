<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-center">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-control">
                    <label class="label" for="email">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" name="email" id="email" class="input input-bordered" required>
                </div>
                <div class="form-control mt-4">
                    <label class="label" for="password">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" id="password" class="input input-bordered" required>
                </div>
                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="link link-primary">Don't have an account? Register</a>
            </div>
        </div>
    </div>
</body>
</html>
