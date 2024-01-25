<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h4>main menu</h4>
    <h3>{{ $c }}  ?></h3>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact Us </a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
    </ul>
</body>
</html>