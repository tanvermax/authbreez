
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin register page</title>
</head>
<body>
    <h1>Admin register</h1>
    <form action="{{ route('admin.store') }}" method="POST" class="">
        @csrf
         <input type="text" placeholder="name" name="name" value="{{ old('name') }}"><br>
        @error("name")
        <span>{{ $message }}</span>
        @enderror
        <input type="text" placeholder="email" name="email" value="{{ old('email') }}"><br>
        @error("email")
        <span>{{ $message }}</span>
        @enderror
        <input type="text" placeholder="password" name="password" value="{{ old('password') }}"><br>
        <input type="text" placeholder="confirm_password" name="password_confirmation" value="{{ old('password') }}"><br>
        @error("password")
        <span>{{ $message }}</span>
        @enderror
        <br>
        <button>Register</button>
    </form>
</body>
</html>