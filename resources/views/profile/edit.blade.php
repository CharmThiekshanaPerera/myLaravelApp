<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}">
        </div>
        <div>
            <label for="password">New Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm New Password:</label>
            <input type="password" name="password_confirmation">
        </div>
        <div>
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password">
        </div>
        <button type="submit">Update</button>
    </form>

    <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
        @csrf
        @method('DELETE')
        <div>
            <label for="password">Enter Your Password to Delete Your Account:</label>
            <input type="password" name="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Delete Account</button>
    </form>
</body>
</html>
