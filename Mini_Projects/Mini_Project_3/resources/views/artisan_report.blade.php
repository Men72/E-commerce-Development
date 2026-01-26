<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artisan Command Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">🛠️ Artisan Scaffolding Report</h1>
        
        <div class="row">
            @foreach($commands as $command)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <code>{{ $command['name'] }}</code>
                    </div>
                    <div class="card-body">
                        <h6 class="text-primary">File Generated:</h6>
                        <p class="small text-muted"><code>{{ $command['file'] }}</code></p>
                        <hr>
                        <h6>Purpose:</h6>
                        <p>{{ $command['purpose'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 p-4 bg-white rounded shadow-sm border">
            <h4>💡 Summary of Skills Gained</h4>
            <ul>
                <li><strong>CLI Mastery:</strong> Navigating the terminal to build apps faster.</li>
                <li><strong>Scaffolding:</strong> Automatically creating boilerplate code.</li>
                <li><strong>Architecture:</strong> Understanding where Controllers, Models, and Migrations live.</li>
            </ul>
        </div>
    </div>
</body>
</html>