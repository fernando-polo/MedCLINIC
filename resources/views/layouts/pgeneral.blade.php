<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @yield('estilos')
    @yield('head-scripts')
</head>
<body>
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>La detección temprana <br><span>salva vidas.</span></h1>
                <p>Algunos de los cánceres más comunes son <span class="curable">curables</span> si se detectan a tiempo, <span class="spanzul">nosotros te ayudamos.</span></p>
                <div class="cta-buttons">
                    <button class="learn-more">Conocer más</button>
                    <button class="schedule" id="login1Btn" onclick="sesioninicio()">Agendar cita</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/img1.png') }}" alt="Madre y niña felices">
            </div>
        </div>
    </section>
    @yield('contenido')

    @yield('body-scripts')
</body>
</html>