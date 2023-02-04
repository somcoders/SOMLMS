<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
</head>
<body>
        <h1>category</h1>
        <h4 style="color:green;"><?= $category["name"]; ?></h4>

         <a href="<?= route("categories.index") ?>">Back to categorys</a>
</body>
</html>