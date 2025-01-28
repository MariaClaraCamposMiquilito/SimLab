<?php
        $hostname = "simlab.linceonline.com.br";
        $bancodedados = "simlab_banco";
        $usuario = "simlab_user";
        $senha  = "U5H?^9D!e4.F";
    
        $pdo= new PDO ("mysql:host=$hostname;dbname=$bancodedados","$usuario","$senha");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>