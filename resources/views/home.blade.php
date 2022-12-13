<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>A N D R O M E D A</title>
        <!--Con Google Fonts:-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="img/marca/logo-sencillo.png">
        <link rel="stylesheet" href="assets/vista-andromeda.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header id="menu">
                <ul id="izquierda_navegacion">
                    <li><a href="index.html"><img id="logo" src="/img/marca/logo.png"></a></li>
                    <li><input id="campo" type="text"></li>
                    <li><img id="lupa" src="/img/icons/lupa_navegacion.png"></li>
                </ul>
                <ul class="topnav" id="derecha_navegacion">
                    <li><a href="index.html">Ofertas</a></li>
                    <li><a href="#nuestros-packs">Kit Digital</a></li>
                    <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                </ul>
        </header>
        <section id="cabecera" class="parallax">
            <div id="entrada" class="container">
                <a href=""><img src="img/marca/logo.png" alt="Logotipo de Andromeda, empresa de Desarrollo Web" id="logo-cabecera"></a>
                <h1>A N D R O M E D A</h1>
                <h2>somos de otro mundo</h2>
                <a href="#sobre-nosotros" class="btn" alt="Botón que dirige a los packs de servicios ofrecidos">Ven a conocernos</a>
            </div>
            <div class="ola" style="height: 190px; overflow: hidden;" >
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-0.84,94.25 C149.99,150.00 362.58,1.50 501.41,91.30 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(239, 240, 234);">
                    </path>
                </svg>
            </div>
        </section>
        <section id="sobre-nosotros">
            <div class="container">
                <header>
                    <p class="titulo-seccion">¿Aún no sabes quiénes somos?</p>
                    <h3>Sobre Nosotros</h3>
                    <p>Somos una empresa dedicada al desarrollo web, desde el comienzo más abocetado hasta la puesta en marcha de un plan de marketing completo.
                        En Andromeda ofrecemos el mejor servicio a medida gracias al gran equipo que conformamos la empresa.</p>
                    <p id="circulo-nosotros">El círculo está compuesto por el programador más excelente de su promoción, una especialista en Marketing Digital que dejará listo el
                        despegue de tu empresa y una artista que perfeccionará todo el contexto acorde a tu marca.</p>
                    <p>Somos de otro planeta, pero hablamos el mismo idioma.</p>
                </header>
            </div>
        </section>
        <section class="oscuro" id="division"></section>
        <section id="nuestros-packs">
            <div class="container">
                <header>
                    <p class="titulo-seccion">Nuestros favoritos</p>
                    <h3>Los mejores packs de la galaxia</h3>
                    <p>Crear una página web no es solo diseñarla, ni siquiera hacer código. Detrás hay mucho más. Incluye en tu encargo el posterior mantenimiento
                        o el marketing que hará despegar a tu página a lo más alto.</p>
                </header>
                <div class="galeria">
                    <div>
                        <img src="img/apoyo-grafico/diseno-web.jpg" alt="">
                        <p class="numero-pack">01</p>
                        <h4>Lo que todo el mundo necesita</h4>
                        <p>Lo más básico para empezar: creamos tu web. Hacemos un boceto previo, modificamos lo que necesites y, una vez le des el visto bueno, empezamos a hacerla realidad. En un visto y no visto.</p>
                        <p>400€</p>
                    </div>
                    <div>
                        <img src="img/apoyo-grafico/mantenimiento.jpg" alt="">
                        <p class="numero-pack">02</p>
                        <h4>Lo importante es el después</h4>
                        <p>Pero, ¿qué pasa una vez te damos la web? Su mantenimiento es esencial. Nosotros estaremos contigo durante los seis meses siguientes a la entrega y te ayudaremos a posicionarte gracias a las redes sociales.</p>
                        <p>700€</p>
                    </div>
                    <div>
                        <img src="img/apoyo-grafico/marketing.jpg" alt="">
                        <p class="numero-pack">03</p>
                        <h4>Volando al estrellato</h4>
                        <p>Las empresas llegan al éxito gracias a buena estrategia de marketing. Las redes sociales y el engagement son fundamentales... y llevan mucho trabajo. Pero no te preocupes, nosotros lo gestionamos durante un año.</p>
                        <p>900€</p>
                    </div>
                </div>
                <p>¿Quieres algo más personalizado? <a href="#contacto">Contacta con nosotros aquí</a> o <a href="#tienda">visita nuestra sede</a>.</p>
            </div>
        </section>
        <section id="contacto" class="oscuro">
            <div class="container peque">
                <header>
                    <p class="titulo-seccion">Contacta con nosotros</p>
                    <h3>Tras la pantalla</h3>
                </header>
                <form>
                    <div>
                        <label for="nombre-contacto">¿Cuál es tu nombre?</label>
                        <input type="text" name="nombre-contacto" id="nombre-contacto">
                    </div>
                    <div>
                        <label for="email-contacto">Correo electrónico</label>
                        <input type="text" name="email-contacto" id="email-contacto">
                    </div>
                    <div>
                        <label for="mensaje-contacto">Escribe aquí las señales que quieres enviarnos:</label>
                        <textarea name="mensaje-contacto" id="mensaje-contacto" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn">¡Contactando con Andromeda!</button>
                        <p class="opacidad-baja"><em>Nuestros satélites están enviando la información a la sede de Andrómeda. ¡Contestaremos lo antes posible!</em></p>
                    </div>
                </form>
            </div>
        </section>
        <section id="tienda">
            <div class="container">
                <p class="titulo-seccion">Visita nuestra sede en la luna de Cartagena</p>
                <h3 class="grande">647 19 47 42</h3>
                <p class="grande">Aula 15 en CIFP Carlos III - Calle Carlos III, 3. Cartagena</p>
                <ul class="social-icons">
                    <li>
                        <a href=""><img src="img/icons/linkdn-logo.png" alt="Acceso a LinkdIn"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/andromeda.php/"><img src="img/icons/instagram-icono2.png" alt="Acceso a Instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="img/icons/twitter-logo2.png" alt="Acceso a Twitter"></a>
                    </li>
                </ul>
            </div>
        </section>
        <footer class="parallax">
            <div id="titulo-andromeda">
                <a href="#cabecera"><img src="img/marca/titulo.png"></a>
            </div>
            <div class="container peque">
                <p id="correo">info.proyectoandromeda@gmail.com</p>
                <p id="copyright">&copy; Copyright 2021 Andromeda</p>
            </div>
        </footer>
        <script>
            function myFunction() {
                var x = document.getElementById("derecha_navegacion");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
        </script>
    </body>
</html>
