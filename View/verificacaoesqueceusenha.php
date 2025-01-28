<?php
session_start();
$erroEmail = false;
error_reporting(E_ALL & ~E_NOTICE);

if (isset($_POST['verificacao'])) {
    if (isset($_POST['digito1'], $_POST['digito2'], $_POST['digito3'], $_POST['digito4'], $_POST['digito5'], $_POST['digito6'])) {
        $verificacao1 = $_POST['digito1'] . $_POST['digito2'] . $_POST['digito3'] . $_POST['digito4'] . $_POST['digito5'] . $_POST['digito6'];

        if (isset($_SESSION['verificar']) && $verificacao1 === $_SESSION['verificar']) {
            unset($_SESSION['verificar']); // Limpa a verificação após o uso
            header('Location: http://localhost/Projeto2025/Simlab/View/esqueciasenha3.php');
            exit;
        } else {
            $erroEmail = true;
        }
    }
}
?>
