<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingerack</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">


</head>

<body>
    <header>
        <div class="logo">Ingerack</div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="{{ url('/contactanos') }}">Contactanos</a></li>
                <li><a href="login.html">Iniciar Sesión</a></li>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </nav>
    </header>


    <div class="hero" id="inicio">
        <div class="hero-cont">
            <h1>INGERACK</h1>
            <p>Expertos en diseño, planeación y montaje de sistemas de refrigeración industrial.</p>
        </div>
    </div>

    <section id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <p class="intro-text">
                En <strong>INGERACK</strong>, ofrecemos soluciones avanzadas en refrigeración industrial. 
                Nuestro equipo de expertos garantiza calidad, eficiencia y cumplimiento en cada proyecto.
            </p>
    
            <div class="services-grid">
                <div class="service">
                    <img src="img/diseno-planeacion.jpg" alt="Diseño y Planeación">
                    <h3>Diseño y Planeación</h3>
                    <p>
                        Contamos con ingenieros altamente capacitados que diseñan sistemas de refrigeración 
                        personalizados según los requerimientos de cada empresa. Optimizamos espacios, 
                        eficiencia energética y costos operativos para garantizar el mejor rendimiento.
                    </p>
                </div>
    
                <div class="service">
                    <img src="img/montaje-cuartos.jpg" alt="Montaje de Cuartos Fríos">
                    <h3>Montaje de Cuartos Fríos</h3>
                    <p>
                        Realizamos la instalación de cuartos fríos industriales con materiales de alta calidad, 
                        asegurando la conservación óptima de productos. Ofrecemos soluciones para diferentes industrias: 
                        alimentaria, farmacéutica, logística y más.
                    </p>
                </div>
    
                <div class="service">
                    <img src="img/mantenimiento.jpg" alt="Mantenimiento Preventivo">
                    <h3>Mantenimiento Preventivo</h3>
                    <p>
                        Implementamos planes de mantenimiento preventivo para prolongar la vida útil de los sistemas 
                        de refrigeración, evitando fallos inesperados y reduciendo el consumo energético. 
                        Nuestro equipo técnico realiza revisiones periódicas y diagnósticos precisos.
                    </p>
                </div>
    
                <div class="service">
                    <img src="img/optimizacion.jpg" alt="Optimización Energética">
                    <h3>Optimización Energética</h3>
                    <p>
                        Analizamos el desempeño energético de sus sistemas y aplicamos estrategias de mejora para 
                        reducir costos y aumentar la eficiencia. Incorporamos tecnologías innovadoras y automatización 
                        inteligente para un funcionamiento óptimo.
                    </p>
                </div>
            </div>
        </div>
    </section>
    


    <footer>
        <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
    </footer>
</body>