<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h2 class="text-center mb-4">Register</h2>
            <form action="{{ url('/register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name') }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
