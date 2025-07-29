<!DOCTYPE html>
<html lang="en">

<head>
    <!-- -->    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingerack SAS</title>

    <!-- css -->   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    <!-- fonts -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Meta -->   
    <meta name="description" content="Ingerack SAS - Más de 20 años de experiencia en diseño, instalación y mantenimiento de sistemas de refrigeración industrial y climatización. Soluciones energéticamente eficientes y sostenibles.">
    <meta name="keywords" content="refrigeración industrial, aire acondicionado industrial, mantenimiento sistemas de frío, climatización industrial, eficiencia energética, montaje equipos refrigeración, ingeniería en refrigeración,Sistema de refrigeración en valle del cauca, aire acondicionado en valle del cauca, productos de refrigeración en valle del cauca, servicios de refrigeración en valle del cauca, asesoría en sistemas de refrigeración en valles del cauca.">
    <meta name="author" content="Ingerack SAS">
    <meta name="robots" content="index, follow">

    <!-- Icon -->   
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Ingerack SAS",
          "url": "https://www.ingerack.com",
          "logo": "https://www.ingerack.com/img/logo.png",
          "description": "Empresa especializada en ingeniería de refrigeración industrial y climatización",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "[Carrera 1H # 60 - 59]",
            "addressLocality": "[Cali]",
            "addressRegion": "[Valle del Cauca]",
            "addressCountry": "CO"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "[+57 316 741 6768]",
            "contactType": "customer service"
          }
        }
    </script>



</head>

<body>
    <header>
      <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Ingerack">

        <div class="slogan-container">
          <div class="slogan">
            <h3 class="text-slogan">Frío Perfecto</h3>
          </div>
        </div>
      </div>

      <nav>
        <ul class="nav-links">
          <li class="dropdown">
            <a href="{{ url('/servicios') }}">Servicios</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('proyecto') }}">Proyectos</a></li>
              <li><a href="{{ url('mantenimiento') }}">Mantenimiento</a></li>
            </ul>
          </li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#contacto">Contáctanos</a></li>
        </ul>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
      </nav>
    </header>


    <div class="hero" id="inicio">
        <div class="cont-info">
            <div class="hero-cont" id="hero-cont">
              <div class="hero-content">
                <h1 class="text-hero"><strong>¿Perdiendo dinero por fallas en tu sistema de refrigeración?</strong></h1>
                <p class="info-hero">En Ingerack diseñamos, instalamos y mantenemos sistemas industriales eficientes que protegen tu operación 24/7.</p>
                <a href="#contacto"><button class="btn-solicitar">Solicita un diagnostico gratis</button></a>
              </div>
            </div>
        </div>

    </div>





    <section class="soluciones">
        <div class="container">
            <div class="soluciones-intro"> 
                <h2>Soluciones a la medida de tu operación</h2>
                <p class="soluciones-texto">
                    Sin importa el tamaño de tu negocio, buscamos ser tu aliado, brindarte seguridad y confiabilidad en tus sistemas de refrigeracion o climatización y hacer tu empresa más productiva.
                </p>
            </div>

            <div class="soluciones-grid">
                <div class="soluciones-card">
                    <img src="{{ asset('img/Pagina web - proyectos.png') }}" alt="Sostenibilidad en refrigeración">
                    <h3>Diseño e Instalación </h3>
                    <p>Creamos cuartos frios, salas de procesos y sistemas de aire acondicionado para ofinicas con un diseño optimizado a tu operacion</p>
                    <P> <strong>¿sabes cal es el problema principal al hacer estos diseños?</strong></p>
                    <div> 
                       <a href="{{ url('proyecto') }}"><button  class="soluciones-botton">Conoce más</button></a> 
                    </div>
                </div>
                <div class="soluciones-card">
                    <img src="{{ asset('img/Pagina web - correctivo 2.png') }}" alt="Sostenibilidad en refrigeración">
                    <h3>Corrección de fallas</h3>

                    <p>Solucionamos los problemas que presenten tus equipos de refrigeración y poner en marcha tu producción.</p>
                    <P>Ahorrar hasta un 30% de consumo de energía y lograr un rendimiento como de equipos nuevos, es posible con nosotros.</p>
                    <div> 
                        <a href="#contacto"><button class="soluciones-botton">Conoce más</button></a>
                    </div>    

                </div>
                <div class="soluciones-card">
                    <img src="{{ asset('img/Pagina web - contrato.png') }}" alt="Sostenibilidad en refrigeración">
                    <h3>mantenimientos programados</h3>
                    <p>Sabias que las paradas inesperadas en  equipos de refrigeracion pueden costarle a tu empresa mas de 100 millones.</p>
                    <P>Evita en un 80% los fallos críticos, perdida de dinero y ahorra hasta un 30% de energia con un programa de mantenimientos eficiente. </p>

                    <div> 
                        <a href="{{ url('mantenimiento') }}"><button class="soluciones-botton">Conoce más</button></a> 
                    </div>                
                </div>
            </div>
        </div>
    </section>


   <div class="section-transition"></div>


    <section class="nosotros" id="nosotros">
        <div class="container">
            <div class="content" id="content-nosotros">
                <div class="text">
                    <h2>Nosotros</h2>
                    <p>
                        Mas de 23 años de trayectoria son prueba del compromiso de solucionar las necesidades de nuestros clientes en el sector de la refrigeración, por eso nos especializado en el diseño, montaje y mantenimiento de sistemas de refirgeracion industrial.

                    </p>
                    <p>
                        Estamos  comprometidos en brindar soluciones adaptadas a diversos sectores, ofreciendo nuestra experiencia ya sea en conservación de productos, cadena de frio o climatización de ambientes para mejorar la operación y proteger la rentabilidad de nuestros clientes.
                    </p>
                </div>
                <div class="image">
                    <img id="industrial" src="{{ asset('img/totallogo.jpeg') }}"
                        alt="Experiencia en refrigeración industrial">
                </div>
            </div>
        </div>
    </section>





    <div class="section-transition0"></div>





    <section class="Diferentes">
        <div class="container">
            <h2>Lo que nos hace diferentes</h2>

            <div class="diferentes-grid">
                <div id="soporte" class="diferentes-card">
                    <p>soporte especializado y respuesta 24/7</p>
                    <p>brindamos atención personalizada a cada etapa de tu proyecto o necesidad con un soporte 24/7</p>
                </div>
                <div class="diferentes-card">
                    <img src="{{ asset('img/Pagina web - experiencia.png') }}" alt="Sostenibilidad en refrigeración">
                    <p>+ 20 años de experiencia</p>
                    <p>Más de 22 años de experiencia respaldan nuestro compromiso. Somos aliados técnicos, no solo proveedores, acompañando cada proyecto desde el diseño hasta su óptimo funcionamiento.</p>
                </div>
                <div class="diferentes-card">
                    <img src="{{ asset('img/Pagina web - tecnologia.png') }}" alt="Sostenibilidad en refrigeración">
                    <p>tecnología de ultima generación</p>
                    <p>Utilizamos los sistemas mas avanzados para tener el mejor monitores, automatización, rendimiento y eficiencia energética.</p>
                </div>
            </div>
        </div>
    </section>





        <section class="sostenibilidad-section">
            <div class="container">
                <div class="content" class="sostenibilidad-cont">
                    <div class="image">
                        <img src="{{ asset('img/nos1.jpeg') }}" alt="Sostenibilidad en refrigeración">
                    </div>
                    <div class="text">
                        <h2>Compromiso con la Sostenibilidad</h2>
                        <p>
                            En <strong>Ingerack</strong> , apostamos por un <strong>futuro más verde</strong>. Nuestros
                            sistemas de refrigeración están diseñados para minimizar el impacto ambiental.
                        </p>
                        <ul class="benefits-list">
                            <li>🌱 <strong>Refrigerantes ecológicos:</strong> Uso de sustancias amigables con el medio
                                ambiente.</li>
                            <li>⚡ <strong>Eficiencia energética:</strong> Disminución del consumo eléctrico hasta un 25%.
                            </li>
                            <li>🔄 <strong>Materiales sostenibles:</strong> Equipos construidos con certificaciones
                                internacionales.
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
    
    
    <section class="clientes">
        <div class="container">
            <div class="clientes-intro"> 
                <h2>Nuestros clientes</h2>
                <div class="clientes-galeria"> 
                    <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 1">
                    <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 2">
                    <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 3">
                    <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 4">
                </div>
            </div>
        </div>
    </section>

    


    <div class="section-transition1"></div>





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

            <div class="contacto-form" id="formulario">
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
                        <label for="telefono">Número de Teléfono</label>
                        <input type="text" id="telefono" name="telefono" required placeholder="Tu número de contacto">
                    </div>
                
                    <div class="input-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                
                    <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                </form>
                @if(session('success'))
                    <div class="alerta-exito">
                        {{ session('success') }}
                    </div>
                @endif

            </div>

        </div>
    </section>

    <!-- SECCIÓN DE MAPA -->
    <section id="mapa">
        <h2>Visítanos</h2>
        <p>También puedes encontrarnos en nuestra sede principal.</p>
        <div class="mapa-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.493499052839!2d-76.496809725651!3d3.4723704510820355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7ce2c1e8f8b%3A0x3d7fe9cb84b8fb77!2sINGERACK%20SAS!5e0!3m2!1sen!2sco!4v1739246623370!5m2!1sen!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

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
            <a href="https://www.linkedin.com/company/ingerack" target="_blank" class="red-social linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
             <a href="https://twitter.com/ingerack" target="_blank" class="red-social youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </section>
    
    <footer>
        <p>© 2025 Refrigeración Industrial. Todos los derechos reservados.</p>
    </footer>


    <!-- WhatsApp -->
    <a href="https://wa.me/573001234567" class="btn-whatsapp" target="_blank" aria-label="Chatea con nosotros por WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>

</body>


</html>