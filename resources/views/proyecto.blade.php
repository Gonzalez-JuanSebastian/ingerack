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
          <a id="logo" href="{{ url('inicio') }}" >
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
                <a href="javascript:void(0);">Servicios</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('proyecto') }}">Proyectos</a></li>
                    <li><a href="{{ url('mantenimiento') }}">Mantenimiento</a></li>
                </ul>
            </li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#contacto">Contáctenos</a></li>
        </ul>
        <div class="menu-toggle" onclick="toggleMenu()" 
             style="font-size: 28px; padding: 10px; cursor: pointer;">
                ☰
        </div>    
        </nav>
    </header>





    <section id="section"> 
        <div class="hero" id="inicio">
            <div class="cont-info">
                <div class="hero-cont" id="hero-cont">
                    <div class="hero-content">
                        <h1 class="text-hero"> ¿TU SISTEMA DE REFRIGERACIÓN <br> <strong> ESTÁ GASTANDO MÁS ENERGÍA</strong><br> DE LA PROYECTADA?</h1>
                        <p id="info-hero">Un diseño sobredimensionado o un cálculo de cargas térmica incorrecto, puede disparar tu consumo hasta un 40% y acortar la vida útil de tus equipos. Empiezas tu proyecto perdiendo dinero y con problemas, lo peor… no hay quien asuma la responsabilidad.</p>
                        <p id="info-hero" class="sub-titulo">En Ingerack optimizamos tu proyecto desde el diseño hasta la instalación, con garantía escrita de rendimiento y eficiencia.</p>
                        <a href="#contacto">
                          <button  class="btn-solicitar">¡SOLICITA UNA SOLICITA UNA REVISIÓN SIN COSTO SIN COSTO!</button>
                        </a>
                        <p class="sub-titulo">***Respuesta Inmediata · Garantía contractual incluida***</p>
                    <div>
                </div>
            </div>
        </div>
    </section>




    <div class="section-transition"></div>





<section class="quien-responde">
    <div class="container">
        <div class="quien-responde-title">
            <h2>Señales de que tu proyecto está drenando tu dinero</h2>
        </div>
        
        <div class="quien-responde-grid">
            <div id="respondeDiseño" class="responde-card special">
                <div class="card-inner">
                    <img src="{{ asset('img/PGW-2DISEÑO-diseñotecnicointeli.png') }}" alt="Fallas desde el diseño">
                    <div class="content">
                        <h3>Fallas desde el diseño</h3>
                        <p>Un cálculo de carga térmica inexacto o ignorar el crecimiento de tu operación puede dejarte con un sistema ineficiente desde el primer día.</p>
                    </div>
                </div>
            </div>

            <div id="respondeGarantia" class="responde-card special">
                <div class="card-inner">
                    <img src="{{ asset('img/PGW-PRINCIPAL-Manoscontrato2.png') }}" alt="Sin garantía real">
                    <div class="content">
                        <h3>Sin garantía real de rendimiento</h3>
                        <p>Si tu proveedor no se compromete por contrato al consumo energético y capacidad de enfriamiento, quedas expuesto a sobre costos y bajo rendimiento.</p>
                    </div>
                </div>
            </div>

            <div id="respondeCostos" class="responde-card special">
                <div class="card-inner">
                    <img src="{{ asset('img/PGW-PRINCIPALmantenimientoIng.png') }}" alt="Sobre costos innecesarios">
                    <div class="content">
                        <h3>Sobre costos innecesarios</h3>
                        <p>Un diseño deficiente puede llevarte a comprar equipos más grandes y costosos de lo que realmente necesitas, afectando tu rentabilidad a largo plazo.</p>
                    </div>
                </div>
            </div>

            <div id="respondeResponsabilidad" class="responde-card special">
                <div class="card-inner">
                    <img src="{{ asset('img/Pagina web - correctivo 2.png') }}" alt="Nadie se hace responsable">
                    <div class="content">
                        <h3>Nadie se hace responsable después de instalar</h3>
                        <p>Si el sistema falla o consume más de lo prometido, ¿quién responde? Sin un respaldo contractual, la respuesta suele ser: nadie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





    <div class="section-transition00"></div>





    <section class="sistema">
      <div class="container">
        <h2>Nuestra forma de diseñar proyectos que funcionan hoy… y en 20 años</h2>
        <div class="sistema-grid">
          <div id="sistemaDiseño" class="sistema-card special">
            <div class="card-inner">
              <img src="{{ asset('img/PGW-2DISEÑO-diseñotecnicointeli.png') }}" alt="Soporte técnico inteligente">
              <div class="content">
                <h3>Diseños que ahorran desde el primer día</h3>
                <p>
                  Porque calculamos lo que realmente necesitas, evitando sobre costos y exceso de consumo energético desde el inicio.

                </p>
              </div>
            </div>
          </div>

          <div id="sistemaCompromiso" class="sistema-card special">
            <div class="card-inner">
              <img src="{{ asset('img/PGW-PRINCIPAL-Manoscontrato2.png') }}" alt="Compromiso contractual">
              <div class="content">
                <h3>Compromiso por contrato</h3>
                <p>
                  Te garantizamos por escrito el rendimiento y consumo de tu sistema, para que nunca te quedes sin respaldo.
                </p>
              </div>
            </div>
          </div>

          <div id="sistemaProyecto" class="sistema-card special">
            <div class="card-inner">
              <img src="{{ asset('img/PGW-PRINCIPALmantenimientoIng.png') }}" alt="Proyectos escalables">
              <div class="content">
                <h3>Proyectos que crecen contigo</h3>
                <p>
                  Diseñamos pensando en la expansión, para que tu sistema evolucione con tu negocio sin rehacer toda la instalación.
                </p>
              </div>
            </div>
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




    <div class="section-transition0-5"></div>



    <section class="historias">
      <div class="container">
        <div class="historias-title">
            <h2>Historias reales, resultados garantizados</h2>
        </div>
        <div class="historias-galeria"> 
          <img src="{{ asset('img/italcol.webp') }}" alt="Cliente 1">
          <img src="{{ asset('img/ovopacific.webp') }}" alt="Cliente 2">
        </div>
      </div>
    </section>





    <div class="section-transition00"></div>





    <section class="para-ti">
      <div class="container">
        <div class="para-ti-title">
            <h2>¡Es para ti! Si…</h2>
        </div>
            <div class="para-ti-list">
              <ul>
                <li class="tiList1">Te preocupa que tu sistema no rinda como prometieron.</li>
                
                <li class="tiList2"> No quieres pagar facturas de energía infladas cada mes.</li>
                <li class="tiList1">Buscas un aliado que responda cuando algo falla.</li>
                <li class="tiList2">Quieres un proyecto que crezca contigo sin rehacer todo</li>
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

<script>
// Comportamiento del header en móvil
let lastScrollTop = 0;
const header = document.querySelector('header');
const scrollThreshold = 100;

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
        header.classList.add('header-hidden');
    } else {
        header.classList.remove('header-hidden');
    }
    
    lastScrollTop = scrollTop;
});

// Tu código existente para el menú
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
    
    if (!navLinks.classList.contains('show')) {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }
}

// Manejar dropdowns en móviles
document.querySelectorAll('.dropdown > a').forEach(dropdownLink => {
    dropdownLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            const dropdown = this.parentElement;
            const wasActive = dropdown.classList.contains('active');
            
            document.querySelectorAll('.dropdown').forEach(d => {
                d.classList.remove('active');
            });
            
            if (!wasActive) {
                dropdown.classList.add('active');
            }
        }
    });
});

// Cerrar menú al hacer clic en un enlace que no sea dropdown
document.querySelectorAll('.nav-links a:not(.dropdown > a)').forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.remove('show');
            
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });
});

// Cerrar menú al hacer clic fuera de él
document.addEventListener('click', function(e) {
    if (window.innerWidth <= 768) {
        const navLinks = document.querySelector('.nav-links');
        const menuToggle = document.querySelector('.menu-toggle');
        
        if (navLinks.classList.contains('show') && 
            !navLinks.contains(e.target) && 
            !menuToggle.contains(e.target)) {
            navLinks.classList.remove('show');
            
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    }
});
</script>


</body>
</html> 


