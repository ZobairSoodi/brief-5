<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route("add") }}">Add</a>
    <table>
        <thead>
            <th>title</th>
            <th>descrip</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->descrip }}</td>
                    <td>
                        <a href="{{ route("edit", ['id'=>$row->id]) }}">Edit</a>
                        <a href="{{ route("delete", ['id'=>$row->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
