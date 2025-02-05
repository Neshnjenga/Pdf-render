<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        h1{
            color: white;
            background-color: lightseagreen;
        }
        p{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Title:: {{$title}}</h1>
    <p>Date :: {{$date}}</p>
    <p>Age :: {{$age}}</p>
    <p>Gender :: {{$gender}}</p>
    <p>Marriage status :: {{$marriagestatus}}</p>
    <p>Favourite artist :: {{$favouriteartist}}<p>
    <p>Favourite song :: {{$favouritesong}}</p>
</body>
</html>