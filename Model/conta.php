<?php
include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");

// Recuperar dados do usuário
$sql = $pdo->prepare("SELECT nome_usuario FROM usuario WHERE email = ?;");
$sql->execute([$_SESSION['email']]);
$nomeuser = $sql->fetchColumn();

$sql = $pdo->prepare("SELECT foto FROM usuario WHERE email = ?;");
$sql->execute([$_SESSION['email']]);
$foto1 = $sql->fetchColumn();

$sql = $pdo->prepare("SELECT id_usu FROM usuario WHERE email = ?;");
$sql->execute([$_SESSION['email']]);
$id = $sql->fetchColumn();

$sql = $pdo->prepare("SELECT premium FROM usuario WHERE email = ?;");
$sql->execute([$_SESSION['email']]);
$premium = $sql->fetchColumn();

// Configurar imagem de perfil
if ($foto1 === "padrao.png") {
    $_SESSION['fotocam'] = "<img class='iconfoto fotopadrao' src='http://localhost/Projeto2025/SimLab/Assets/$foto1' width='70' height='70' alt='perfiluser'>";
} else {
    $_SESSION['fotocam'] = "<img class='iconfoto' src='http://localhost/Projeto2025/SimLab/Assets/$id/$foto1' width='70' height='70' alt='perfiluser'>";
}

// Atualizar informações do usuário
if (isset($_POST['botao'])) {

    // Atualizar email
    if (!empty($_POST['email'])) {
        $sql = $pdo->prepare("UPDATE usuario SET email = ? WHERE email = ?;");
        $sql->execute([$_POST['email'], $_SESSION['email']]);
        $_SESSION['email'] = $_POST['email'];
    }

    // Atualizar nome de usuário
    if (!empty($_POST['user'])) {
        $sql = $pdo->prepare("UPDATE usuario SET nome_usuario = ? WHERE email = ?;");
        $sql->execute([$_POST['user'], $_SESSION['email']]);
        $nomeuser = $_POST['user'];
    }

    // Processar upload de foto
    if (!empty($_FILES['enviarfoto']['name'])) {
        $foto = $_FILES['enviarfoto'];
        $directory = "C:/xampp/htdocs/Projeto2025/SimLab/Assets/$id/";

        // Criar o diretório, se não existir
        if (!is_dir($directory)) {
            if (!mkdir($directory, 0755, true)) {
                exit();
            }
        }

        // Validar upload e mover arquivo
        if ($foto['error'] === UPLOAD_ERR_OK) {
            $filename = strtolower(str_replace(' ', '', basename($foto['name'])));
            $filePath = $directory . $filename;

            // Verificar se há uma foto antiga (diferente de "padrao.png") e excluí-la
            if ($foto1 !== "padrao.png" && file_exists($directory . $foto1)) {
                unlink($directory . $foto1);
            }

            if (move_uploaded_file($foto['tmp_name'], $filePath)) {
                // Atualizar o caminho da foto no banco de dados
                $sql = $pdo->prepare("UPDATE usuario SET foto = ? WHERE email = ?;");
                $sql->execute([$filename, $_SESSION['email']]);

                $_SESSION['fotocam'] = "<img class='iconfoto' src='http://localhost/Projeto2025/SimLab/Assets/$id/$filename' width='70' height='70' alt='perfiluser'>";
            }
        }
    }

    // Recarregar a página
    echo '<script>window.location.href = window.location.href;</script>';
    exit();
}

// Remover foto de perfil
if (isset($_POST['remover'])) {
    $sql = $pdo->prepare("UPDATE usuario SET foto = ? WHERE email = ?;");
    $sql->execute(['padrao.png', $_SESSION['email']]);

    $_SESSION['fotocam'] = "<img class='iconfoto fotopadrao' src='http://localhost/Projeto2025/SimLab/Assets/padrao.png' width='70' height='70' alt='perfiluser'>";

    echo '<script>window.location.href = window.location.href;</script>';
    exit();
}
?>
