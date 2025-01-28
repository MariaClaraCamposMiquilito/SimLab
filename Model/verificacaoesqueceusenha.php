<?php

$erroEmail = false;

if(!isset($_SESSION['emailverificar']))
{
    echo '<script type="text/javascript">
    window.location.href = "http://localhost/Projeto2025/SimLab/View/esqueciasenha1.php";
    </script>';
}

if (isset($_POST['verificacao'])) {
    if (isset($_POST['digito1'], $_POST['digito2'], $_POST['digito3'], $_POST['digito4'], $_POST['digito5'], $_POST['digito6'])) {
        $verificacao1 = $_POST['digito1'] . $_POST['digito2'] . $_POST['digito3'] . $_POST['digito4'] . $_POST['digito5'] . $_POST['digito6'];
        if (isset($_SESSION['verificar']) && $verificacao1 === $_SESSION['verificar']) {
            $_SESSION['verificar'];
            echo '<script type="text/javascript">
            window.location.href = "https://simlab.linceonline.com.br/View/esqueciasenha3.php";
            </script>';
        } else {
            $erroEmail = true;
        }
    }
}
?>
