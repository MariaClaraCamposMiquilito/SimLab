<!--Esqueci a senha (tela para informar o email e receber o codigo p redefinir a senha)
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
    <title>Esqueci minha senha</title>
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/esqueciasenha.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/envioesqueceusenha.php');?>
    

    <main class='apresentacao'>
        <div class="total"> <!--Div que engloba todos os elementos da main-->
            <div class="imagem">       
                <img class="Logo" id='logo' src="http://localhost/Projeto2025/SimLab/Assets/SimlabLogo.png" alt="Logo"> <!--Logo do site-->
            </div>
            <div class="total1">
                <form method="post" name='form'> <!--Action direciona para a tela principal ao clicar no botão do formulário-->
                    <div class="login_total" id='total_login'><!--Div que engloba todos os elementos dentro do formulário-->
                        <div class="conteudo_login"><!--Div que engloba todos os Campos do input-->

                            <div class="input_icone">
                                <i class="bi bi-person icon_email"></i>
                                <div class="input-group">
                                    <input class="campo_login" type="text" id="icone_email" name="email" required autocomplete='false'>    
                                    <label for="username" class="label">E-mail</label>
                                </div>          
                            </div>
                        </div>
                        <div class="info_login">
                            <div class="campo_registro">
                                <a class="Registro" id='btn_entrar' href='http://localhost/Projeto2025/Simlab/View/login.php'>Entrar em outra conta</a>
                            </div>
                        </div>
                        <div class="errormsg" id="div_error">
                            <?php 
                                if($erroEmail)
                                    echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">E-mail não encontrado</p>';
                            ?>
                        </div>
                        <button class="botao_login" name='enviar' type='submit'> Enviar Código </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
    <script src="/Projeto2025/SimLab/js/esqueciminhasenha.js"></script>
</body>

</html>

