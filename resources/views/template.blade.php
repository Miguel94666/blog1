<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Web</title>
</head>
<body>
    <p>
        <a href="{{route ('home')}}">home</a>
        <a href="{{route ('blog')}}">blog</a>
@auth
    
<a href="{{route ('dashboard')}}">Dashboard</a>
    
@else
<a href="{{route ('dashboard')}}">Login</a>
@endauth
    

    </p>
    
    <hr>
    @yield('content') // Esta es una directiva de Blade que permite definir un bloque de contenido que puede ser reemplazado por una vista que extienda de esta plantilla.
</body>
</html>