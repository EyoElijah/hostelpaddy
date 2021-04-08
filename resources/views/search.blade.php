<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form method="get" action="{{ route('search')}}">
        @csrf
        <input type="text" name="query" placeholder="search user">
        <button type="submit">search</button>
    </form>
        
        @if($users->isNotEmpty())
            @foreach ($users as $user)
                <div>
                {{$user->name}}
                </div>
            @endforeach
        @else
            <div>
            <h2> No user found</h2>
            </div>
        @endif
</body>
</html>