<?php
    include_once("/home/simlab/public_html/Model/banco.php");
    include_once("/home/simlab/public_html/Controller/usuario.php");

    if(!isset($_SESSION['emailverificar']))
    {
        echo '<script type="text/javascript">
        window.location.href = "http://localhost/Projeto2025/SimLab/View/esqueciasenha1.php";
        </script>';
    }

    if(isset($_POST['campo_login_cadastro'])) 
    { 
        $user= new usuario(null, null, $_SESSION['emailverificar'], $_POST['campo_login_cadastro'], null, null);
        $user->setSenha($_POST['campo_login_cadastro']);
        $sql = $pdo->prepare("update usuario set senha = ? where email =?;");
        $sql->execute(array($user->getsenha(), $_SESSION['emailverificar']));
        $sql->fetchColumn();

        echo '<script type="text/javascript">
        window.location.href = "https://simlab.linceonline.com.br/View/login.php";
      </script>';

    }
?>