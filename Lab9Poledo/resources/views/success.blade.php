<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-sm p-4 text-center" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h2 class="text-success">Registration Successful</h2>
            <p><strong>Name:</strong> {{ $userData['name'] }}</p>
            <p><strong>Email:</strong> {{ $userData['email'] }}</p>
            <a href="{{ url('/register') }}" class="btn btn-primary mt-3">Register Again</a>
        </div>
    </div>
</body>
</html>