<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert') }}" method="post">
        @csrf
        <div>title: <input type="text" name="title"></div>
        <div>description: <input type="text" name="description"></div>
        <div><input type="submit"></div>
    </form>
</body>
</html>