<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Hello</h1>
    <form method="post" action="/hello">
        @csrf
        Your name: 
        <input type="text" name="userName">
        <input type="submit" value="OK">
    </form>
</body>
</html>