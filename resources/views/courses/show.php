<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
        <h1>Course</h1>
        <h4 style="color:green;"><?= $course["name"]; ?></h4>

         <a href="<?= route("courses.index") ?>">Back to Courses</a>
</body>
</html>