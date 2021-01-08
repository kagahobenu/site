<?php

//Meu código PHP vem aqui.

$pg = $_GET['pg'];

switch ($pg) {

    case 'inicio':
        include_once './paginas/inicio.php';
        break;

    case 'sobre':
        include_once './paginas/sobre.php';
        break;

    case 'servicos':
        include_once './paginas/servicos.php';
        break;

    case 'produtos':
        include_once './paginas/produtos.php';
        break;

    case 'contato':
        include_once './paginas/includes/header.php';
        
        include_once './paginas/contato.php';
        include_once './paginas/includes/footer.php';
        break;
    
       case 'login':
        include_once './paginas/login.php';
        break;

    default:

//Página de Erro.
        echo 'Página não encontrada <br> Digite esse negócio';
        break;
}
?>
