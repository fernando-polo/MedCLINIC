<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="storage/css2/login.css">
    <link rel="stylesheet" href="storage/css2/general.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('storage/js/botones-entradas.js') }}"></script>
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
            <button id="register2Btn"  onclick="volver2()" class="register">Volver</button>
            <button id="registerBtn" onclick="registro_paciente()" class="login">Registrarse</button>
            <script>
                var crear_registroUrl = '{{ route('registro') }}';
                var volverindex = '{{ route('indexprincipal')}}'; 
                var olvido_contraseña = '{{  route('recuperar_contraseña')}}';
            </script>
        </div>
    </header>
    <div class="location-line2"></div>
    <div class="location-line"></div>

    <section>
        <div class="container2">
            <div class="iniciosesion">
            <h2>Inicia sesión</h2>
            </div>
            <form>
                <div class="form-group">
                    <input type="text" id="curp" name="curp" placeholder="CURP" required>              
                <div class="form-group">
                    <br>
                
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <br>
                    <a class="recpass" id="Rpassword" onclick="recuperar_c1()">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="form-actions">
                    <button type="reset">Limpiar</button>
                    <button type="submit" onclick="redirectToOtherView(event)">Acceder</button>

                    <script>
                        function redirectToOtherView(event) {
                            event.preventDefault(); // Previene que el formulario se envíe automáticamente

                            var curp = document.getElementById('curp').value;
                            var password = document.getElementById('password').value;

                            // Validar que los campos no estén vacíos
                            if (curp !== "" && password !== "") {
                                window.location.href = "{{ route('menupaciente') }}";
                            } else {
                                alert("Por favor, rellena todos los campos.");
                            }
                        }
                    </script>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer">
            <img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo">
            <div class="footer-column">
                <h3>Clínica</h3>
                <a href="{{ url('/#studies') }}">Estudios</a>
                <a href="{{ url('/#medicos') }}">Médicos</a>
                <a href="{{ url('/#testimonios') }}">Testimonios</a>
                <a href="{{ url('/#about') }}">Nosotros</a>
                <a href="{{ url('/#location') }}">Ubícanos</a>
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
</body>
</html>
