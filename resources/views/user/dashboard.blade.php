<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Include any necessary stylesheets here -->
</head>
<body>
    <h1>Welcome to the User Dashboard</h1>

    <!-- Display any success or error messages -->
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
