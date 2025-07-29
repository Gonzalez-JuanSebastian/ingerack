<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | Ingerack</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>


<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Ingerack">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/inicio') }}">Inicio</a></li>

                <li><a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a></li>
                <li><a href="{{ url('/contactanos') }}">Contáctanos</a></li>
                <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </nav>
    </header>

    <!-- SECCIÓN HERO -->
    <section class="hero" id="inicio">
        <div class="hero-cont" id="hero-cont">
            <h1>INGERACK</h1>
            <p>Expertos en refrigeración industrial. Diseño, instalación y mantenimiento con tecnología de vanguardia.
            </p>
        </div>
    </section>

    <!-- INTRODUCCION -->
    <div class="introduccion">
        <div class="int-cont">
            <h2>Nuestros Servicios</h2>
            <p class="intro-text">
                En <strong>INGERACK</strong>, ofrecemos soluciones avanzadas en refrigeración industrial.
                Contamos con un equipo altamente calificado que garantiza calidad, eficiencia y cumplimiento
                en cada proyecto.
            </p>
        </div>
    </div>

    <svg class="wave-divider" viewBox="0 0 1440 170" xmlns="http://www.w3.org/2000/svg">
        <path fill="#c8e1eb" fill-opacity="1"
            d="M0,64L80,48C160,32,320,0,480,21.3C640,43,800,117,960,128C1120,139,1280,85,1360,58.7L1440,32V320H0Z">
        </path>
    </svg>

    <!-- SECCIÓN DE SERVICIOS -->
    <section id="servicios">
        <div class="container">
            <div class="services-grid">
                <div class="service">
                    <img src="{{ asset('img/cuarto.jpeg') }}">
                    <h3>Diseño y Planeación</h3>
                    <p>
                        Diseñamos sistemas de refrigeración a la medida de tu empresa, optimizando espacios y costos.
                    </p>
                    <a href="#Diseño y Planeación" class="btn">Más información</a>
                </div>

                <div class="service">
                    <img src="{{ asset('img/cuarto2.jpeg') }}">
                    <h3>Montaje de Cuartos Fríos</h3>
                    <p>
                        Instalamos cuartos fríos industriales con materiales de alta calidad, garantizando conservación
                        óptima.
                    </p>
                    <a href="#Montaje de Cuartos Fríos" class="btn">Más información</a>
                </div>

                <div class="service">
                    <img src="{{ asset('img/elevador.jpeg') }}" alt="Mantenimiento Preventivo">
                    <h3>Mantenimiento Preventivo</h3>
                    <p>
                        Implementamos planes de mantenimiento para prolongar la vida útil de los sistemas de
                        refrigeración.
                    </p>
                    <a href="#Mantenimiento Preventivo" class="btn">Más información</a>
                </div>

                <div class="service">
                    <img src="{{ asset('img/nos2.jpeg') }}" alt="Optimización Energética">
                    <h3>Optimización Energética</h3>
                    <p>
                        Aplicamos estrategias de eficiencia energética para reducir costos y mejorar el rendimiento.
                    </p>
                    <a href="#Optimización Energética" class="btn">Más información</a>
                </div>
            </div>
        </div>
    </section>


    <div class="section-transition1"></div>


<!-- SERVICIOS -->
<section class="servicios">
    <div class="services-title">
        <h2>¿Por qué son tan importantes?</h2>
    </div>
    
    <div class="servicio">
        <div class="contenido" id="Diseño y Planeación">
            <img src="{{ asset('img/cuarto.jpeg') }}" alt="Diseño y Planeación">
            <div class="texto">
                <h2><i class="fas fa-drafting-compass"></i> 📐 Diseño y Planeación Estratégica</h2>
                <p>Desarrollamos soluciones personalizadas para optimizar espacio y costos en tu empresa.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> 🚀 Maximización del espacio disponible</li>
                    <li><i class="fas fa-check-circle"></i> 💸 Reducción de costos operativos</li>
                    <li><i class="fas fa-check-circle"></i> 📜 Cumplimiento de normativas</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="servicio" id="Montaje de Cuartos Fríos">
        <div class="contenido" id="c2">
            <img src="{{ asset('img/cuarto2.jpeg') }}" alt="Montaje de Cuartos Fríos">
            <div class="texto">
                <h2><i class="fas fa-snowflake"></i> ❄️ Montaje de Cuartos Fríos Profesionales</h2>
                <p>Instalamos cuartos fríos con tecnología de punta, garantizando conservación óptima.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> 🛠️ Materiales de alta durabilidad</li>
                    <li><i class="fas fa-check-circle"></i> 🌡️ Equipos de refrigeración eficientes</li>
                    <li><i class="fas fa-check-circle"></i> 📞 Asesoramiento post-instalación</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="servicio" id="Mantenimiento Preventivo">
        <div class="contenido">
            <img src="{{ asset('img/elevador.jpeg') }}" alt="Mantenimiento Preventivo">
            <div class="texto">
                <h2><i class="fas fa-tools"></i> 🛠️ Mantenimiento Preventivo Especializado</h2>
                <p>Estrategias de mantenimiento para prolongar la vida útil de tus sistemas.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> 🔍 Inspección periódica</li>
                    <li><i class="fas fa-check-circle"></i> 💰 Reducción de costos de reparación</li>
                    <li><i class="fas fa-check-circle"></i> ⏳ Continuidad operativa</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="servicio" id="Optimización Energética">
        <div class="contenido" id="c2">
            <img src="{{ asset('img/nos2.jpeg') }}" alt="Optimización Energética">
            <div class="texto">
                <h2><i class="fas fa-bolt"></i> ⚡ Optimización Energética Inteligente</h2>
                <p>Reducimos costos energéticos y mejoramos la eficiencia de tus sistemas.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> 📉 Menor consumo eléctrico</li>
                    <li><i class="fas fa-check-circle"></i> 📊 Monitoreo en tiempo real</li>
                    <li><i class="fas fa-check-circle"></i> ✨ Soluciones a medida</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<svg class="wave-divider2" viewBox="0 0 1440 170" xmlns="http://www.w3.org/2000/svg">
    <path fill="#c8e1eb" fill-opacity="1"
        d="M0,64L80,48C160,32,320,0,480,21.3C640,43,800,117,960,128C1120,139,1280,85,1360,58.7L1440,32V320H0Z">
    </path>
</svg>

<!-- SECCIÓN DE CONTACTO -->
<section id="contacto">
    <div class="container">
        <h2>¡Lleva tu proyecto al siguiente nivel!</h2>
        <p>Convierte tus ideas en realidad con nuestro equipo de expertos. Planifiquemos juntos tu próximo gran proyecto.</p>
        <a href="{{ url('/contactanos') }}" class="btn-contact">Hablemos</a>
    </div>
</section>




    <!-- FOOTER -->
    <footer>
        <p>© 2025 Ingerack. Todos los derechos reservados.</p>
    </footer>
</body>

</html>