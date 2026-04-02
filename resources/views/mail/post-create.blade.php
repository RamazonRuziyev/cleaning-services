<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hurmatli {{$post->user->name}} !</h1>
        <h5>siz {{$post->created_at }} da  yangi post yaratdinggiz</h5>
       <div>{{$post->title}}</div>
        <div>{{$post->short_content}}</div>
        <div>{{$post->content}}</div>
    </div>
</body>
</html>
