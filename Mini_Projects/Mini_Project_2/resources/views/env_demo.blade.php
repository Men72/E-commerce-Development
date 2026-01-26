<!DOCTYPE html>
<html lang="en">
<head>
    <title>Env Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <div class="card bg-secondary text-white shadow">
            <div class="card-header"><h4>System Configuration</h4></div>
            <div class="card-body">
                <p><strong>App Name:</strong> {{ $name }}</p>
                <p><strong>Environment:</strong> <span class="badge bg-info">{{ $env }}</span></p>
                <p><strong>Project Status:</strong> {{ $status }}</p>
            </div>
        </div>
    </div>
</body>
</html>