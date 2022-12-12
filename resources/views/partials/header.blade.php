<header id="menu">
    <ul id="izquierda_navegacion">
        <li><a href="index.html"><img id="logo" src="img/marca/logo.png"></a></li>
        <li><input id="campo" type="text"></li>
        <li><img id="lupa" src="img/icons/lupa_navegacion.png"></li>
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
