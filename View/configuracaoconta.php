<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/Simlab/Styles/configuracaoconta.css">
    <title>Configurações da Conta</title>
</head>
<body>

    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Model/configuracaoconta.php'); ?>
    
    <main class="total">
        <h1 class="titulo">Configurações da conta</h1>
        <form method='post'>
            <div class="conteudo">
                <p class="tituloconteudo"><?php echo $nome;?></p>
                <?php
                    echo $_SESSION['fotocam'];
                ?>
                    <div class="inputs">
                        <p class="titulosenha">Redefinição de senha:</p>
                        <div class="separacaoinput">
                            <div class="olho_center">
                                <input class="senha" type="password" placeholder='Senha atual' id="senhaatual" name='campo_senha' required  autocomplete='false' onblur="preenchido()" onchange="preenchido()">
                                <i class="bi bi-eye olho" id='eye_atual' onclick="mostrarSenha('eye_atual', 'senhaatual')"></i>
                            </div>
                            <div class="olho_center">
                                <input class="senha" type="password" placeholder='Nova senha' id="senha" name='campo_conf' autocomplete='false' onblur="senhaAltera()" onchange="senhaAltera()">
                                <i class="bi bi-eye olho" id='eye_conf' onclick="mostrarSenha('eye_conf', 'senha')"></i>
                            </div>
                            <div class="olho_center">
                                <input class="senha"  placeholder='Confirmação de senha' type="password" id="confirma" name="campo_conf"autocomplete='false' onblur="senhaAltera()"  onchange="senhaAltera()">
                                <i class="bi bi-eye olho" id='eye_confirma' onclick="mostrarSenha('eye_confirma', 'confirma')"></i>
                            </div>
                        </div>
                    </div>
                    <div class="diverror" id='div_error'>
                        <?php
                        if($verificador)  
                            echo '<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Senha atual não confere</p>';?>
                    </div>
                    <div class="linha"></div>
                    <div class="botoesconta">
                        <button type='submit' onclick="return confirm('Você realmente deseja excluir sua conta?\n\nEssa ação é irreversível')" name='apagarconta' class="buttonconta apagar">Apagar conta</button>
                        <a class="buttonconta" href='http://localhost/Projeto2025/SimLab/View/login.php'>Mudar de conta</a>
                    </div>
            </div>
            <div class="botoes">
                <button id='botao_conf' type='submit' name='save' class="buttontotal">Salvar Alteração</button>
                <a class="buttontotal" href='http://localhost/Projeto2025/SimLab/View/login.php'>Cancelar</a>
            </div>
        </form>
    </main>
    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/Projeto2025/SimLab/js/confconta.js"></script>

</body>
</html>