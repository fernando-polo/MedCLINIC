<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro exitoso</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registrocompletado.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('js/botones-entradas.js') }}" defer></script>
    <script src="{{ asset('js/mapa.js') }}" defer></script>
    <script src="{{ asset('js/carrusel.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background: #ffffff;
    box-sizing: border-box;
}
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

    
.location-line1 {
    width: 40%;
    height: 1px;
    background-color: #515151;
    margin: 0 auto 20px;
}
.location-line2 {
    width: 40%;
    height: 100px;
    background-color: #ffffff;
    margin: 0 auto 20px;
}
.location-line3{
    width: 40%;
    height: 1px;
    background-color: #484ff4;
    margin: 0 auto 20px;
}

/* Header */
header {
    background: #e3e3e3;
    padding: 10px 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    width: 99%;
    top: 0;
    z-index: 1000;
}

nav ul {
    list-style-type: none;
    margin: 0; /* Corregido */
    padding: 0;
    display: flex;
    gap: 100px;
    align-items:self-end; /* Alinea verticalmente los elementos */
}

nav a {
    text-decoration: none;
    color: #000000;
    font-weight: bold;

    
}

.auth-buttons button {
    margin-left: 10px;
}

.register {
    background-color: #ffffff;
    border: 2px solid #6A8DFF;
    padding: 5px 10px;
    border-radius: 100px;
    color: #6A8DFF;
}

.login {
    background-color: #6A8DFF;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    border-radius: 100px;

}

/* Ajuste para mover el encabezado a la derecha */
nav {
    margin-right: 20px; /* Espacio a la derecha del encabezado */
}


.footer {
    background-color: #e1e1e1;
    padding: 20px;
    display:flex;
    justify-content:space-evenly;
    align-items: center;
    border-top: 20px solid #e1e1e1;
    width: 97.2%;
    height: 6.5cm;
}
.footer img {
    width: 80px;
    height: 80px;
    margin: 0 10px;
    border-radius: 100px;
    background-color: #777777;
}
.footer-column {
    flex:none;
    text-align:right;
}
.footer-column h3 {
    margin-bottom: 20px;
    color: #000000;
    font-weight: bold;
}
.footer-column a {
    display: block;
    margin: 5px 0;
    color: black;
    text-decoration: none;
}
.footer-column a:hover {
    text-decoration: underline;
}
.footer-bottom {
    text-align: center;
    padding: 10px ;
    background-color: #e1e1e1;
    font-size: 14px;
}


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
    width: 25cm;
    height: 12cm;
    border-radius: 20px;
    display:flexbox;
    

}

.registrate {
    text-align:center;
    color: #484FFA;
    font-size: 1.5em;
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

.container3{
    background-color: #ffffff;
    padding: 90px;
    border-radius: 20px;
    box-shadow: 0 2px 10px rgba(111, 111, 111, 0.584);
    margin-top: 30px;
    height: 7.5cm;
    width: 20cm;
    border-radius: 20px;
    display:flexbox;
}

.txtazulc{
    color: black;
}
.paloma  {
    height: 2cm;
    margin-top: -20px;
    margin-left: 9cm;
}

.txtazulf{
    color: #484FFA;
}

.registrado{
    font-size: 24px;
    font-family: "DM Sans";
    font-weight: 700;
    color: rgba(98, 133, 196, 1);
    text-align: center;
}
.exitosamente p{
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-family: "DM Sans";
    font-weight: 700;
    text-align: center;
}
.Agendar{
    background-color: #6285C4;
    color: rgba(250, 250, 250, 1);
    border: none;
    padding: 5px 10px;
    border-radius: 100px;
    cursor: pointer;
    height: 0.8cm;
    width: 3cm;
    margin-left: 8.5cm;
    margin-top: 10px;
}

    </style>
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
    </div>
    </header>
    <div class="location-line2"></div>
    <div class="location-line"></div>

    <section>
        <div class="container2">
            <div class="iniciosesion">
                <h2 class="registrate">¡Regístrate para agendar una cita!</h2>
                <div class="container3">   
                    <img src="{{ asset('storage/img2/paloma.png') }}" alt="Confirmar" class="paloma">
                    <div class="exitosamente">
                        <h2 class="registrado">¡Tu cuenta se ha registrado exitosamente!</h2>
                        <p>Tu número de identificación (ID) es el siguiente: <span class="txtazulf"> #010101 </span> con este iniciarás sesión, 
                            no te preocupes este número siempre se encontrará visible en tus <span class="txtazulf">“datos de usuario”</span> en tu perfil</p>
                        <div>
                            <button class="Agendar" onclick="location.href='{{ url('menu') }}'">Agendar cita</button>
                        </div>
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
