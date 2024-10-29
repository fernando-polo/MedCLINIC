<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Menú del Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f1f1f1;
            border-color: #000;
        }
        .header img {
            height: 80px;
            width: 80px;
        }
        .location-line {
            width: 20%;
            height: 2px;
            background-color: #484FFA;
            margin: 0 auto 20px;
        }
        .header nav a {
            margin:  20px;
            text-decoration: none;
            color: #000;
            font-family: sans-serif;
            font-weight: bold;
        }
        .header .login-icon {
            height: 50px;
            width: 60px;
        }
        .header .flecha {
            height: 20px;
            width: 20px;
            margin-left: -375px;
        }
        .container {
            display: flex;
            margin: 20px;
        }
        .user-data {
            width: 25%;
            padding: 20px;
            border-right: 1px solid #ccc;
            background-color: #f1f1f1;
            border-radius: 30px;
        }
        .user-data h2 {
            color: #484FFA;
        }
        .dato {
            color: #6A8DFF;
        }
        .dato2 {
            color: #000;
            font-family: sans-serif;
            font-weight: bold;
        }
        .main-content {
            width: 75%;
            padding: 20px;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .tabs button {
            padding: 10px;
            border: none;
            background-color: #bfbfbf;
            cursor: pointer;
            color: #484FFA;
            font-size: 20px;
            font-family: sans-serif;
            font-weight: bolder;
            border-radius: 28px 0px 28px 0px;
            width: 175px;
            height: 60px; 
        }
        .tabs button.active {
            background-color: #efefef;
        }
        .content {
            display: none;
            background-color: #efefef;
            border-radius: 10px;
            height: 400px;
            width: 1000px;
        }
        .container h3 {
            color: #484FFA;
        }
        .content.active {
            display: block;
        }
        .service-card {
            display: inline-block;
            width: 20%;
            margin: 10px;
            padding: 10px;
            border: 1px solid #d1d1d1;
            text-align: center;
        }
        .service-card button {
            color: #f1f1f1;
            background-color: #6A8DFF;
            border-color: #6A8DFF;
            border-radius: 20px;
            width: 150px;
            height: 32px;
        }
        .card2 {
            background: #f0f0f0;
            border: 1px solid #ffffff;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            max-width: 150px;
        }
        .card2 img {
            max-width: 100%;
            border-radius: 10px;
            align-content: center;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .study-details {
            display: none;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 1000px;
            height: 450px;
        }
        .study-details h3 {
            color: #000;
        }
        .back-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #484FFA;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btncontinuar {
            color: #fff;
            background-color: #6A8DFF;
            border-color: #6A8DFF;
            font-family: sans-serif;
            font-weight: bold;
            border-radius: 20px;
            height: 30px;
            width: 110px;
        }
        .contenerdorstd {
            background-color: #f1f1f1;
            width: 230px;
            height: 300px;
            border-radius: 30px;
            justify-content: center;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.349);
            display: inline-block;
        }
        .contenerdorstd img {
            width: 60px;
            height: 60px;
            align-content: center;
        }
        .contenerdorstd p {
            font-family: sans-serif;
            font-weight: bold;
            font-size: medium;
        }
        .study-details span {
            color: #484FFA;
        }
        .contenerdorstd span {
            color: #6A8DFF;
            font-weight: bold;
            font-family: sans-serif;
        }
        .separador {
            width: 40px;
            display: inline-block;
        }
        .btnregresar {
            display: flow-root;
            margin-top: 20px;
            color: #fff;
            background-color: #6A8DFF;
            border-radius: 20px;
            height: 30px;
            width: 90px;
            border-color: #6A8DFF;
        }
        .calendar-view {
            display: none;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 1000px;
            height: 700px;
        }
        .calendar-view span{
            color: #000000;
            font-size: 24px;
        }
        .calendar-view h1{
            color: #000;
            font-weight: bold;
            font-family: sans-serif;
            font-size: 24px;
        }

        .container22 {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 950px;
        }

        .scheduler {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .calendar {
            flex: 1;
            margin-right: 20px;
            height: 350px;
        }

        .available-times {
            flex: 1;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        #datepicker {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        #timeList {
            list-style-type: none;
            padding: 0;
        }

        #timeList li {
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        #timeList li.selected {
            background-color: #007bff;
            color: white;
        }

        #timeList li.unavailable {
            color: red;
        }

        #timeList li.available {
            color: #6A8DFF;
        }

        .appointment-summary {
            border-top: 1px solid #ccc;
            padding-top: 20px;
            height: 150px;
            width: 600px;
        }
        .appointment-summary h2{
            color: #000;
            font-weight: bold;
            font-family: sans-serif;

        }
        .appointment-summary p {
            margin: 5px 0;
        }
        .appointment-summary strong{
            color: #484FFA;
            font-weight: bold;
            font-family: sans-serif;
        }

        /* Estilos para la vista de recomendaciones */
        .recommendations-view {
            display: none;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 1000px;
            height: 500px;
        }

        .recommendations-view h3 {
            color: #484FFA;
            font-weight: bold;
            font-family: sans-serif;
            font-size: 30px;
        }

        .recommendations-view p {
            margin: 10px 0;
            color: #000;
            font-family: sans-serif;
            font-size: 22px;
        }

        .final-confirm-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #6A8DFF;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-family: sans-serif;
            font-weight: bold;
        }

        .confirmation-view{
            background-color: #f1f1f1;
            width: 1000px;
            height: 500px;
            justify-content: center;
            text-align: center;
        }

        .contenido-CC{
            align-items: center;
        }

        .contenido-CC h3{
            color: #484FFA;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 31px;
        }

        .contenido-CC p{
            color: #000;
            font-family: sans-serif;
            font-weight: bolder;
            font-size: 22px;
        }

        .contenido-CC button{
            background-color: #6A8DFF;
            color: #ffffff;
            border-color: #6A8DFF;
            border-radius: 20px;
            height: 40px;
            width: 120px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 70px; /* Ajusta según la posición de tu imagen */
            right: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
            border-radius: 20px;
            height: 20px;
        }

        .dropdown-menu a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
            padding: 5px 0;
        }

        .dropdown-menu a img {
            margin-right: 10px;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo">
        <nav>
            <a href="#">Ubícanos</a>
            <a href="#">Testimonios</a>
            <a href="#">Conócenos</a>
            <a href="#">Estudios</a>
            <a href="#">Médicos</a>
        </nav>
        <img src="{{ asset('storage/img/MENULOGO.png') }}" alt="Iniciar Sesión" class="login-icon" id="loginIcon">
        
        <!-- Menú desplegable de cerrar sesión -->
        <div class="dropdown-menu" id="logoutMenu">
    <a href="#" onclick="redirectToOtherView()">Cerrar Sesión</a>
</div>

<script>
    function redirectToOtherView() {
        window.location.href = "{{ route('indexprincipal') }}";
    }
</script>

        <img src="{{ asset('storage/img/flecha.png') }}" alt="flecha" class="flecha">
    </div>
    
    <div class="container">
        <div class="user-data">
            <h2>Datos del usuario</h2>
            <h4 class="dato">CURP:</h4> <p class="dato2">GOMF020827HQTMLRA0</p>
            <h4 class="dato">Nombre:</h4> <p class="dato2">Fernando Gómez Maldonado</p>
            <h4 class="dato">ID:</h4> <p class="dato2">#010101</p>
            <h4 class="dato">Fecha de nacimiento:</h4> <p class="dato2"> 27/08/2002</p>
            <h4 class="dato">Género:</h4> <p class="dato2"> Masculino</p>
            <h4 class="dato">Número de teléfono: </h4> <p class="dato2"> 442 342 5872</p>
            <h4 class="dato">Correo electrónico: </h4> <p class="dato2">polotrolero27@gmail.com</p>
            <br><br>
        </div>
        
        <div class="main-content">
            <div class="tabs">
                <button class="tab-button active" data-tab="agendar-cita">Agendar cita</button>
                <button class=" tab-button" data-tab="proximas-citas">Próximas citas</button>
                <button class="tab-button" data-tab="historial-citas">Historial de citas</button>
            </div>
            <div id="agendar-cita" class="content active">
                <h3>Selecciona el estudio que deseas</h3>
                <div class="service-card" data-study="Mastografía">
                    <div class="card2">
                        <img src="{{ asset('storage/img/imgcar1.png') }}" alt="Mastografía">
                    </div>
                    <button class="especialidad">Mastografía</button>
                </div>
                <div class="service-card" data-study="Densitometría">
                    <div class="card2">
                        <img src="{{ asset('storage/img/imgcar2.png') }}" alt="Densitometría">
                    </div>
                    <button class="especialidad2">Densitometría</button>
                </div>
                <div class="service-card" data-study="Papanicolaou">
                    <div class="card2">
                        <img src="{{ asset('storage/img/imgcar3.png') }}" alt="Papanicolaou">
                    </div>
                    <button class="especialidad3">Papanicolaou</button>
                </div>
                <div class="service-card" data-study="Ultrasonido">
                    <div class="card2">
                        <img src="{{ asset('storage/img/imgcar4.png') }}" alt="Ultrasonido">
                    </div>
                    <button class="especialidad4">Ultrasonido</button>
                </div>
            </div>
            <div id="proximas-citas" class="content">
                <h3>Próximas citas</h3>
                <p>No tienes próximas citas programadas.</p>
            </div>
            <div id="historial-citas" class="content">
                <h3>Historial de citas</h3>
                <p>No tienes citas anteriores.</p>
            </div>
            <div id="study-details" class="study-details">
                <h3>Tipo de estudio seleccionado: <span id="study-type"></span></h3>
                <div id="study-options">
                    <div class="separador"></div>
                    <div class="contenerdorstd">
                        <br><br><br>
                        <img src="{{ asset('storage/img/lupa.png') }}" alt="lupa">
                        <p>Densitometría ósea de columna y fémur</p>
                        <div id="study-price">
                            <p><span>$ 75.00</span></p>
                        </div>
                        <button id="select-study" class="btncontinuar">Seleccionar</button>
                    </div>
                    <div class="separador"></div>
                    <div class="contenerdorstd">
                        <br><br><br>
                        <img src="{{ asset('storage/img/lupa.png') }}" alt="lupa">
                        <p>Densitometría ósea de cuerpo completo</p>
                        <div id="study-price">
                            <p><span>$ 250.00</span></p>
                        </div>
                        <button id="select-study" class="btncontinuar">Seleccionar</button>
                    </div>
                    <div class="separador"></div>
                    <div class="contenerdorstd">
                        <br><br><br>
                        <img src="{{ asset('storage/img/lupa.png') }}" alt="lupa">
                        <p>Densitometría pediátrica de columna y cuerpo completo</p>
                        <div id="study-price">
                            <p><span>$ 250.00</span></p>
                        </div>
                        <button id="select-study" class="btncontinuar">Seleccionar</button>
                    </div>
                </div>
                <button id="back-button" class="btnregresar">Regresar</button>
            </div>
            <div id="calendar-view" class="calendar-view">
                <h3>Selecciona una fecha para tu cita</h3>
                <div id="calendar"></div>
                <div class="container22">
                    <h1>Estudio seleccionado: <span>Densitometría - ósea de columna y fémur <span></span></h1>
                    <div class="scheduler">
                        <div class="calendar">
                            <input type="text" id="datepicker">
                        </div>
                        <div class="available-times">
                            <h2>Horarios disponibles</h2>
                            <ul id="timeList"></ul>
                        </div>
                    </div>
                    <div class="appointment-summary">
                        <h2>Resumen de la cita</h2>
                        <p>Estudio seleccionado: <strong>Densitometría ósea de columna y fémur</strong></p>
                        <p>Precio: <strong>$75.00</strong></p>
                        <p id="selectedTime">Hora seleccionada: <strong>Sin seleccionar</strong></p>
                    </div>
                </div>
                <button id="confirm-button" class="btncontinuar">Confirmar</button>
                <button id="calendar-back-button" class="btnregresar">Regresar</button>
            </div>
            <div id="recommendations-view" class="recommendations-view" style="display:none;">
                <h3>Recomendaciones para tu cita</h3>
                <ul>
                    <li>Llegar 15 minutos antes de la hora programada.</li>
                    <li>No olvidar traer tu identificación oficial.</li>
                    <li>Traer los estudios previos si los tienes.</li>
                    <li>Seguir las indicaciones específicas para el tipo de estudio seleccionado.</li>
                </ul>
                <button id="final-confirm-button" class="btncontinuar" onclick="confirmAppointment()">Confirmar cita</button>
            </div> 
            <div id="confirmation-view" class="confirmation-view" style="display: none;">
                <div class="contenido-CC">
                    <br><br><br><br><br><br>
                    <h3>Cita confirmada</h3>
                    <p>Tu cita ha sido confirmada exitosamente.</p>
                    <button id="back-to-home-button" class="back-to-home-button" onclick="backToStudySelection()">Volver al Inicio</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                // Elimina la clase 'active' de todas las pestañas y oculta todas las secciones
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.content').forEach(content => content.style.display = 'none');
                
                // Oculta todas las vistas secundarias (detalles de estudio, calendario, etc.)
                document.getElementById('study-details').style.display = 'none';
                document.getElementById('calendar-view').style.display = 'none';
                document.getElementById('recommendations-view').style.display = 'none';
                document.getElementById('confirmation-view').style.display = 'none';

                // Activa la pestaña actual y muestra la sección correspondiente
                button.classList.add('active');
                document.getElementById(button.getAttribute('data-tab')).style.display = 'block';
            });
        });

        // Inicializa la primera pestaña como activa
        document.querySelector('.tab-button.active').click();

        // Manejo de la selección de estudios y navegación entre las vistas
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', () => {
                const studyType = card.getAttribute('data-study');
                document.getElementById('study-type').innerText = studyType;
                document.getElementById('agendar-cita').style.display = 'none';
                document.getElementById('study-details').style.display = 'block';
            });
        });

        document.getElementById('back-button').addEventListener('click', () => {
            document.getElementById('study-details').style.display = 'none';
            document.getElementById('agendar-cita').style.display = 'block';
        });

        document.querySelectorAll('#select-study').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('study-details').style.display = 'none';
                document.getElementById('calendar-view').style.display = 'block';
            });
        });

        document.getElementById('calendar-back-button').addEventListener('click', () => {
            document.getElementById('calendar-view').style.display = 'none';
            document.getElementById('study-details').style.display = 'block';
        });

        document.getElementById('confirm-button').addEventListener('click', () => {
            document.getElementById('calendar-view').style.display = 'none';
            document.getElementById('recommendations-view').style.display = 'block';
        });

        function generateCalendar() {
            const calendar = document.getElementById('calendar');
            calendar.innerHTML = '';
        }

        document.addEventListener('DOMContentLoaded', () => {
            generateCalendar();
        });

        function confirmAppointment() {
            document.getElementById('recommendations-view').style.display = 'none';
            document.getElementById('confirmation-view').style.display = 'block';
        }

        function backToStudySelection() {
            document.getElementById('confirmation-view').style.display = 'none';
            document.getElementById('agendar-cita').style.display = 'block';
        }

        // Código JavaScript para el calendario y la selección de horario
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('#datepicker', {
                inline: true,
                onChange: function(selectedDates, dateStr, instance) {
                    loadAvailableTimes(dateStr);
                }
            });

            function loadAvailableTimes(date) {
                const timeList = document.getElementById('timeList');
                timeList.innerHTML = ''; // Limpiar horarios anteriores

                // Ejemplos de horarios disponibles
                const times = [
                    { time: '8:00 am No Disponible', available: false },
                    { time: '9:00 pm Disponible', available: true },
                    { time: '10:00 pm Disponible', available: true },
                    { time: '11:00 pm Disponible', available: true },
                    { time: '12:00 pm No Disponible', available: false },
                    { time: '01:00 pm Disponible', available: true },
                    { time: '02:00 pm Disponible', available: true },
                    { time: '03:00 pm No Disponible', available: false },
                    { time: '04:00 pm Disponible', available: true }
                ];

                times.forEach(slot => {
                    const li = document.createElement('li');
                    li.textContent = slot.time;
                    li.classList.add(slot.available ? 'available' : 'unavailable');
                    li.onclick = () => selectTime(slot.time, slot.available, li);
                    timeList.appendChild(li);
                });
            }

            function selectTime(time, available, element) {
                if (!available) return;

                document.querySelectorAll('#timeList li').forEach(li => {
                    li.classList.remove('selected');
                });

                element.classList.add('selected');
                document.getElementById('selectedTime').innerHTML = `Hora seleccionada: <strong>${time}</strong>`;
            }
        });

        const loginIcon = document.getElementById('loginIcon');
        const logoutMenu = document.getElementById('logoutMenu');

        loginIcon.addEventListener('click', () => {
            // Alternar la visibilidad del menú
            if (logoutMenu.style.display === 'block') {
                logoutMenu.style.display = 'none';
            } else {
                logoutMenu.style.display = 'block';
            }
        });

        // Ocultar el menú si se hace clic fuera de él
        document.addEventListener('click', (event) => {
            if (!loginIcon.contains(event.target) && !logoutMenu.contains(event.target)) {
                logoutMenu.style.display = 'none';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>
