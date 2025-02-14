<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingerack - Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
</head>
<body>
<header>
    <div class="logo">Ingerack</div>
    <nav>
        <ul class="nav-links">
            <li><a href="{{ url('/inicio') }}">Inicio</a></li>
            <li><a href="#mas-informacion">Más Información</a></li>
            <li><a href="{{ url('/contactanos') }}">contactanos</a></li>
            <li><a href="login.html">Iniciar Sesión</a></li>
        </ul>
    </nav>
</header>

<!-- SECCIÓN INICIAL -->
<section id="inicio">
    <h1>Bienvenidos a Ingerack S.A.S.</h1>
    <p>Nos especializamos en la creación de soluciones innovadoras para la industria de la refrigeración. A través de nuestra experiencia y dedicación, ofrecemos un servicio de alta calidad y eficiencia energética, adaptado a las necesidades de cada cliente.</p>
</section>

<!-- SECCIÓN SOBRE NOSOTROS -->
<section id="sobre-nosotros">
    <div class="nosotros">
        <h2>Sobre Nosotros</h2>
        <div class="nosotros-cont">
            <div class="nosotros-texto">
                <p>
                    En Ingerack S.A.S., nos especializamos en la producción de montajes refrigerados y la asesoría integral de proyectos. Nuestro enfoque está en optimizar procesos de manera eficiente, con un énfasis particular en uno de los aspectos más críticos en la actualidad: el consumo energético. Estamos comprometidos en brindar soluciones adaptadas a diversos sectores, ofreciendo nuestra experiencia en la conservación de productos en la cadena de frío, para garantizar resultados de alta calidad y eficiencia.
                </p>
            </div>
            <div class="nosotros-img"></div>
        </div>
    </div>
</section>

<!-- SECCIÓN MÁS INFORMACIÓN -->
<section id="mas-informacion">
    <h3>Más Información</h3>
    <div class="mis-info-cont">
        <div class="info-card">
            <h4>Compromiso Ambiental</h4>
            <p>Nos comprometemos con el medio ambiente, utilizando tecnologías que optimizan el consumo energético y reducen las emisiones.</p>
        </div>
        <div class="info-card">
            <h4>Soluciones Personalizadas</h4>
            <p>Cada cliente es único, por eso ofrecemos soluciones personalizadas que cumplen con sus requerimientos específicos.</p>
        </div>
        <div class="info-card">
            <h4>Innovación Constante</h4>
            <p>Estamos siempre a la vanguardia de las nuevas tecnologías para ofrecer productos innovadores y eficientes.</p>
        </div>
    </div>
</section>

<footer>
    <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
</footer>
</body>
</html>
