<!-- Simple listing of students -->
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student['name'] }} — {{ $student['age'] }} years old</li>
        @endforeach
    </ul>
</body>
</html>