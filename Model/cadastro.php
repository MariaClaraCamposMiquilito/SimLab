<?php
    include_once('/xampp/htdocs/Projeto2025/SimLab/Model/banco.php');
    include_once('/xampp/htdocs/Projeto2025/SimLab/Controller/usuario.php');
    
    $error= false;
    $erroridade=false;

    if(isset($_POST['cadastrar']))
    {
        
        $sql = $pdo->prepare("select count(email) from usuario where email =?;");
        $sql->execute(array($_POST['emailcas']));
        $teste = $sql->fetchColumn();
    
        if($teste==0)
        {
            $user= new usuario($_POST['nomecas'], $_POST['usercas'], $_POST['emailcas'], $_POST['senhacas'] ,$_POST['nascimento'], $_POST['formacao']);
            if($user->getIdade()>=18)
            {
                $sql = $pdo->prepare("insert into usuario value(null, ?, ?, ?, ?, ?, ?, ?, ?);");
                $sql->execute(array($user->getNome(), $user->getEmail(), $user->getFormacao(), $user->getFoto(),$user->getSenha(), $user->getUser(),$user->getPremium() ,$user->getNascimento()));
            }
            else
            {
                $erroridade=true;
            }
        }
        else
        {
            $error=true;
        }
    }
  
?>