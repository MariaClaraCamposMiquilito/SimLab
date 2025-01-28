<!--Tela de login
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
    <title>Login</title>
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/login.php');?>
    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/cadastro.php');?>

    <main class="apresentacao toggle" id='main'>
        <div class="total"> <!--Div que engloba todos os elementos da main-->
             
            <div class="imagem">       
                <img class="Logo"id='logo' src="http://localhost/Projeto2025/SimLab/Assets/SimlabLogo.png" alt="Logo"> <!--Logo do site-->
            </div>
            
            <div class="total1">
                <form method="POST"> <!--Action direciona para a tela principal ao clicar no botão do formulário-->

                    <div class="login_total" id='total_login'><!--Div que engloba todos os elementos dentro do formulário-->
                        <div class="conteudo_login"><!--Div que engloba todos os Campos do input-->

                            <div class="input_icone">
                                <i class="bi bi-person icon_email"></i>
                                <div class="input-group">
                                    <input class="campo_login" type="text" id="email_login" name="email_login" required autocomplete='false'>    
                                    <label for="username" class="label">E-mail</label>
                                </div>          
                            </div>

                            <div class="input_icone">
                                <div class="iconesenha">
                                    <i class="material-icons icon_senha" >lock_outline</i>
                                </div>
                                <div class="input-group">
                                    <div class="eyes_password">
                                        <input class="campo_login" type="password" id="senha_login" name="senha_login" required autocomplete='false'>
                                        <i class="bi bi-eye eye" id="eye_login" onclick="mostrarSenha('eye_login', 'senha_login')"></i>
                                        <label for="username" class="label">Senha</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!--Div que engloba o Lembrar senha e o esqueceu sua senha-->
                        <div class="info_senha">
                            <div class="campo_registro">
                                <a class="esqueci_senha" href="http://localhost/Projeto2025/Simlab/View/esqueciasenha1.php">Esqueci minha senha</a>
                            </div>
                        </div>
                        <div class="errormsg">
                            <?php 
                                if($error)
                                    echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">E-mail já cadastrado</p>';
                                if($errorlogin)
                                    echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Usuário ou senha invalida</p>';
                                if($erroridade)
                                    echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">A idade precisa ser maior que 18</p>';
                            ?>
                        </div>

                        <!--Botão de login-->
                        <button class="botao_login" name='entrar' type="submit"> Entrar </button>


                        <div class="central_linha">
                            <div class="linha"></div>
                            <p> ou </p>
                            <div class="linha"></div>
                        </div>
                            
                        <!--Opção de cadastrar-se no site-->
                        <div class="campo_fazercadastro">
                            <button type="button" class="cadastro" id='cadastrar'>Cadastre-se aqui</button>
                        </div>
                    </div>
                </form>

                <form id='form_cadastro' name='formulariocadastro' method="POST">
                    <div class="cadastro_total"><!--Div que engloba todos os elementos dentro do formulário-->
                    <div class="input_icone">
                        <i class="bi bi-person icon_email" id="icon_name_cadastro" name="icon_cadastro"></i>
                        <div class="input-group">
                            <input class="campo_login" type="text" id="input_name_cadastro" required name="nomecas" autocomplete="off" onblur="validacao('input_name_cadastro', 'icon_name_cadastro')">    
                            <label for="input_name_cadastro" class="label campo_senha_cadastro" id="label_name_cadastro">Nome Completo</label>
                        </div>                
                    </div>

                    <div class="input_icone">
                        <i class="bi bi-person icon_email" id="icon_user_cadastro" name="icon_cadastro"></i>
                        <div class="input-group">
                            <input class="campo_login" type="text" id="input_user_cadastro" required name="usercas" autocomplete="off" onblur="validacao('input_user_cadastro', 'icon_user_cadastro')">    
                            <label for="input_user_cadastro" class="label" id="label_user_cadastro">Nome de Usuário</label>
                        </div>           
                    </div>
                    <div class="input_icone">
                        <i class="fa-regular fa-envelope icon_email_cadastro" name="icon_cadastro" id="icon_email_cadastro"></i>
                        <div class="input-group">
                            <input class="campo_login" type="text" id="input_email_cadastro" required name="emailcas" autocomplete="off" onblur="validacao('input_email_cadastro', 'icon_email_cadastro')">    
                            <label for="input_email_cadastro" class="label" id="label_email_cadastro">E-mail</label>
                        </div>          
                    </div>
                
                    <div class="input_icone">
                        <i class="bi bi-calendar icon_email" id="icon_user_nascimento" name="icon_cadastro"></i>
                        <div class="input-group">
                            <input class="campo_login input_nascimento" type="date" id="input_user_nascimento" required name="nascimento" autocomplete="off" onblur="validacao('input_user_nascimento', 'icon_user_nascimento')">    
                            <label for="input_user_nascimento" class="label" id="label_user_nascimento">Data de Nascimento</label>
                        </div>          
                    </div>
                
                    <div class="input_icone">
                        <i class="bi bi-journal-bookmark icon_email" id="icon_user_formacao" name="icon_cadastro"></i>
                        <div class="input-group">
                            <select class="campo_login" name='formacao' id="input_user_formacao" style='appearance: none;' onblur="validacao('input_user_nascimento', 'icon_user_nascimento')">
                                <option disabled selected value="">Formação</option>
                                <option value="1">Modelagem Computacional</option>
                                <option value="2">Imunologia</option>
                                <option value="3">Outros</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="input_icone">
                        <div class="iconesenha" id="icon_cadastro" name="icon_cadastro">
                            <i class="material-icons icon_senha">lock_outline</i>
                        </div>
                        <div class="input-group">
                            <div class="eyes_password">
                                <input class="campo_login" type="password" id="senha_cadastro" name="senhacas" required autocomplete="off" onblur="validacao('senha_cadastro', 'icon_cadastro')" onchange="validacao('senha_cadastro', 'icon_cadastro')">
                                <i class="bi bi-eye eye" id="eye_cadastro" onclick="mostrarSenha('eye_cadastro', 'senha_cadastro')"></i>
                                <label for="senha_cadastro" class="label" id="label_senha_cadastro">Senha</label>
                            </div>
                        </div>
                    </div>
                
                    <div class="input_icone">
                        <div class="iconesenha" id="icon_confirma" name="icon_cadastro">
                            <i class="material-icons icon_senha">lock_outline</i>
                        </div>
                        <div class="input-group">
                            <div class="eyes_password">
                                <input class="campo_login" type="password" id="senha_confirmacao" name="campo_login_cadastro" required autocomplete="off" onblur="validacao('senha_confirmacao', 'icon_confirma')" onchange="validacao('senha_confirmacao', 'icon_confirma')">
                                <i class="bi bi-eye eye" id="eye_confirmacao" onclick="mostrarSenha('eye_confirmacao', 'senha_confirmacao')"></i>
                                <label for="senha_confirmacao" class="label" id="label_confirma_cadastro">Confirmação de Senha</label>
                            </div>
                        </div>
                    </div>
            
                <div class="termo">
                    <input type="checkbox" class="termo_in" id="termo" name="termo" required>
                    <span>
                        Li e concordo com os 
                        <a href="http://localhost/Projeto2025/SimLab/View/termos.php" id="link-termos" class="termo_link">termos de uso</a> e 
                        <a href="http://localhost/Projeto2025/SimLab/View/politica.php" id="link-privacidade" class="termo_link">política de privacidade</a>
                    </span>
                </div>
            
                        <div class="conteudo_cadastro" id='cadastro'><!--Div que engloba todos os Campos do input-->

                        </div>

                        <div class="errormsg" id='div_error'>
                            
                        </div>
                        
                        <div class="info_login">
                            <div class="campo_registro">
                                <button type="button" class="Registro" id='btn_entrar'>Já tem uma conta? Clique aqui</button>
                            </div>
                        </div>

                        <!--Botão de cadastro-->
                        <button class="botao" name="cadastrar" type="submit" id='btn_cadastro'>Cadastrar-se</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
    <script src="/Projeto2025/SimLab/js/login.js"></script>
    <script src="/Projeto2025/SimLab/js/interatividade_login.js"></script>
</body>

</html>

