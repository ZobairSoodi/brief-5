<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update', ['id'=>$row->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <div>title: <input type="text" value="{{ $row->title }}" name="title"></div>
        <div>description: <input type="text" value="{{ $row->description }}" name="description"></div>
        <div><input type="submit"></div>
    </form>
</body>
</html>