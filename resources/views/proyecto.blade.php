<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos Ingerack</title>

    <!-- css -->   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proyecto.css') }}">

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
                        <h1 class="text-hero"><strong>¿Sabías que un sistema sobredimensionado puede costarte un 40% más mes a mes?</strong></h1>
                        <p class="info-hero">EMuchos proyectos de refrigeración y climatización fallan desde el diseño. Sistemas sobredimensionados, costos inflados y fallas que terminan afectando tu operación….</p>
                        <p>Y lo peor: nadie se hace responsable cuando algo sale mal</p>
                        <button class="btn-solicitar">Solicita una revisión sin costo </button>
                    <div>
                </div>
            </div>
        </div>
    </section>





    <section class="quien-responde">
        <div class="container">
            <div class="quien-responde-title">
                <h2>¿Quién responde si tu sistema no rinde como prometieron?</h2>
            </div>
            <div class="quien-responde-list">
              <ul>
                <li class="">❌ Empresas que no se comprometen con el rendimiento real del sistema.</li>
                <li class="">❌ Instalaciones sin contrato de garantía técnica.</li>
                <li class="">❌ Diseños sin estudios reales de carga térmica o crecimiento futuro.</li>
                <li class="">❌ Sobrecostos por equipos sobredimensionados que no necesitas.</li>
                <li class="">❌ Facturas elevadas desde el primer mes.</li>
                <li class="">❌ Fallas en el sistema... y nadie responde por ellas.</li>
              </ul>
            </div>
        </div>
    </section>





    <section class="financiero">
      <div class="container">
        <div class="financiero-title">
            <h2>Lo que parece una mala elección técnica… puede convertirse en un desastre financiero. </h2>
        </div>
        <div class="financiero-text">
            <p> Un mal diseño puede paralizar tu cadena de frío, elevar tu consumo energético o forzarte a rehacer toda la instalación.</p>
            <p>En Ingerack sabemos que esto no es un lujo: es la operación de tu empresa.</p>
        </div>
      </div>
    </section>




    <div class="section-transition0"></div>




    <section class="historias">
      <div class="container">
        <div class="historias-title">
            <h2>Historias reales, resultados garantizados</h2>
        </div>
        <div class="historias-galeria"> 
          <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 1">
          <img src="{{ asset('img/nos1.jpeg') }}" alt="Cliente 2">
        </div>
      </div>
    </section>





    <section class="sistema">
      <div class="container">
        <h2>Tu sistema con respaldo real. Diseño garantizado por contrato.</h2>
          <div class="sistema-grid">
              <div class="sistema-card">
                  <img src="{{ asset('img/Pagina web - soporte.png') }}" alt="Sostenibilidad en refrigeración">
                  <h3>Diseño técnico inteligente</h3>
                  <p>Cálculo exacto de carga térmica
                  
                  Selección de equipos eficientes y duraderos
                  
                  Ahorro en inversión inicial y energía mensual</p>
              </div>
              <div class="sistema-card">
                  <img src="{{ asset('img/Pagina web - experiencia.png') }}" alt="Sostenibilidad en refrigeración">
                  <h3>Compromiso contractual</h3>
                  <p>Garantía de 1 año sin fallas por diseño o instalación
                    
                    Compromiso de consumo energético previsto por cálculo térmico
                    
                    Si no cumplimos, respondemos</p>
              </div>
              <div class="sistema-card">
                  <img src="{{ asset('img/Pagina web - tecnologia.png') }}" alt="Sostenibilidad en refrigeración">
                  <h3>Proyectos escalables</h3>
                  <p>Diseño que crece contigo
                    
                    Preparados para expansiones futuras sin rehacer todo
                    
                    Reducción de retrabajos y sobrecostos</p>
              </div>
          </div>
      </div>
    </section>




    <section class="diseñamos">
      <div class="container">
        <h2>Diseñamos e instalamos sistemas reales, eficientes y hechos a tu medida.</h2>
      
        <div class="carousel-container">
          <div class="carousel-track">
          
            <div class="carousel-item climatizacion">
              <h3>Climatización y confort:</h3>
              <ul>
                <li>Oficinas corporativas</li>
                <li>Locales comerciales</li>
                <li>Clínicas, consultorios</li>
                <li>Restaurantes, centros educativos</li>
              </ul>
            </div>
          
            <div class="carousel-item refrigeracion">
              <h3>Refrigeración industrial:</h3>
              <ul>
                <li>Cuartos fríos</li>
                <li>Cámaras de congelación</li>
                <li>Salas de proceso</li>
                <li>Cavas industriales</li>
                <li>Centros logísticos</li>
              </ul>
            </div>
          
          </div>
        
          <button class="carousel-btn prev">&#10094;</button>
          <button class="carousel-btn next">&#10095;</button>
        </div>

      </div>
    </section>

    <script>
      const track = document.querySelector('.carousel-track');
      const items = document.querySelectorAll('.carousel-item');
      const prevBtn = document.querySelector('.carousel-btn.prev');
      const nextBtn = document.querySelector('.carousel-btn.next');
    
      let currentIndex = 1;
      let itemWidth = document.querySelector('.carousel-container').offsetWidth;
    
      // Clonar primer y último slide
      const firstClone = items[0].cloneNode(true);
      const lastClone = items[items.length - 1].cloneNode(true);
    
      firstClone.classList.add('clone');
      lastClone.classList.add('clone');
    
      track.appendChild(firstClone);
      track.insertBefore(lastClone, items[0]);
    
      const allItems = document.querySelectorAll('.carousel-item');
      track.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
    
      // Ajustar tamaño al redimensionar ventana
      window.addEventListener('resize', () => {
        itemWidth = document.querySelector('.carousel-container').offsetWidth;
        track.style.transition = 'none';
        track.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
      });
    
      nextBtn.addEventListener('click', () => {
        if (currentIndex >= allItems.length - 1) return;
        currentIndex++;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
      });
    
      prevBtn.addEventListener('click', () => {
        if (currentIndex <= 0) return;
        currentIndex--;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
      });
    
      track.addEventListener('transitionend', () => {
        if (allItems[currentIndex].classList.contains('clone')) {
          track.style.transition = 'none';
          if (currentIndex === allItems.length - 1) {
            currentIndex = 1;
          }
          if (currentIndex === 0) {
            currentIndex = allItems.length - 2;
          }
          track.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
        }
      });
    </script>





    <section class="para-ti">
      <div class="container">
        <div class="para-ti-title">
            <h2>Este servicio es para ti si…</h2>
        </div>
            <div class="para-ti-list">
              <ul>
                <li class="">✅ Te preocupa que tu sistema no rinda como te prometen</li>
                <li class="">✅ Te presentaron un presupuesto y no entiendes si es justo</li>
                <li class="">✅ Quieres crecer y no quieres que tu sistema quede corto en un año</li>
                <li class="">✅ Estás cansado de trabajar con empresas que se lavan las manos ante los errores</li>
                <li class="">✅ Necesitas control energético, continuidad operativa y soporte técnico confiable</li>
              </ul>
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


