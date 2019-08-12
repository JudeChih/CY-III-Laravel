<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>

    @yield('head')

</head>
<body>
    <div>
        <a href="/">Home</a> | 
        <a href="/home/page2">Page2</a> | 
        <a href="/home/page3">Page3</a> | 
    </div>

    @yield('content')
    
</body>
</html>