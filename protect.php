<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não está logado então nao tem acesso a essa página. <p><a href=\"login.php\">Entrar</a></p>");
}


?>