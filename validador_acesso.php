<?php 
    session_start();
    // echo $_SESSION['autenticado'];

    // verifica se o usuário é autenticado
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: index.php?login=erro2');
    }



?>