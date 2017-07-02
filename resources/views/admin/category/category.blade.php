<html>
<head>
    <title>View category</title>
</head>
<body>
<ul>
    @foreach($categories as $article)
    <li>Name : {{$article->Name}} | Tag : {{$article->Tag}}</li>
    @endforeach
</ul>
</body>
</html>