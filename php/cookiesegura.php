<?php
    if ( isset( $_COOKIE[ 'visitas' ] ) ) {

        setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24, httponly:true);
        setcookie("lang", $_SERVER['HTTP_ACCEPT_LANGUAGE'], time() + 3600 * 24, httponly:true);
        $visita = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
        $idioma = 'Estas usando el idioma: ' . $_COOKIE['lang'];
    }
    else {
    
        setcookie( 'visitas', 1, time() + 3600 * 24, httponly:true);
        $visita = 'Bienvenido por primera vez a nuesta web';
        $idioma = 'Bienvenido por primera vez, estas usando el idioma: ' . $_COOKIE['lang'];
    }
?>
<html>
    <head>
        <title>Cookie</title>
    </head>
    <body>
        <p>
            <?php 
            echo $visita . "<br>";
            echo $idioma;
            ?>
        </p>    
    </body>
</html> 