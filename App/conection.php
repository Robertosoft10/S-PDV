<?php
ini_set('default charset', 'UTF-8');
$SERVER = "127.0.0.1";
$USER = "root";
$PASS = "";
$DBNAME = "db_spdv";
$conection = mysqli_connect($SERVER, $USER, $PASS, $DBNAME);

if(mysqli_connect_error()){
    echo "Falha na conexao, Insira a base de dados";
  }else{
      mysqli_query($conection, "SET NAMES 'utf8'");
      mysqli_query($conection, 'SET character_set_connection=utf8');
      mysqli_query($conection, 'SET character_set_client=utf8');
      mysqli_query($conection, 'SET character_set_results=utf8');
  }
?>