<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/Simlab/Styles/conta.css">
    <title>Sua conta</title>
</head>
<body>

    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/conta.php'); ?>

    <h1 class='titulo'>Sua conta</h1>
    
    <main class='total'>
        <form method='POST' enctype="multipart/form-data">
            <div class="conteudo">
                <div class="foto">
                    <p class='titulo_foto'>Foto de perfil:</p>
                    <input id='alterar' type='file' style='display:none;' accept=".png, .jpg, .jpeg" name='enviarfoto'>
                    <label for="alterar" id="file-upload-label">
                        <span class='botaofoto'>Alterar foto</span>
                    </label>
                    <?php
                        echo $_SESSION['fotocam'];
                    ?>
                        <button class='removerfoto' name='remover'>Remover foto</button>
                </div>
                <div class="linha"></div>
                <div class="nomeusuarioconf">
                    <label>Nome de usuário:</label>
                    <button id='editar_user' class='botaofoto' type='button'>Editar</button>    
                    <p class='inputusuario' id='user' name='user' placeholder='<?php echo $nomeuser ?>'><?php echo $nomeuser ?></p>
                </div>
                <div class="linha"></div>
                <div class="emailusuarioconf">
                    <label>Endereço de E-mail</label>
                    <button id='editar_email' class='botaofoto'  type='button'>Editar</button>
                    <p class='inputusuario' id='email' name='email'placeholder=''><?php  echo $_SESSION['email'] ?></p>
                </div>
                <div class="diverror" id='div_error'></div>
                <div class="linha"></div>
                <div class = "campoplano">
                    <div class = "divisaocampoplano">
                        <p>Meu plano:</p>
                        <a class = "botoesplanousuario botaofoto" href = "#" name = "abrirModal">Mudar de plano</a>
                        <p class = "inputusuario">
                            <?php
                                if($premium==0)
                                    echo "Free";
                                else if($premium==1)
                                    echo "Semanal";
                                else if($premium==2)
                                    echo "Mensal";
                                else if($premium==3)
                                    echo "Semestral";
                                else   
                                    echo "Anual";
                            ?>
                        </p>
                        <a class = "botoesplanousuario" name = "open_modal" href = "#">Cancelar o premium</a>
                    </div>
                </div>

            </div>
            <div class="botao">
                <button id='botaoTotal' class="botaototal" name='botao' type='submit'>Salvar alterações</button>
                <a class="botaototal" href='http://localhost/Projeto2025/SimLab/View/principal.php'>Cancelar alterações</a>
            </div>
        </form>
        <div id = "fade" class = "hide"></div>
        <div id = "modal" class = "hide">
            <div class = "modal_header">
                <i class="bi bi-x" name = "close_modal"></i>
                <p class = "cabecalho_modal">Tem certeza que deseja realizar essa operação?</p>
            </div>
            <div class = "campo_modal">
                <a class = "botaoModal">Sim</a>
                <a class = "botaoModal" name = "close_modal1">Não</a>
            </div>
        </div>
    </main>

    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "/Projeto2025/SimLab/js/conta.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>