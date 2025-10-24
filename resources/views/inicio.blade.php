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
    <meta name="description" content="Ingerack SAS - Más de 20 años de experiencia en diseño, instalación y mantenimiento de sistemas de refrigeración industrial y climatización. Soluciones enérgicamente eficientes y sostenibles.">
    <meta name="keywords" content="refrigeración industrial, aire acondicionado industrial, mantenimiento sistemas de frío, climatización industrial, eficiencia energética, montaje equipos refrigeración, ingeniería en refrigeración,Sistema de refrigeración en valle del Cauca, aire acondicionado en valle del Cauca, productos de refrigeración en valle del Cauca, servicios de refrigeración en valle del Cauca, asesoría en sistemas de refrigeración en valles del Cauca.">
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





    <div class="hero" id="inicio">
        <div class="cont-info">
            <div class="hero-cont" id="hero-cont">
              <div class="hero-content">
                <p id="sub-titulo"><strong>POR UN SISTEMA DE REFRIGERACIÓN INEFICIENTE...</strong></p>
                <h1 class="text-hero"><strong>¡ESTÁS PERDIENDO DINERO!</strong></h1>
                <p id="hero-text" id="pos-titulo" >Las fallas recurrentes, las paradas de producción y el consumo energético excesivo</p> 
                <p id="asento" id="hero-text"><strong>no son inevitables.</p></strong> 
                <p id="hero-text">Podemos ayudarte a eliminarlos y recuperar tu rentabilidad.</p>
                <a href="#contacto"><button class="btn-solicitar">¡SOLICITA TU DIAGNÓSTICO GRATIS!</button></a>
                <p id="respuesta">***Respuesta Inmediata · Garantía contractual incluida***</p>
              </div>
            </div>
        </div>

    </div>





    <section class="soluciones">
        <div class="container">

            <div class="soluciones-intro"> 
                <h2>Tres factores que definen la continuidad y rentabilidad de tu operación</h2>
                <p class="soluciones-texto">
                    En cualquier operación que dependa de refrigeración, tres puntos críticos hacen la diferencia entre operar sin interrupciones o perder miles de dólares: <strong>cómo se diseñó el sistema, cómo se mantiene y qué tan rápido se corrigen las fallas.</strong>
                    Ignorar uno de ellos puede significar paradas imprevistas, consumo energético desbordado y pérdidas millonarias.

                </p>
            </div>

            <div class="soluciones-grid">
                <div class="soluciones-card">

                    <h3>Diseño e Instalación </h3>
                    <img src="{{ asset('img/PGW-PRINCIPAL -CarlosIng.png') }}" alt="Sostenibilidad en refrigeración">

                    <P> <strong>¿Sabes cuánto te cuesta un diseño de refrigeración sobredimensionado?</strong></p>

                    <p>Un sistema mal calculado aumenta hasta un 40% tu consumo energético y acortar la vida útil de los equipos.</p>

                    <P> En Ingerack diseñamos proyectos que ahorran energía y evitan sobre costos desde el primer dia.</p>
                    <div> 
                       <a href="{{ url('proyecto') }}"><button  class="soluciones-botton">¡DESCUBRE CÓMO OPTIMIZAR TU INVERSIÓN!</button></a> 
                    </div>
                </div>

                <div class="soluciones-card">
                    <h3>Mantenimientos programados</h3>
                    
                    <img src="{{ asset('img/Pagina web - contrato.png') }}" alt="Sostenibilidad en refrigeración">

                    <P> <strong>Paradas inesperadas = Pérdidas millonarias</strong></p>

                    <p>Un programa de mantenimiento inteligente reduce un 90% los fallos críticos y ahorra hasta un 30% de energía.</p>

                    <P>Nuestro contrato garantiza respaldo 27/7 y continuidad en tu operación.</p>
                    <div> 
                        <a href="{{ url('mantenimiento') }}"><button class="soluciones-botton">¡ASEGURA TU OPERACIÓN HOY!</button></a>
                    </div>    

                </div>
                <div class="soluciones-card">
                    <h3>Mantenimiento Correctivo</h3>

                    <img src="{{ asset('img/Pagina web - correctivo 2.png') }}"> 

                    <P><strong>Una falla no corregida, es una bomba de tiempo muy costosa</strong></p>

                    <p>ndo no solucionas a tiempo un fallo en tu sistema, este puede costarte millones en pérdida</p>

                    <P>Nos especializamos en detectar y corregir el problema de raíz para que vuelvas a operar rápido y sin sorpresas.</p>

                    <div> 
                        <a href="{{ url('mantenimiento') }}"><button class="soluciones-botton">¡RECUPERA TU OPERACIÓN HOY!</button></a> 
                    </div>                
                </div>
            </div>
        </div>
    </section>





   <div class="section-transition"></div>





    <div class="section-transition0"></div>





    <section class="Diferentes">
        <div class="container">
            <h2>Razones Para Confiar tu Operación a Ingerack</h2>

            <div class="diferentes-grid">
                <div id="soporte" class="diferentes-card">
                    <div class="card-content">
                        <h3>Respaldo técnico 24/7</h3>
                        <p class="hover-text">Para que tu producción no se detenga contamos con respuesta inmediata que evita pérdidas millonarias. Ingenieros y técnicos especializados listos para actuar ante cualquier eventualidad.</p>
                    </div>
                </div>
                <div id="experiencia" class="diferentes-card">
                    <div class="card-content">
                        <h3>Rendimiento garantizado por contrato</h3>
                        <p class="hover-text">Te respaldamos con un compromiso firmado que asegura el rendimiento y el consumo energético de tu sistema, protegiendo tu inversión desde el primer día.</p>
                    </div>
                </div>
                <div id="tecnologia" class="diferentes-card">
                    <div class="card-content">
                        <h3>Tecnología de última generación</h3>
                        <p class="hover-text">Monitoreo, control y eficiencia energética en tiempo real para mantener tu operación siempre bajo control.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="section-transition0-1"></div>





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
    





    <div class="section-transition3"></div>





    <section class="clientes">
        <div class="container">
            <div class="clientes-intro"> 
                <h2>Nuestros clientes</h2>
                <div class="clientes-galeria"> 
                    <img src="{{ asset('img/crepes.webp') }}" alt="Cliente 1">
                    <img src="{{ asset('img/italcol.webp') }}" alt="Cliente 2">
                    <img src="{{ asset('img/ovopacific.webp') }}" alt="Cliente 3">
                    <img src="{{ asset('img/roja.webp') }}" alt="Cliente 4">
                </div>
            </div>
        </div>
    </section>




    <div class="section-transition4"></div>



    


    <section class="nosotros" id="nosotros">
        <div class="container">
            <h2>Quiénes somos y por qué podemos proteger tu operación</h2>
            <div class="content" id="content-nosotros">
                <div class="text">
                    <p>
                        Con más de 20 años de experiencia en refrigeración industrial, en Ingerack ayudamos a empresas de todo tamaño a mantener su operación segura, continua y eficiente.
                    </p>
                    <p>
                        Desde 2003 diseñamos, instalamos y mantenemos sistemas de refrigeración y climatización adaptados a cada necesidad, desde cuartos fríos y cavas industriales hasta soluciones de confort para espacios comerciales.
                    </p>
                    <p>
                        Nuestro compromiso es claro: soluciones que optimizan recursos, cumplen normativas y protegen tu rentabilidad.
                    </p>
                </div>
                <div class="image">
                    <img id="industrial" src="{{ asset('img/totallogo.jpeg') }}"
                        alt="Experiencia en refrigeración industrial">
                </div>
            </div>
        </div>
    </section>





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
            <a href="https://www.facebook.com/Ingerackfrio" target="_blank" class="red-social facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/ingerackcali/" target="_blank" class="red-social instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/ingerack-s-a-s" target="_blank" class="red-social linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="https://www.tiktok.com/@ingerack.sas" target="_blank" class="red-social tik-tok">
                <i class="fab fa-tiktok"></i>
            </a>


            <a href="https://www.youtube.com/@Ingerack " target="_blank" class="red-social youtube">
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