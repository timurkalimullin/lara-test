<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Listing</title>
</head>
<body>
    @if ($listing == null)
        <p>No listing found</p>
    @else
    <h1>Here is the single listing</h1>
    <div>
        <p>{{$listing['title']}}</p>
        <p>{{$listing['description']}}</p>
    </div>
    @endif
</body>
</html>
