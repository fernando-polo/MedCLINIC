

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        
    <link rel="stylesheet" href="{{ asset('storage/css2/general.css') }}">
    
    <style>
        section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 100px;
        }

        .container2 {
            background-color: #efefef;
            padding: 90px;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(111, 111, 111, 0.584);
            width: 450px;
            border-radius: 20px;
            display:flexbox;
            font-family: "DM Sans";
        }
        .container2 .restablecer{
            margin-bottom: 1.2cm;
            text-align:center;
            color: #484ff4;
            font-size: 1.1em;
            margin-top: -70px;
        }

        .container2 .usercorreo {
            text-align:center;
            color: #000000;
            font-size: 13px;
            margin-top: -10px;
        }

        .correo input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1.4px solid #6A8DFF;
            border-radius: 5px;
            font-family: "DM Sans";
            margin-top: 0.8cm;
            margin-bottom: 1.2cm;
        }

        .boton{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .boton button{
            border: 3px solid #6285c4;
            border-radius: 33px;
            color: #6285c4;
            cursor: pointer;
            height: 35px;
            width: 110px;
        }
    </style>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('js2/botones-entradas.js') }}" defer></script>
    <script src="{{ asset('js2/mapa.js') }}" defer></script>
    <script src="{{ asset('js2/carrusel.js') }}" defer></script>
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
            <div class="restablecer">
                <h2>Restablecer contraseña</h2>
            </div>
            <form>
                <div class="useremail">
                    <h2>Ingresa tu correo electrónico al cual se enviará un código de verificación para poder restablecer tu contraseña</h2>
                </div>
                <div class="email">
                    <input type="email" id="email" name="email" placeholder="Correo electrónico" required> 
                </div>       
                <div class="boton">
                    <button class="recpass" type="button" onclick="redirigir()">Enviar código</button>
                </div>
            
                <script>
                    function redirigir() {
                        window.location.href = '{{ route('reccorreo2') }}';
                    }
                </script>
            </form>
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
</body>
</html>
