<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Médicos y Testimonios')</title>
    <link rel="stylesheet" href="{{ asset('storage/css/estilosindex.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/estilos1.css') }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('storage/js/botones-entradas.js') }}"></script>
</head> 
<body>
    <header>
        <nav>
            <ul>
                <li><img src="{{ asset('images/Logo1.jpeg') }}" alt="logo" width="60px" height="60px"></li>
                <li><a href="#location">Ubícanos</a> <div class="location-line1"></div></li>
                <li><a href="#testimonios">Testimonios</a><div class="location-line1"></div></li>
                <li><a href="#about">Conócenos</a><div class="location-line1"></div></li>
                <li><a href="#studies">Estudios</a><div class="location-line1"></div></li>
                <li><a href="#medicos">Médicos</a><div class="location-line1"></div></li>    
            </ul>
        </nav>
        <div class="auth-buttons">
            <button id="register3Btn" onclick="registro_paciente_index()" class="register">Registrarse</button>
            <button id="login2Btn" onclick="iniciodesesion2()" class="login">Iniciar sesión</button>
            <script>
                var crear_registroUrl = '{{ route('registro') }}';
                var inicio_de_sesion_paciente = '{{ route('iniciodesesion')}}'; 
            </script>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <div class="container">
        @yield('extra-content')
    </div>
</body>
</html>
