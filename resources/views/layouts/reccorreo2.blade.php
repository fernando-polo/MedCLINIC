
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro exitoso</title>
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
            width: 20cm;
            height: 12cm;
            border-radius: 20px;
            display:flexbox;
        }

        .restablecer {
            text-align:center;
            color: #484FFA;
            font-size: 1.7em;
            margin-top: -50px;
            font-family: "DM Sans";
        }

        .metodo{
            display: flex;
            flex-direction: column;
        }

        .metodo p{
            font-family: "DM Sans-Bold", Helvetica;
            font-weight: 700;
            color: #000000;
            font-size: 24px;
            text-align: center;
            margin-top: 0.5cm;
        }

        .container2 .aceptar, .enviarnuevamente{
            width: 170px;
            height: 43px;
            overflow: hidden;
            font-family: "DM Sans";
            font-weight: bold;
        }
        .boton{
            display: flex;
            justify-content: space-evenly;
            margin-top: 1.5cm;
        }

        .enviarnuevamente{
            border: 4px solid #6285c4;
            border-radius: 33px;
            color: #6285c4;
            cursor: pointer;
        }

        .aceptar{
            background-color: #6285c4;
            color: #ffffff;
            border: 4px solid #6285c4;
            border-radius: 33px;
            cursor: pointer;
        }

        .codigo input{
            width: 20%;
            margin-left: 40%;
            padding: 8px;
            box-sizing: border-box;
            border: 1.4px solid #6A8DFF;
            border-radius: 5px;
            font-family: "DM Sans";
            margin-top: 0.8cm
        }

        button:disabled, 
        input:disabled {
            background-color: #cccccc; /* color de fondo gris */
            color: #666666; /* color del texto gris */
            cursor: not-allowed; /* cursor no permitido */
        }
        .reccontraseña:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .contador p{
            font-size: 35px;
            font-family: "DM Sans";
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-weight: bold;
        }
    </style>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('storage/js2/botones-entradas.js') }}" defer></script>
    <script src="{{ asset('storage/js2/mapa.js') }}" defer></script>
    <script src="{{ asset('storage/js2/carrusel.js') }}" defer></script>
    <script src="{{ asset('storage/js2/contadorcorreo.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
        <ul>
                <li><img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo"width="60px" height="60px"></li>
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
                    <p>Se enviará un codigo a tu correo electrónico para recuperar tu contraseña, ingresa el código correspondiente para establecer una nueva contraseña.</p>
                    <p>Si no te ha llegado el correo después de los 10 segundos, da click en “enviar nuevamente”</p>
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
                        <button class="aceptar" onclick="location.href='{{ url('restablecerpass') }}'">Aceptar</button>
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
</body>
</html>
