<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Ingerack</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactanos.css') }}"> <!-- Enlaza tu CSS -->
    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="logo"><a href="{{ url('inicio') }}"></a> Ingerack</div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/inicio') }}">Inicio</a></li>
                <li><a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a></li>
                <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                <li><a href="#contactanos">Contáctanos</a></li>
                <li><a href="login.html">Iniciar Sesión</a></li>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </nav>
    </header>


    <!-- SECCIÓN INICIAL -->
    <div class="hero" id="inicio">
        <div class="hero-cont">
            <h1>Contáctanos</h1>
            <p>¿Tienes dudas o necesitas asesoría? Estamos aquí para ayudarte. Envíanos un mensaje o visítanos.</p>
        </div>
    </div>


    <!-- SECCIÓN DE CONTACTO -->
    <section id="contacto">
        <div class="contacto-container">
            <div class="contacto-info">
                <h2>Ponte en Contacto</h2>
                <p>Completa el formulario y uno de nuestros asesores te responderá lo antes posible.</p>

                <div class="contacto-datos">
                    <div class="dato">
                        <i class="fas fa-phone-alt"></i>
                        <p><strong>Teléfono:</strong> +57 123 456 7890</p>
                    </div>
                    <div class="dato">
                        <i class="fas fa-envelope"></i>
                        <p><strong>Email:</strong> contacto@ingerack.com</p>
                    </div>
                    <div class="dato">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><strong>Ubicación:</strong> Calle 123 #45-67, Bogotá, Colombia</p>
                    </div>
                </div>
            </div>

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

    <div class="section-transition1"></div>


    <!-- SECCIÓN DE REDES SOCIALES -->
    <section id="redes-sociales">
        <h2>Síguenos en nuestras Redes Sociales</h2>
        <p>Conéctate con nosotros y mantente al día con nuestras novedades.</p>
        <div class="redes-container">
            <a href="https://www.facebook.com/ingerack" target="_blank" class="red-social facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/ingerack" target="_blank" class="red-social instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/ingerack" target="_blank" class="red-social twitter">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/ingerack" target="_blank" class="red-social linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </section>

    <div class="section-transition2"></div>

    <!-- SECCIÓN DE MAPA -->
    <section id="mapa">
        <h2>Visítanos</h2>
        <p>También puedes encontrarnos en nuestra sede principal.</p>
        <div class="mapa-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.493499052839!2d-76.496809725651!3d3.4723704510820355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7ce2c1e8f8b%3A0x3d7fe9cb84b8fb77!2sINGERACK%20SAS!5e0!3m2!1sen!2sco!4v1739246623370!5m2!1sen!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
    </footer>

</body>

</html>