<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
</head>
<body>

    <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Model/cabecalho.php"); ?>


    <div class="cabecalho_total" id='total'> 
    
        <div class="total2">
  
            <nav class = "navegar" id='navegar'>
                
                <ul class ="lista_header">
                    
                    <div class="direcionamento_cabecalho">

                    <li class = "item_header"><a href="http://localhost/Projeto2025/SimLab/View/principal.php" class="direcionamento direcionamento_hover home">Home</a></li>
                    <li class = "item_header"><a href="http://localhost/Projeto2025/SimLab/View/sobrenos.php" class="direcionamento direcionamento_hover quemsomos">Quem somos</a></li>
                    <li class = "item_header_drop"><p class="direcionamento direcionamento_hover sobreprojeto">Sobre o projeto <i class="bi bi-caret-down-fill"></i></p>

                        <div class = "drop">
                            <a class = "item_drop" href = "http://localhost/Projeto2025/SimLab/View/modelagemComp.php">Modelagem computacional</a>
                            <a class = "item_drop" href = "http://localhost/Projeto2025/SimLab/View/sarampo.php">O sarampo</a>
                        </div>
                    </div>

                </ul>
            </nav>
            
            <div class = "campo_imagem">
                <div class="imagem_logo">
                    <img src="http://localhost/Projeto2025/SimLab/Assets/icon.png" alt="logo" width="35" height="45">
                </div>
                <p class = "imunosim">SimLab</p>
            </div>
            
            <div class="centerperfil" id='perfil'>
                <div class = "perfil_botao btnperfil" id='perfilcontaprincipal'  onclick='mostrarperfil()'>
                    <?php 
                        echo $fotocam;
                    ?>
                </div>
                <div class="opcoesconta escondido" id='perfilconta'>
                    <div class="containfo">
                        <div class = "perfil_botao" onclick='mostrarperfil()'>
                        <?php 
                            echo $fotocam;
                        ?>
                        </div>
                        <div class="infouso">
                            <p class="nomeusuario"><?php  echo $nome; ?></p>
                            <p class="emailusuario"><?php echo $_SESSION['email']; ?></p>
                        </div>
                    </div>
                    <div class = "conta" id="conta">
                        <a class = "item_conta" href = "http://localhost/Projeto2025/SimLab/View/conta.php">Sua conta</a>
                        <a class = "item_conta" href = "http://localhost/Projeto2025/SimLab/View/configuracaoconta.php">Configurações da conta</a>
                        <form method="post">
                            <button type='submit' class = "item_conta sair" name='sair'>Sair</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="hamburguer" id='hamburguer'>
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div>
            </div>
        </div>
    </div>
    <script src = "/Projeto2025/SimLab/js/cabecalho.js"></script>
</body>
</html>