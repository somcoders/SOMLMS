<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <h1>Categories List</h1>

    @forelse ($categories as $category)
        <div style="background:teal;padding:10px;margin:5px;color:white">
            <h4><a href="{{ route('categories.show', [$category['slug']]) }}">{{ $category['name'] }}</a></h4>
        </div>

    @empty
        <p>No Categories Found</p>
    @endforelse

    <div>
        <a href="{{ route('home') }}">Back to Home</a>
    </div>
</body>

</html>
