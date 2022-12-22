<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('form') }}" method="post">
        @csrf
        <label>email: <input type="email" name="email" value="zobair@gmail.com"></label>
        <label>password: <input type="password" name="password" value="pass1234"></label>
        <input type="submit">
    </form>
</body>
</html>