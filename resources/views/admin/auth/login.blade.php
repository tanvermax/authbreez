<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Login page</title>
</head>
<body>
    <h1>Admin Login</h1>
    <form action="{{ route('admin.authenticate') }}" method="POST" class="">
        @csrf
        <input type="text" placeholder="email" name="email" value="{{ old('email') }}"><br>
        @error("email")
        <span>{{ $message }}</span>
        @enderror
        <input type="text" placeholder="password" name="password" value="{{ old('password') }}"><br>
        @error("password")
        <span>{{ $message }}</span>
        @enderror
        <br>
        <button>login</button>
    </form>
</body>
</html>