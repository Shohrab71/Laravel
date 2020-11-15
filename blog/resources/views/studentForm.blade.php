<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
</head>
<body>
    <h1>Student Form</h1>
    <form action="/insert" method="post">
        <?php echo csrf_field() ?>
        <p><input type="text" name="name" placeholder="Enter Student Name"></p>
        <!-- <p><input type="text" name="email" placeholder="Enter Email"></p> -->
        <p><input type="submit" name="submit"></p>

    </form>
</body>
</html>