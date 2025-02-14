<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingerack</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
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

    <section class="section" id="sobre-nosotros">
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

    <div class="section-transition1"></div>

    <section class="section" id="servicios">
        <h2>Nuestros Servicios</h2>
        <p>En Ingerack S.A.S. encontrará un amplio portafolio de servicios, entre los cuales ofrecemos:</p>
        <div class="services">
            <div class="service-card">
                <h3>Montaje de Cuartos Fríos</h3>
                <p>Diseño e instalación de cuartos fríos adaptados a tus necesidades específicas para optimizar el
                    almacenamiento de productos.</p>
            </div>
            <div class="service-card">
                <h3>Mantenimiento Preventivo</h3>
                <p>Evita problemas futuros mediante mantenimientos regulares que garantizan la eficiencia y prolongan la
                    vida útil de tus equipos.</p>
            </div>
            <div class="service-card">
                <h3>Sistemas de Aire Acondicionado</h3>
                <p>Instalación, reparación y mantenimiento de sistemas de aire acondicionado de alta calidad para
                    empresas de todos los tamaños.</p>
            </div>
        </div>
    </section>

    <svg class="wave-divider" viewBox="0 0 1440 170" xmlns="http://www.w3.org/2000/svg">
        <path fill="#c8e1eb" fill-opacity="1"
            d="M0,64L80,48C160,32,320,0,480,21.3C640,43,800,117,960,128C1120,139,1280,85,1360,58.7L1440,32V320H0Z">
        </path>
    </svg>

    <section class="experiencia-section">
        <div class="container">
            <div class="content" id="content-experiencia">
                <div class="text">
                    <h2>Máxima Experiencia en Refrigeración Industrial</h2>
                    <p>
                        Con más de una década de trayectoria, en <strong>Ingerack S.A.S.</strong> somos líderes en el
                        diseño,
                        montaje y mantenimiento de sistemas de refrigeración industrial. Nuestro enfoque en tecnología
                        avanzada
                        y eficiencia energética garantiza soluciones personalizadas y duraderas para nuestros clientes.
                    </p>
                    <p>
                        Trabajamos con <strong>sectores industriales, comerciales y logísticos</strong>, asegurando la
                        conservación óptima de productos perecederos y el cumplimiento de las normativas más exigentes.
                    </p>
                </div>
                <div class="image">
                    <img src="{{ asset('images/experiencia.jpg') }}" alt="Experiencia en refrigeración industrial">
                </div>
            </div>
        </div>
    </section>

    <section class="sostenibilidad-section">
        <div class="container">
            <div class="content" class="sostenibilidad-cont">
                <div class="image">
                    <img src="{{ asset('images/sostenibilidad.jpg') }}" alt="Sostenibilidad en refrigeración">
                </div>
                <div class="text">
                    <h2>Compromiso con la Sostenibilidad</h2>
                    <p>
                        En Ingerack, apostamos por un <strong>futuro más verde</strong>. Nuestros sistemas de
                        refrigeración están
                        diseñados para minimizar el impacto ambiental, optimizando el consumo energético y reduciendo la
                        huella de carbono.
                    </p>
                    <ul class="benefits-list">
                        <li>🌱 <strong>Refrigerantes ecológicos:</strong> Uso de sustancias amigables con el medio
                            ambiente.</li>
                        <li>⚡ <strong>Eficiencia energética:</strong> Disminución del consumo eléctrico hasta un 30%.
                        </li>
                        <li>🔄 <strong>Materiales sostenibles:</strong> Equipos construidos con componentes reciclables.
                        </li>
                    </ul>
                    <p>
                        Al elegirnos, no solo obtienes tecnología de punta, sino también una solución responsable con el
                        planeta.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="porque-ingerack-section">
        <div class="container">
            <h2>¿Por qué Escoger Ingerack?</h2>
            <p class="intro-text">
                Nos diferenciamos por nuestra calidad, experiencia y compromiso con nuestros clientes.
                Estas son algunas razones por las que somos tu mejor opción en refrigeración industrial:
            </p>
            <div class="reasons-grid">
                <div class="reason-card">
                    <img src="{{ asset('images/experiencia-icon.png') }}" alt="Experiencia">
                    <h3>+10 Años de Experiencia</h3>
                    <p>Hemos trabajado con empresas líderes en diferentes sectores.</p>
                </div>
                <div class="reason-card">
                    <img src="{{ asset('images/tecnologia-icon.png') }}" alt="Tecnología">
                    <h3>Tecnología de Última Generación</h3>
                    <p>Utilizamos los sistemas más avanzados para garantizar calidad y eficiencia.</p>
                </div>
                <div class="reason-card">
                    <img src="{{ asset('images/soporte-icon.png') }}" alt="Soporte">
                    <h3>Soporte Especializado</h3>
                    <p>Brindamos atención personalizada en cada etapa del proyecto.</p>
                </div>
            </div>
        </div>
    </section>

    <svg class="wave-divider1" viewBox="0 0 1440 170" xmlns="http://www.w3.org/2000/svg">
        <path fill="#e3f2fd" fill-opacity="1"
            d="M0,64L80,48C160,32,320,0,480,21.3C640,43,800,117,960,128C1120,139,1280,85,1360,58.7L1440,32V320H0Z">
        </path>
    </svg>

    <section id="contacto">
        <div class="contacto-container">
            <div class="contacto-form">
                <h2>Envíanos un Mensaje</h2>
                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Escribe tu nombre">
                    </div>

                    <div class="input-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required placeholder="ejemplo@email.com">
                    </div>

                    <div class="input-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required
                            placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
    </footer>
</body>

</html>