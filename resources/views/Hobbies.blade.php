<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body style="background-color: black">
    <div class="buttons" style="text-align: center">
        <a href="{{ route('about') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">About Me</button></a>
        <a href="{{ route('skills') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Skills</button></a>
        <a href="{{ route('hobbies') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Hobbies</button></a>
    </div>

    <div class="hobbies_details" style="margin-left: 50px; color: white">
        <h1>HOBBIES</h1>
        <p> {{ $hobby1 }}</p>
        <p> {{ $hobby2 }}</p>
        <p> {{ $hobby3 }}</p>
        <p> {{ $hobby4 }}</p>
        <p> {{ $hobby5 }}</p>
    </div>
</body>
</html>
