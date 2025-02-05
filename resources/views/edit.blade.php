<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}
form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 2rem auto;
}
label {
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
    display: block;
}
input{
    width: 100%;
}
select{
    width: 100%;
}

    </style>
</head>
<body>
    <form action="{{route('editpost',$datas->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        @foreach ($errors->all() as $error )
        <p style="color:red;">{{$error}}</p>
        @endforeach
        @endif
        <label for="">Name</label>
        <input type="text" name="name" value="{{$datas->name}}" placeholder="Enter your name">
        <label for="">Email</label>
        <input type="email" name="email" value="{{$datas->email}}" placeholder="Enter your email">
        <label for="">Descrption</label>
        <input type="text" name="description" value="{{$datas->description}}" placeholder="Enter description">
        <label for="">IsActive</label>
        <select name="active" id="" value="{{$datas->active}}">
            <option value="is Active" >Is Active</option>
            <option value="InActive">In Active</option>
        </select>
        <label for="">UploadFile/Image</label>
        <input type="file" name="image" value="{{asset($datas->image)}}">
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</body>
</html>