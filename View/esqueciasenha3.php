<!--Esqueci a senha (tela para informar a nova senha)
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    Maria Fernanda Ventura dos Santos Leite
    3° Informática
-->
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
    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/trocarsenha.php')?>
    <main class="apresentacao" id='main'>
        <div class="total"> <!--Div que engloba todos os elementos da main-->
            <div class="imagem">       
                <img class="Logo"id='logo' src="http://localhost/Projeto2025/SimLab/Assets/SimlabLogo.png" alt="Logo"> <!--Logo do site-->
            </div>
            <div class="total1">
                <form class='form' method='POST' id='form_cadastro'> <!--Action direciona para a tela principal ao clicar no botão do formulário-->
                    <div class="login_total" id='total_login'><!--Div que engloba todos os elementos dentro do formulário-->
                        <div class="conteudo_login"><!--Div que engloba todos os Campos do input-->

                            <div class="input_icone">
                                <div class="iconesenha" id='icon_cadastro' name='icon_cadastro'>
                                    <i class="material-icons icon_senha">lock_outline</i>
                                </div>
                                <div class="input-group">
                                    <div class="eyes_password">
                                        <input class="campo_login" type="password" id="senha_cadastro" name='campo_login_cadastro' required  autocomplete='false' onblur="validacao('senha_cadastro', 'icon_cadastro')" onchange="senhaAltera()">
                                        <i class="bi bi-eye eye" id="eye_login" onclick="mostrarSenha('eye_login', 'senha_cadastro')"></i>
                                        <label for="username" class="label labelesqueceusenha">Nova Senha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="input_icone">
                                <div class="iconesenha" id='icon_confirma' name='icon_cadastro'>
                                    <i class="material-icons icon_senha">lock_outline</i>
                                </div>
                                    <div class="input-group">
                                        <div class="eyes_password">
                                            <input class="campo_login" type="password" id="senha_confirmacao" name="campo_login_cadastro" required autocomplete='false' onblur="validacao('senha_confirmacao', 'icon_confirma')"  onchange="senhaAltera()">
                                            <i class="bi bi-eye eye" id="eye_confirma" onclick="mostrarSenha('eye_confirma', 'senha_confirmacao')"></i>
                                            <label for="username" class="label labelesqueceusenha2">Confirmação de senha</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button class="botao_login" id='btn_cadastro' type="submit" name='alterar'> Alterar </button>
                            <div class="errormsg" id='div_error'></div>
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

 