<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog</title>
</head>
<body>
    <h1>Create New Blog</h1>
    <form action="{{ route{'yuna.create'} }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <textarea name="content" cols="20" rows="5"></textarea>
        <button type="submit">Public Blog</button>
    </form>
</body>
</html>
