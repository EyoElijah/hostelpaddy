@extends('layouts.home')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body> --}}
    @section('content')
    <form action="/mail" method="post">
        @csrf
        <input type="email" name="email" >
        <input type="submit" value="Add Email">
    </form>
    @endsection
{{-- </body>
</html> --}}
