<?php 
    $pagina = "https://elpais.com/";
    $cadena = file_get_contents($pagina);
    echo $cadena;
?>