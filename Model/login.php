<?php 
include_once('/xampp/htdocs/Projeto2025/SimLab/Model/banco.php');
include_once('/xampp/htdocs/Projeto2025/SimLab/Controller/usuario.php');

session_start();

$errorlogin = false;

if (isset($_POST['entrar'])) 
{
    $sql = $pdo->prepare("SELECT senha FROM usuario WHERE email = ?;");
    $sql->execute(array($_POST['email_login']));
    $entrar = $sql->fetchColumn();

    
    if (password_verify($_POST['senha_login'], $entrar)) 
    {
        $_SESSION['email'] = $_POST['email_login'];
        
        $emailpy = $_SESSION['email'];
        file_put_contents('email.json', json_encode($emailpy));

        $passarid = NULL;
        file_put_contents('id.json', json_encode($passarid));

        $passaridsim = NULL;
        file_put_contents('idsim.json', json_encode($passaridsim));

        $passarnome = NULL;
        file_put_contents('nome.json', json_encode($passarnome));

        echo '<script type="text/javascript">
        window.location.href = "http://localhost/Projeto2025/SimLab/View/principal.php";
        </script>';
    
    } 
    else 
    {
        $errorlogin = true;
    }

}   
?>