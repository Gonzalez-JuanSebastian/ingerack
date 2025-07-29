<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingerack - Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Ingerack">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/inicio') }}">Inicio</a></li>
                <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                <li><a href="{{ url('/contactanos') }}">contactanos</a></li>
                <li><a href="login.html">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- SECCIÓN INICIAL -->
    <section class="hero" id="inicio">
        <div class="hero-cont" id="hero-cont">
            <h1>Bienvenidos a Ingerack S.A.S.</h1>
            <p>Nos especializamos en la creación de soluciones innovadoras para la industria de la refrigeración. A
                través de nuestra experiencia y dedicación, ofrecemos un servicio de alta calidad y eficiencia
                energética, adaptado a las necesidades de cada cliente.</p>
        </div>
    </section>

    <!-- SECCIÓN SOBRE NOSOTROS -->
    <section id="sobre-nosotros">
        <div class="nosotros">
            <h2>Sobre Nosotros</h2>
            <div class="nosotros-cont">
                <div class="nosotros-texto">
                    <p>
                        En Ingerack S.A.S., nos especializamos en la producción de montajes refrigerados y la asesoría
                        integral de proyectos. Nuestro enfoque está en optimizar procesos de manera eficiente, con un
                        énfasis particular en uno de los aspectos más críticos en la actualidad: el consumo energético.
                        Estamos comprometidos en brindar soluciones adaptadas a diversos sectores, ofreciendo nuestra
                        experiencia en la conservación de productos en la cadena de frío, para garantizar resultados de
                        alta calidad y eficiencia.
                    </p>
                </div>
                <div class="nosotros-img"></div>
            </div>
        </div>
    </section>

    <svg class="wave-divider" viewBox="0 0 1440 170" xmlns="http://www.w3.org/2000/svg">
        <path fill="#d8eaf2" fill-opacity="1"
            d="M0,64L80,48C160,32,320,0,480,21.3C640,43,800,117,960,128C1120,139,1280,85,1360,58.7L1440,32V320H0Z">
        </path>
    </svg>

    <!-- SECCIÓN NOSOTROS -->
    <section id="nosotros">
        <div class="container">
            <h2 class="slide-in">Nuestro Futuro</h2>
            <p class="intro-text">
                Con más de <strong>20 años de experiencia</strong> , hemos desarrollado  <strong>soluciones a medida</strong>  que no solo garantizan un <strong>rendimiento óptimo</strong> , sino que también contribuyen al crecimiento de nuestros clientes y al cuidado del medio ambiente.
            </p>
            <p>
                Nuestra pasión por la excelencia nos impulsa a <strong> evolucionar constantemente</strong>, brindando un servicio que marca la diferencia en la industria.
            </p>

            <div class="mis-info-cont">
                <div class="info-card">
                    <h3>🎯 Nuestra Misión</h3>
                    <p>Nos comprometemos a diseñar, desarrollar e implementar soluciones de refrigeración que optimicen los procesos productivos de nuestros clientes. <br> A través de tecnología avanzada y estrategias innovadoras, ayudamos a las empresas a mejorar su eficiencia operativa, reducir costos energéticos y garantizar la conservación óptima de sus productos.</p>
                </div>
                <div class="info-card">
                    <h3>🚀 Nuestra Visión</h3>
                    <p>Nos proyectamos como una empresa líder e innovadora en el sector de la refrigeración industrial, reconocida por la calidad de nuestros servicios y nuestra capacidad para superar las expectativas de nuestros clientes.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="section-transition1"></div>

    <!-- SECCIÓN MÁS INFORMACIÓN -->
    <section id="mas-informacion">
        <h3>Nuestro Compromiso</h3>
        <div class="mis-info-cont">
            <div class="info-card">
                <h4>🌱 Compromiso Ambiental</h4>
                <p>Nos comprometemos con el medio ambiente, utilizando tecnologías que optimizan el consumo energético y
                    reducen las emisiones.</p>
            </div>
            <div class="info-card">
                <h4>🎯 Soluciones Personalizadas</h4>
                <p>Cada cliente es único, por eso ofrecemos soluciones personalizadas que cumplen con sus requerimientos
                    específicos.</p>
            </div>
            <div class="info-card">
                <h4>🚀 Innovación Constante</h4>
                <p>Estamos siempre a la vanguardia de las nuevas tecnologías para ofrecer productos innovadores y
                    eficientes.</p>
            </div>
        </div>
    </section>
    
    </section>

    <div class="section-transition2"></div>

    <section class="equipo">
        <div class="container">
            <h2 class="slide-in">Nuestro Equipo: La Fuerza que Nos Impulsa</h2>
            <p class="equipo-text">
                Detrás de cada proyecto exitoso hay un equipo de profesionales apasionados, comprometidos y altamente capacitados. 
                En nuestra empresa, <strong>las personas son el motor de la innovación y la excelencia</strong>, trabajando en conjunto para ofrecer soluciones de refrigeración industrial de alto impacto.
            </p>
    
            <div class="equipo-grid">
                <div class="equipo-card">
                    <h3>✅ Experiencia y Especialización</h3>
                    <p>Contamos con profesionales con años de trayectoria en el sector, garantizando soluciones eficientes y adaptadas a cada necesidad.</p>
                </div>
                <div class="equipo-card">
                    <h3>💡 Innovación Constante</h3>
                    <p>Nos mantenemos a la vanguardia en tecnología y tendencias en refrigeración, asegurando máxima eficiencia y rendimiento.</p>
                </div>
                <div class="equipo-card">
                    <h3>🏆 Compromiso con la Excelencia</h3>
                    <p>La calidad y la satisfacción del cliente son nuestra prioridad, ofreciendo servicios que superan las expectativas.</p>
                </div>

            </div>
    
            <!-- Imagen del equipo -->
            <div class="equipo-imagen">
                <img src="{{ asset('img/nos1.jpeg') }}"alt="Nuestro equipo de trabajo">
            </div>
        </div>
    </section>
    


    <footer>
        <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
    </footer>
</body>

</html>