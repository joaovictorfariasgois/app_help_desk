<?php
session_start();

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';    

 // remover indices do array de sessão 
  //unset()  

// unset($_SESSION['x']);


// // destruir a vaiável de sessão 
// //session_destroy()

// session_destroy();

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

session_destroy();
header('location: index.php');

?>