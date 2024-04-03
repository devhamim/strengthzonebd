<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h2>{{ $mailData['title'] }}</h2>
    <h23>{{ $mailData['title'] }}</h23>
    <p>Thank you for signing up with our website. Your login user id is </p>
    <ul>
        <li>Email: {{ $mailData['email'] }}</li>
        <li>Password: {{ $mailData['temp'] }}</li>
    </ul>
    <p>Please Use this to login your account in <a href="https://strengthzonebd.com/">Strength Zone BD</a></p>
    <p>Thanks you!</p>
</body>
</html>
