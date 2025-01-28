<?php

    include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");

    function apagarDiretorio($diretorio) 
    {
    
        $itens = new DirectoryIterator($diretorio);
        foreach ($itens as $item) 
        {
            if ($item->isDot()) continue;
            if ($item->isDir()) 
                apagarDiretorio($item->getPathname());
            else 
                unlink($item->getPathname());
        }
        return rmdir($diretorio);
    }

    $sql = $pdo->prepare("SELECT id_usu from usuario WHERE email = ?;");
    $sql->execute([$_SESSION['email']]);
    $id = $sql->fetchColumn();

    $dir = '/xampp/htdocs/Projeto2025/SimLab/Resultados/' . $id;
        if (is_dir($dir)) 
            apagarDiretorio($dir); 

    $dir = '/xampp/htdocs/Projeto2025/SimLab/Assets/' . $id;
        if (is_dir($dir)) 
          apagarDiretorio($dir);

    $deleteStmt = $pdo->prepare("DELETE FROM usuario WHERE id_usu = ?");
    $deleteStmt->execute([$id]);

    $deleteStmt = $pdo->prepare("DELETE FROM simulacao WHERE fk_usuario_id_usu = ?");
    $deleteStmt->execute([$id]);

    $deleteStmt = $pdo->prepare("DELETE FROM resultado WHERE fk_usuario_id_usu = ?");
    $deleteStmt->execute([$id]);

    session_destroy();

    echo '<script type="text/javascript">
    window.location.href = "http://localhost/Projeto2025/SimLab/View/login.php";
    </script>';

?>