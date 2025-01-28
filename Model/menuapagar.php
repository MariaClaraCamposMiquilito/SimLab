<?php
    session_start();
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

    $id_sim = intval($_POST['id_sim']); 

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM simulacao WHERE id_sim = ? AND fk_usuario_id_usu = ?");
    $stmt->execute([$id_sim, $id]);
    $isOwner = $stmt->fetchColumn() > 0;

    if ($isOwner) 
    {
        $deleteStmt = $pdo->prepare("DELETE FROM simulacao WHERE id_sim = ?");
        $deleteStmt->execute([$id_sim]);

        $dir = '/xampp/htdocs/Projeto2025/SimLab/Resultados/' . $id . "/" . $id_sim;
        if (is_dir($dir)) 
            apagarDiretorio($dir); 
    

        //file_put_contents('email.json', json_encode($_SESSION['email']));
        file_put_contents('/xampp/htdocs/Projeto2025/SimLab/View/id.json', json_encode(null));
        file_put_contents('/xampp/htdocs/Projeto2025/SimLab/View/idsim.json', json_encode(null));
        file_put_contents('/xampp/htdocs/Projeto2025/SimLab/View/nome.json', json_encode(null));
    

        echo '<script type="text/javascript">
        window.location.href = "http://localhost/Projeto2025/SimLab/View/principal.php";
        </script>';
    }            
?>