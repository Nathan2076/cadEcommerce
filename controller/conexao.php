<?php
  
  $user = 'root';
  $pass = '';
  $server = 'localhost';
  $db = 'compra';

  $mysqli = mysqli_connect($server, $user, $pass, $db);
  $mysqli->set_charset('utf8');

  // Caso haja um erro na conexão, abortar.
  if ($mysqli->connect_error){
    die ('Connect Error');
  }
?>
