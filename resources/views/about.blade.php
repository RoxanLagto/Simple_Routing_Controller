<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body style="background-color: black">
    <div class="buttons" style="text-align: center">
        <a href="{{ route('about') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">About Me</button></a>
        <a href="{{ route('skills') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Skills</button></a>
        <a href="{{ route('hobbies') }}"><button style="padding: 10px; border: none; border-radius: 5px; background-color:white">Hobbies</button></a>
    </div>

    <div class="personal_details" style="margin-left: 50px; color: white">
        <h1>ABOUT ME</h1>
        <p>Name: {{ $name }}</p>
        <p>Address: {{ $address }}</p>
        <p>Phone: {{ $phone }}</p>
        <p>Email: {{ $email }}</p>
        <p>Age: {{ $age }}</p>
        <p>Birthdate: {{ $bday }}</p>
        <p>Height: {{ $height }}</p>
        <p>Weight: {{ $weight }}</p>
    </div>
</body>
</html>