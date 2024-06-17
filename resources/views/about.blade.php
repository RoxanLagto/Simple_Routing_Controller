<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Address: {{ $address }}</p>
    <p>Phone: {{ $phone }}</p>
    <p>Email: {{ $email }}</p>
    <p>Age: {{ $age }}</p>
    <p>Birthdate: {{ $bday }}</p>
    <p>Height: {{ $height }}</p>
    <p>Weight: {{ $weight }}</p>

    <a href="{{ route('about') }}"><button>About Me</button></a>
    <a href="{{ route('skills') }}"><button>Skills</button></a>
    <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
</body>
</html>
