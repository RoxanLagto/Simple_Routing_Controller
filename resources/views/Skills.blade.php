<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body style="background-color: black">
    <div class="buttons" style="text-align: center">
        <a href="{{ route('about') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">About Me</button></a>
        <a href="{{ route('skills') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Skills</button></a>
        <a href="{{ route('hobbies') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Hobbies</button></a>
    </div>

    <div class="personal_details" style="margin-left: 50px; color: white">
        <h1>SKILLS</h1>
        <p> {{ $skill1 }}</p>
        <p> {{ $skill2  }}</p>
        <p> {{ $skill3  }}</p>
        <p> {{ $skill4  }}</p>
        <p> {{ $skill5 }}</p>
        <p> {{ $skill6  }}</p>
        <p> {{ $skill7  }}</p>
        <p> {{ $skill8  }}</p>
        <p> {{ $skill9  }}</p>
    </div>
</body>
</html>
