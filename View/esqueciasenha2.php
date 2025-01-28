<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu a Senha</title>
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/esqueciasenha.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/verificacaoesqueceusenha.php') ?>

    <main class='apresentacao'>
        <div class="total"> <!--Div que engloba todos os elementos da main-->
            <div class="imagem">       
                <img class="Logo"id='logo' src="http://localhost/Projeto2025/SimLab/Assets/SimlabLogo.png" alt="Logo"> <!--Logo do site-->
            </div>
            <div class="total1">
                <form class='form' method="post"> <!--Action direciona para a tela principal ao clicar no botão do formulário-->
                    <div class="login_total" id='total_login'><!--Div que engloba todos os elementos dentro do formulário-->
                        <div class="conteudo_login"><!--Div que engloba todos os Campos do input-->
                            <div class="totalverificacao">
                                <input type="number" min='0' max='9' class="verificacao" id='digito1' name='digito1' oninput="autoTab(this, 'digito2')" onkeydown="handleBackspace(event, 'digito1', 'digito1')">
                                <input type="number" min='0' max='9' class="verificacao" id='digito2' name='digito2' oninput="autoTab(this, 'digito3')" onkeydown="handleBackspace(event, 'digito2', 'digito1')">
                                <input type="number" min='0' max='9' class="verificacao" id='digito3' name='digito3' oninput="autoTab(this, 'digito4')" onkeydown="handleBackspace(event, 'digito3', 'digito2')">
                                <input type="number" min='0' max='9' class="verificacao" id='digito4' name='digito4' oninput="autoTab(this, 'digito5')" onkeydown="handleBackspace(event, 'digito4', 'digito3')">
                                <input type="number" min='0' max='9' class="verificacao" id='digito5' name='digito5' oninput="autoTab(this, 'digito6')" onkeydown="handleBackspace(event, 'digito5', 'digito4')">
                                <input type="number" min='0' max='9' class="verificacao" id='digito6'name='digito6' onkeydown="handleBackspace(event, 'digito6', 'digito5')">
                            </div>
                                <div class="errormsg" id='div_error' style='display:flex; margin-top: 1.5rem; justify-content: center;align-items: center; margin-bottom:-1rem;'>
                                <?php 
                                    if($erroEmail)
                                        echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Código incorreto ou foi expirado</p>';
                                ?>
                                </div>
                            <div class="btnverificacao">
                                <button class="botao_login" name='verificacao' type="submit"> Verificar </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
    <script src="/Projeto2025/SimLab/js/login.js"></script>
    <script src="/Projeto2025/SimLab/js/esqueciminhasenha.js"></script>
</body>

</html>