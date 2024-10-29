
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro exitoso</title>
    <link rel="stylesheet" href="storage/css2/general.css">
    <link rel="stylesheet" href="storage/css2/nuevacontraseña.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="js/botones-entradas.js" defer></script>
    <script src="js/mapa.js" defer></script>
    <script src="js/carrusel.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
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
    height: 8cm;
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

.reccontraseña:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}
.contador {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
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
    margin-top: 3cm;
}

.container2 .telefono, .correo{

        width: 170px;
        height: 43px;
        overflow: hidden;
        font-family: "DM Sans";
        font-weight: bold;
}
.botones{
    display: flex;
    justify-content: space-evenly;
    margin-top: 1.5cm;

}

.telefono{
border: 4px solid #6285c4;
border-radius: 33px;
color: #6285c4;
cursor: pointer;
}

.correo{
    background-color: #6285c4;
    color: #ffffff;
    border: 4px solid #6285c4;
border-radius: 33px;
cursor: pointer;

}

.paloma  {
    height: 2cm;
    margin-top: 40px;
    margin-left: 9cm;
}

.guardada h2{

font-family: "DM Sans-Bold", Helvetica;
font-weight: 700;
color: #6285c4;
font-size: 24px;
text-align: center;
}

.guardada p{

font-family: "DM Sans-Bold", Helvetica;
font-weight: 700;
color: #000000;
font-size: 20px;
text-align: center;
letter-spacing: 0;

}
</style>
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

        </div>
    </header>
    <div class="location-line2"></div>
    <div class="location-line"></div>

    <section>
        <div class="container2">
            <div class="nueva">
                <h2 class="restablecer">Restablecer contraseña</h2>
                <div>
                    <img src="storage/img2/paloma.png" alt="Confirmar" class="paloma">
                </div>
                <div class="guardada">
                    <h2> ¡Contraseña nueva guardada! </h2>
                    <p>Ahora prueba iniciar sesión con tu contraseña nueva.</p>
                </div>
                <div class="botones">
    <div>
        <button class="correo" onclick="location.href='{{ route('iniciodesesion') }}'">Iniciar sesión</button>
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
