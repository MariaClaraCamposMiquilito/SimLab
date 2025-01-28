<?php
    include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");
    include_once("/xampp/htdocs/Projeto2025/SimLab/Controller/usuario.php");

    $sql = $pdo->prepare("SELECT nome FROM usuario WHERE email = ?;");
    $sql->execute(array($_SESSION['email']));
    $nome = $sql->fetchColumn();


    $verificador = false;

    $sql = $pdo->prepare("select foto from usuario where email =?;");
    $sql->execute(array($_SESSION['email']));
    $foto = $sql->fetchColumn();



    if($foto==="padrao.png")
            $_SESSION['fotocam']="<img class='iconfoto fotopadrao' src='http://localhost/Projeto2025/SimLab/Assets/$foto'"." width='70' height='70' alt='perfiluser'>";
        else
            $_SESSION['fotocam']="<img class='iconfoto' src='http://localhost/Projeto2025/SimLab/Assets/$id/$foto'"." width='70' height='70' alt='perfiluser'>";

    if (isset($_POST['save'])) 
    {
        if (isset($_POST['campo_senha']) && isset($_POST['campo_conf'])) 
        {
            $sql = $pdo->prepare("SELECT senha FROM usuario WHERE email = ?;");
            $sql->execute(array($_SESSION['email']));
            $senhaAtual = $sql->fetchColumn();

            $user = new usuario('', '', $_SESSION['email'], $senhaAtual, '', '');

            if (password_verify($_POST['campo_senha'], $senhaAtual)) 
            {
                
                $user->setSenha($_POST['campo_conf']);
                $sql = $pdo->prepare("UPDATE usuario SET senha = ? WHERE email = ?;");
                $sql->execute(array($user->getSenha(), $_SESSION['email']));
            } 
            else 
            {
                $verificador = true;
            }
        }
    }
    if(isset($_POST['apagarconta']))
    {
        include_once("/xampp/htdocs/Projeto2025/SimLab/Model/apagausuario.php");
    }
?>
