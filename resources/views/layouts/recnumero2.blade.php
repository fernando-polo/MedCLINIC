<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro exitoso</title>
    <link rel="stylesheet" href="{{ asset('storage/css2/general.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/recnumero2.css') }}">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('storage/js2/botones-entradas.js') }}" defer></script>
    <script src="{{ asset('storage/js/contadornum.js') }}" defer></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
        <ul>
                <li><img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo" width="60px" height="60px"></li>
                <li><a href="{{ url('index/#location') }}">Ubícanos</a> <div class="location-line1"></div></li>
                <li><a href="{{ url('index/#testimonios') }}">Testimonios</a><div class="location-line1"></div></li>
                <li><a href="{{ url('index/#about') }}">Conócenos</a><div class="location-line1"></div></li>
                <li><a href="{{ url('index/#studies') }}">Estudios</a><div class="location-line1"></div></li>
                <li><a href="{{ url('index/#medicos') }}">Médicos</a><div class="location-line1"></div></li>    
            </ul>
        </nav>
        <div class="auth-buttons">
            <button id="register2Btn" onclick="volver()" class="register">Volver</button>
            <button id="registerBtn" class="login">Registrarse</button>
        </div>
    </header>
    <div class="location-line2"></div>
    <div class="location-line"></div>

    <section>
        <div class="container2">
            <div class="iniciosesion">
                <h2 class="restablecer">Restablecer contraseña</h2>
                <div class="metodo">
                    <p>Se te enviará un código a tu número telefónico para recuperar tu contraseña, ingresa el código correspondiente para establecer una nueva contraseña.</p>
                    <p>Si no te ha llegado el mensaje de texto después de 10 segundos, da click en “enviar nuevamente”</p>
                </div>
                <div class="codigo">
                    <input type="text" class="codigo1" placeholder="Código" required>
                </div>
                <div class="contador">
                    <p id="timer"></p>
                </div>
                <div class="boton">
                    <div>
                        <button class="enviarnuevamente">Enviar nuevamente</button>
                    </div>
                    <div>
                        <button class="aceptar" onclick="redirigir()">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo">
            <div class="footer-column">
                <h3>Clínica</h3>
                <a href="#">Estudios</a>
                <a href="#">Médicos</a>
                <a href="#">Testimonios</a>
                <a href="#">Nosotros</a>
                <a href="#">Ubícanos</a>
            </div>
            <div class="footer-column">
                <h3>Contacto</h3>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Email</a>
            </div>
        </div>
        <div class="footer-bottom">
            Copyright © 2024 Med CLINIC Todos los derechos reservados.
        </div>
    </footer>

    <script>
        function redirigir() {
            window.location.href = '{{ route('restablecercontraseña') }}';
        }
    </script>
</body>
</html>
