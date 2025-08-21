<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento Ingerack</title>

    <!-- css -->   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mantenimiento.css') }}">

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
          <a href="{{ url('inicio') }}" >
            <img src="{{ asset('img/logo.png') }}" alt="Ingerack">
          </a>
          <div class="slogan-container">
            <div class="slogan">
              <h3 class="text-slogan">Frío Perfecto</h3>
            </div>
          </div>
        </div>  

        <nav>
          <ul class="nav-links">
            <li class="dropdown">
              <a href="   ">Servicios</a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('proyecto') }}">Proyectos</a></li>
                <li><a href="{{ url('mantenimiento') }}">Mantenimiento</a></li>
              </ul>
            </li>
            <li><a href="#contacto">Contáctanos</a></li>
          </ul>
          <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </nav>
    </header>





    <section id="section"> 
        <div class="hero" id="inicio">
            <div class="cont-info">
                <div class="hero-cont" id="hero-cont">
                    <div class="hero-content">
                        <h1 class="text-hero"><strong>Cada hora de falla en tu sistema de refrigeración puede costarte millones… ¿estás protegido?</strong></h1>
                        <p class="info-hero">No dejes tu producción a la suerte. Nuestros mantenimientos inteligentes aseguran tu operación, evitan pérdidas y garantizan el funcionamiento de tus equipos, respaldado por contrato.</p>
                        <a href="#contacto">
                            <button class="btn-solicitar">Quiero asegurar mi operación ahora</button>
                        </a>
                        
                    <div>
                </div>
            </div>
        </div>
    </section>

    



    <section class="significar-section">
        <h2 >Lo que realmente pierdes cuando tu sistema falla</h2>
        <div class="container">

            <div class="significar-cont-1">
                <div class="image">
                    <img src="{{ asset('img/PGW-3MANTENIMIENTO-materiasprimas.png') }}" alt="Sostenibilidad en refrigeración">
                </div>
                <div class="text">
                    <h3>Pérdida de materias primas</h3>
                </div>
            </div>
            
            <div class="significar-cont-2">
                <div class="image">
                    <img src="{{ asset('img/PGW-3MANTENIMIENTO-incumplimiento.png') }}" alt="Sostenibilidad en refrigeración">
                </div>
                <div class="text">
                    <h3>Incumplimientos con clientes</h3>
                </div>
            </div>

            <div class="significar-cont-1">
                <div class="image">
                    <img src="{{ asset('img/PGW-3MANTENIMIENTO-reputación.png') }}" alt="Sostenibilidad en refrigeración">
                </div>
                <div class="text">
                    <h3>Deterioro en la reputación de tu empresa</h3>
                </div>
            </div>
            
            <div class="significar-cont-2">
                <div class="image">
                    <img src="{{ asset('img/PGW-2DISEÑO-nadiesehaceresponsable.png') }}" alt="Sostenibilidad en refrigeración">
                </div>
                <div class="text">
                    <h3>Costos energéticos innecesarios</h3>
                </div>
            </div>  
        </div>
    </section>




    <section class="fallar">
        <div class="container">
            <div class="fallar-title">
                <h2>Cuando no tienes un aliado que responda, todo puede fallar.</h2>
            </div>
            <div class="fallar-list">
              <ul>
                <li class="fallaList1">Paradas inesperadas que frenan la producción y generan pérdidas</li>
                <li class="fallaList2">Emergencias sin respuesta rápida o con técnicos sin experiencia</li>
                <li class="fallaList1">Consumo de energía elevado sin una causa identificada</li>
                <li class="fallaList2">Sin respaldo 24/7 cuando más lo necesitas</li>
              </ul>
            </div>
        </div>
    </section>





    <section id="section"> 
        <div class="hero2" id="inicio">
            <div class="cont-info">
                <div class="hero-cont" id="hero-cont">
                    <div class="hero2-content">
                        <h2 class="text-hero"><strong>¿Quién responde si tu sistema falla hoy a las 2 a.m.?</strong></h2>
                        <p class="info-hero">Una sola falla puede detener tu producción, arruinar toneladas de producto y hacerte incumplir con tus clientes.</p>
                        <p class="info-hero">En Ingerack te respaldamos 24/7, con técnicos expertos que conocen tu sistema y actúan antes de que el problema se convierta en una pérdida.</p>
                        <a href="#contacto">
                            <button class="btn-solicitar">Solicitar respaldo ahora</button>
                        </a>
                        
                    <div>
                </div>
            </div>
        </div>
    </section>




    <section class="respaldo">
      <div class="container">
        <h2>Así es como mantenemos tu producción segura 24/7</h2>
          <div class="respaldo-grid">
              <div class="respaldo-card">
                  <h3>📊 Monitoreo y reportes energéticos incluidos</h3>
                  <p> Controlamos el rendimiento de tu sistema en tiempo real y te entregamos reportes claros para optimizar costos y evitar fallos por sobrecarga.</p>
              </div>
              <div class="respaldo-card">
                  <h3>🔒 Continuidad garantizada por contrato</h3>
                  <p>Nos comprometemos por escrito a mantener tu sistema operativo. Si algo falla, respondemos 24/7 para que no pierdas producción ni clientes.</p>
              </div>
              <div class="respaldo-card">
                  <h3>🛠️ Planes 100% adaptados a tu operación</h3>
                  <p>Diseñados según tus equipos, procesos y demanda real. Nada estándar, todo hecho para asegurar que tu inversión rinda al máximo.</p>
              </div>
          </div>

          <p class="respaldo-text"><strong>Cada hora de inactividad te cuesta dinero. Nuestro objetivo es que no pierdas ni un minuto de producción.</strong></p>
      </div>
    </section>






    <section class="para-ti">
      <div class="container">
        <div class="para-ti-title">
            <h2>Este servicio es para ti si…</h2>
        </div>
            <div class="para-ti-list">
              <ul>
                <li class="tiList1">Dependes de cuartos fríos o climatización constante y no puedes permitirte una falla.</li>
                <li class="tiList2"> No quieres volver a perder producción ni clientes por un fallo técnico.</li>
                <li class="tiList1">Buscas reducir tus costos energéticos con datos y control reales.</li>
                <li class="tiList2">Quieres un aliado que responda 24/7.</li>
                <li class="tiList1">Te cuesta encontrar un proveedor que cumpla lo que promete.</li>
                <li class="tiList2">Ya has perdido dinero por fallos o mantenimientos mal hechos.</li>
              </ul>
            </div>
      </div>
    </section>





    <section id="section"> 
        <div class="hero3" id="inicio">
            <div class="cont-info">
                <div class="hero-cont" id="hero-cont">
                    <div class="hero3-content">
                        <h2 class="text-hero"><strong>Asegura tu cadena de frío antes de que sea tarde</strong></h2>
                        <p class="info-hero">Déjanos revisar tu sistema sin costo y mostrarte cómo prevenir fallos, ahorrar energía y evitar pérdidas. Prevenir no solo es más barato: es más inteligente.</p>
                        <a href="#contacto">
                            <button class="btn-solicitar">Solicitar respaldo ahora</button>
                        </a>
                        
                    <div>
                </div>
            </div>
        </div>
    </section>





    <div class="section-transition2"></div>





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
                        <p><strong>Ubicación:</strong> Cra. 1h #60-63, Comuna 5, Cali, Valle del Cauca</p>
                    </div>
                  
                    <div class="datoWhats">
                        <a href="https://wa.me/573001234567" target="_blank" aria-label="Chatea con nosotros por WhatsApp">
                            <i class="fab fa-whatsapp"></i> Chatear por WhatsApp
                        </a>
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