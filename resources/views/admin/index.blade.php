<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="{{route('yuna.create')}}">Create New Blog</a></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($yunas as $yuna)
            <tr>
                <td>{{$yuna->id}}</td>
                <td>{{$yuna->title</td>
                <td>{!! $yuna->content !!}</td>
                <td>
                    <form action=""></form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
