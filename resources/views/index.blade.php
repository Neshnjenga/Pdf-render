<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <a href="/crud" class="btn btn-success">Create</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($datas as $data )
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->description}}</td>
            <td>
                <img src="{{asset($data->image)}}" height="70" width="150"  alt="">
            </td>
            <td>{{$data->active}}</td>
            <td>
                <a href="/edit/{{$data->id}}" class="btn btn-outline-primary">Edit</a>
                <a href="/delete/{{$data->id}}" onclick="return(confirm('Are you sure you want to delete'))" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </table>
</body>
</html>