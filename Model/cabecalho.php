<?php
    
    if(!isset($_SESSION['email']))
    {
        echo '<script type="text/javascript">
        window.location.href = "http://localhost/Projeto2025/SimLab/View/login.php";
        </script>';
    }

    if(isset($_POST['sair']))
    {
        session_destroy();
        echo '<script type="text/javascript">
        window.location.href = "http://localhost/Projeto2025/SimLab/View/login.php";
        </script>';
    }

    include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");

    $sql = $pdo->prepare("select nome from usuario where email =?;");
    $sql->execute(array($_SESSION["email"]));
    $nome = $sql->fetchColumn();

    $sql = $pdo->prepare("select foto from usuario where email =?;");
    $sql->execute(array($_SESSION["email"]));
    $foto = $sql->fetchColumn();

    $sql = $pdo->prepare("select id_usu from usuario where email =?;");
    $sql->execute(array($_SESSION["email"]));
    $id = $sql->fetchColumn();

    if($foto==="padrao.png")
        $fotocam="<img src='http://localhost/Projeto2025/SimLab/Assets/$foto'"." width='35' height='35' alt='perfiluser'>";
    else
        $fotocam="<img class='icon' src='http://localhost/Projeto2025/SimLab/Assets/$id/$foto'"." width='40' height='40' alt='perfiluser'>";

?>