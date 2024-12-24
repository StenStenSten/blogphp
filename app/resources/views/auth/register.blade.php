<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-center">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-control">
                    <label class="label" for="name">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" name="name" id="name" class="input input-bordered" required>
                </div>
                <div class="form-control mt-4">
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
                    <label class="label" for="password_confirmation">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="input input-bordered" required>
                </div>
                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="link link-primary">Already have an account? Login</a>
            </div>
        </div>
    </div>
</body>
</html>
