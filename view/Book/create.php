<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book | Create</title>
</head>

<body>
    <form action="store.php" method="post">
        <fieldset>
            <legend>Create New Book</legend>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" placeholder="Title"><br><br>
            <label for="author">Author</label><br>
            <input type="text" name="author" id="author" placeholder="Author"><br>
            <br><br>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
</body>

</html>