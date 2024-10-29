<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Médicos y Testimonios')

@section('content')
<style>
    html {
    scroll-behavior: smooth;
}

</style>
    <section id="hero" class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>La detección temprana <br><span>salva vidas.</span></h1>
                <p>Algunos de los cánceres más comunes son <span class="curable">curables</span> si se detectan a tiempo, <span class="spanzul">nosotros te ayudamos.</span></p>
                <div class="cta-buttons">
                <button class="learn-more" onclick="window.location.href='#about'">Conocer más</button>
                    <!-- Modificación del botón para redirigir a otra vista -->
<button class="schedule" id="login1Btn" onclick="window.location.href='{{ route('iniciodesesion') }}'">Agendar cita</button>

                    <script>
                        var inicio_de_sesion_paciente = '{{ route('iniciodesesion')}}'; 
                    </script>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('storage/img/img1.png') }}" alt="Madre y niña felices">
            </div>
        </div>
    </section>

    <section id="studies" class="studies">
        <h3><span class="spanzul">Prevención, Detección y Tratamiento Oportuno.</span></h3>
        <h2>Nuestros <span>estudios</span></h2>
        <div class="location-line"></div>
        <p><span class="spanzul">Med CLINIC</span> brinda una amplia variedad de <span class="spanzul">análisis para tu salud</span>, te ayudamos con el proceso.</p>
        <div class="study-cards">
            <div class="card">
                <img src="{{ asset('storage/img/imgcar1.png') }}" alt="Mastografía">
                <p>Mastografía</p>
            </div>
            <div class="card">
                <img src="{{ asset('storage/img/imgcar2.png') }}" alt="Densitometría">
                <p>Densitometría</p>
            </div>
            <div class="card">
                <img src="{{ asset('storage/img/imgcar3.png') }}" alt="Papanicolaou">
                <p>Papanicolaou</p>
            </div>
            <div class="card">
                <img src="{{ asset('storage/img/imgcar4.png') }}" alt="Ultrasonido">
                <p>Ultrasonido</p>
            </div>
            <div class="card">
                <img src="{{ asset('storage/img/imgcar5.png') }}" alt="VPH">
                <p>VPH</p>
            </div>
        </div>
    </section>
@endsection

@section('extra-content')
    <section id="medicos" class="medicos">
        <h3><span class="spanzul">Seguridad y bienestar. </span></h3><br><h2><span>Médicos</span> de primera</h2>
        <div class="location-line"></div>
        <p>Nuestros <span class="spanzul">médicos</span> con más de <span class="spanzul">20 años de experiencia</span> para el servicio de tú familia y tuyo.</p>
        <div class="medicos-cards">
            <div class="medico-card">
                <img src="{{ asset('storage/img/medicoimg.png') }}" alt="Médico 1">
                <div class="medico-info">
                    <h3>Dr. Myrna Maldonado Badillo</h3>
                    <p>Especialidad</p>
                    <p>No. de Cédula</p>
                </div>
            </div>
            <div class="medico-card">
                <img src="{{ asset('storage/img/medicoimg.png') }}" alt="Médico 1">
                <div class="medico-info">
                    <h3>Dr. Myrna Maldonado Badillo</h3>
                    <p>Especialidad</p>
                    <p>No. de Cédula</p>
                </div>
            </div>
            <div class="medico-card">
                <img src="{{ asset('storage/img/medicoimg.png') }}" alt="Médico 1">
                <div class="medico-info">
                    <h3>Dr. Myrna Maldonado Badillo</h3>
                    <p>Especialidad</p>
                    <p>No. de Cédula</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="testimonios">
        <h3><span>Sinceridad ante todo.</span></h3><br><h2>Tu <span class="spanzul">testimonio </span> importa</h2>
        <div class="location-line"></div>
        <p><span>Cuidamos de tú familia y de ti</span>, los siguientes testimonios lo demuestran</p>
        <div class="testimonios-cards">
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="testimonio-card">
                <img src="{{ asset('storage/img/testimonioimg.png') }}" alt="Usuario 1">
                <div class="testimonio-info">
                    <h3>Pedrito Sola</h3>
                    <p>@usuario</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h3><span class="spanzul">Un poco sobre nosotros </span><br></h3> <h2>Sobre <span>Med CLINIC</span></h2>
        <div class="location-line"></div>
        <div class="about-content">
            <div class="about-text">
                <p>Somos una <span class="spanzul">Institución de Asistencia Privada</span>, que se constituye el 03 de mayo de 1995, con la misión de <span class="spanzul">apoyar a enfermos con cáncer</span>, sin importar sexo, edad o etapa en la que se encuentre la enfermedad o si el tratamiento es curativo o paliativo.</p>
                <p>Contamos con un <span class="spanzul">Modelo de Atención Integral</span> que busca el bienestar de nuestros pacientes y de sus familias.</p>
                <p>Nuestra <span class="spanzul">Clínica de Alta Especialidad cuenta con diferentes servicios</span> para toda la sociedad en general, brindando un equipo médico altamente reconocido y de vanguardia para la <span class="spanzul">prevención, detección y tratamiento oportuno de cáncer</span>.</p>
                <p>Los invitamos a formar parte de nuestra familia, en la conciencia de que la única forma de lograr nuestros objetivos es la suma de esfuerzos, por lo que extendemos un profundo agradecimiento a nombre de todas aquellas personas para las que estas contribuciones hicieron la diferencia y nuestro reconocimiento a todas esas personas, empresas e instituciones que nos han apoyado a lo largo de estos años, cada uno de ellos ha colaborado a la construcción de los sueños de ayer y a la gran esperanza para mañana.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/Logo1.jpeg') }}" alt="Med CLINIC Logo">
            </div>
        </div>
    </section>

    <section id="location" class="location">
        <h3><span class="spanzul">No sabes cómo llegas? Nosotros te ayudamos</span></h3>
        <h2>Ubica nuestra<span> clínica</span></h2>
        <div class="location-line"></div>
        <div class="img"><img src="{{ asset('storage/img/ubica.png') }}" alt="ubicación" width="1100px" height="450px"></div>
    </section>
    
    <section id="footer" class="piedepagina">
        <footer>
            <div class="footer">
                <img src="{{ asset('images/Logo1.jpeg')}}" alt="Logo">
                <div class="footer-column">
                    <h3>Clínica</h3>
                    <a href="#studies">Estudios</a>
                    <a href="#medicos">Médicos</a>
                    <a href="#testimonios">Testimonios</a>
                    <a href="#about">Nosotros</a>
                    <a href="#location">Ubícanos</a>
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
    </section>
@endsection
