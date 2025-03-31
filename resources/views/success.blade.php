<!DOCTYPE html>
<html lang="en">
<head>
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow-lg p-4 text-center" style="width: 25rem;">
        <div class="card-body">
            <h2 class="card-title text-success">Registration Successful</h2>

            @if ($data)
                <p><strong>Name:</strong> {{ $data['name'] }}</p>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
            @else
                <p class="text-danger">No data available.</p>
            @endif

            <a href="{{ route('register.form') }}" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>

</body>
</html>
