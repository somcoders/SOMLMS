<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>

<body>
    <h1>Courses List</h1>

    @forelse ($courses as $course)
        <div style="background:teal;padding:10px;margin:5px;color:white">
            <h4><a href="{{ route('courses.show', [$course['slug']]) }}">{{ $course['name'] }}</a></h4>
        </div>

    @empty
        <p>No courses found</p>
    @endforelse



    <div>
        <a href="{{ route('home') }}">Back to Home</a>
    </div>
</body>

</html>
