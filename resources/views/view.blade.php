<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <p><b>Title:{{$blog->title}}</b></p>
<br>

<img src="{{ Storage::url($blog->image) }}" style="width: 300px; margin:10px" alt="" >


<br>
<p>{{$blog->description}}</p>

<button> <a href="/list">Cancle</a></button>
</form>
</body>
</html>
