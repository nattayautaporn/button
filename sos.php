<?php
        try{
            $HOST = "localhost";
            $BANCO = "nodemcu1"; //name database
            $USUARIO = "root";
            $SENHA = ""; //password

            $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA );
            
        }
        catch(PDOException $erro){
          //  echo ="Erro: " .$errc->getMessage();
            echo  "Erro";
        }   
?>





