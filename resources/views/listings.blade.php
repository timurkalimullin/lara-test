<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listings</title>
</head>
<body>
    <h1>Here is the listings</h1>
    <p>{{ $heading }}</p>
    <div>
        @foreach($listings as $listing)
            <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
            <p>{{$listing['description']}}</p>
        @endforeach
    </div>
</body>
</html>
