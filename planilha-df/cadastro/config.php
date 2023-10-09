<?php

   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'planilhas-df';

   $conexao = new mysqli( $dbHost, $dbUsername,$dbPassword,$dbName);

   // if($conexao->connect_errno)
   // {
   //  echo "erro";
   // }
   // else{
   //  echo "Deu boa";
   // }
?>