Registro Blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicos y Testimonios</title>
    <link rel="stylesheet" href="storage/css/estilosregistro.css">
    <link rel="stylesheet" href="storage/css/estilos2.css">
    <link rel="stylesheet" href="storage/css/registrocss.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="{{ asset('storage/js/botones-entradas.js') }}"></script>

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
            <button id="register2Btn"  onclick="volver()" class="register">Volver</button>
           
            <button id="loginBtn" onclick="iniciodesesion()" class="login">Iniciar sesión</button>
            <script>
                var registroUrl = '{{ route('indexprincipal') }}';
                var loginUrl = '{{ route('iniciodesesion') }}';
            </script>

            </div>
    </header>
    <div class="location-line2"></div>
    <section>
        <div class="container2">
            <h2>¡Regístrate para agendar una cita!</h2>
            <form action="{{route("crearRegistro")}}" method="POST">
                @csrf
                {{-- @method('POST') --}}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" >
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    
                    <input type="password" id="password" name="password" >
                </div>
                <div class="form-group">
                    <label for="confirm_password">Contraseña Nuevamente</label>
                    <input type="password" id="confirm_password" name="confirm_password" >
                </div>
                {{-- <div class="form-group">
                    <label for="telefono">Número de teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="P.ej. 442 ### ####" >
                </div>
                <div class="form-group">
                    <label for="confirm_telefono">Confirmar número de teléfono</label>
                    <input type="tel" id="confirm_telefono" name="confirm_telefono"  >
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" class="block mt-1 w-full">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" >
                </div>
                <div class="form-group">
                    <label for="nss">NSS</label>
                    <input type="text" id="nss" name="nss" >
                </div>
                <div class="form-group">
                    <label for="curp">CURP</label>
                    <input type="text" id="curp" name="curp" >
                </div> --}}

                <div class="form-actions">
    <button type="reset">Limpiar</button>
    <button type="submit" id="register3Btn">Registrarse</button> 
</div>

<script>
    function guardarYRedirigir(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtener los valores de los campos
        // var curp = document.getElementById('curp').value;
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;
        // var telefono = document.getElementById('telefono').value;
        // var confirm_telefono = document.getElementById('confirm_telefono').value;
        // var sexo = document.getElementById('sexo').value;
        // var nss = document.getElementById('nss').value;
        // var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;


        // Validar que todos los campos estén llenos
        // if (!curp || !name || !email || !password || !confirm_password || !telefono || !sexo || !nss || !fecha_nacimiento ||!confirm_telefono) {
        if (!name || !email || !password || !confirm_password) {
            alert("Por favor, llena todos los campos.");
            return;
        }

        // Validar que las contraseñas coincidan
        if (password !== confirm_password) {
            alert("Las contraseñas no coinciden.");
            return;
        }

        // Validar que los números de teléfono coincidan
        // if (telefono !== confirm_telefono) {
        //     alert("Los números de teléfono no coinciden.");
        //     return;
        // }

        // Si todas las validaciones pasan, redirigir a otra vista
        window.location.href = '{{ route('completado') }}';
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

