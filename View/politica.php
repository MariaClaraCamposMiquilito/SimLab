<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/termos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Politica de Privacidade</title>
</head>
<body>
    <header>
        <div class = "go_back">
            <i class="bi bi-arrow-left" onclick="voltarPagina()"></i>
        </div>

        <script>
        function voltarPagina() {
            history.back();
        }
        </script>

        <div class = "cabecalho">
            <div class = "campo_imagem">
                <img src="http://localhost/Projeto2025/SimLab/Assets/icon.png" alt="logo" width="110" height="110">
                <p class = "simlab">SimLab</p>
            </div>
            <div class = "direcionamento_termos">
                <a class = "botao_direcionamento" href = "http://localhost/Projeto2025/SimLab/View/login.php"><i class="bi bi-person-fill-add"></i>Comece agora a utilizar o SimLab</a>
            </div>
        </div>
    </header>
    
    <div class="conteudo_total">
        <div class = "apresentacao">
            <h2 class = "titulo_cabecalho">Política de Privacidade</h2>

            <ol class = "lista">
                <li> <p class = "item_lista" >Informações Coletadas:</p> <p class = "texto_lista">Nosso sistema coleta as seguintes informações dos usuário
                <ul class = "sublista">
                        <li class = "item_sublista"><b>Nome Completo: </b>O nome completo do usuário.</li>
                        <li class = "item_sublista"><b>Nome de Usuário: </b>Um nome único que será utilizado para identificação no sistema.
                        </li>
                        <li class = "item_sublista"><b>E-mail: </b>Um endereço de e-mail válido, que será utilizado para comunicação e recuperação de senha.
                        </li>
                        <li class = "item_sublista"><b>Formação Acadêmica: </b>Informações sobre a formação acadêmica do usuário (opcional).</li>
                        <li class = "item_sublista"><b>Data de nascimento: </b>A data de nascimento do usuário.</li>
                        <li class = "item_sublista"><b>Senha:  </b>Uma senha segura, que será utilizada para autenticação.
                        </li>
                    </ul></p> </li>
                <li> <p class = "item_lista" >Uso das Informações:</p> <p class = "texto_lista"> As informações coletadas são utilizadas para:
                    <ul class = "sublista">
                        <li class = "item_sublista">Garantir a segurança e funcionamento adequado do sistema;
                        </li>
                        <li class = "item_sublista">Entrar em contato com os usuários em caso de atualizações, mudanças ou comunicações necessárias sobre o sistema;
                        </li>
                        <li class = "item_sublista">Proteger a segurança e prevenir fraudes, garantindo que nossos serviços sejam seguros, protegidos e usados de acordo com nossos <a class = "link_termos">Termos de Uso</a>.
                        </li>
                        
                    </ul></p> </li>
        
                <li> <p class = "item_lista" >Histórico de Simulações:</p> <p class = "texto_lista">Os dados referentes às simulações realizadas pelos usuários são de sua propriedade exclusiva. O acesso ao histórico de simulações é restrito ao próprio usuário, e os administradores do sistema não têm autorização para divulgar, vender ou compartilhar essas informações. Cada usuário pode visualizar e consultar somente as suas próprias simulações.
                </p> </li>
                <li> <p class = "item_lista" >Compartilhamento de Informações:</p> <p class = "texto_lista">Não compartilhamos informações pessoais ou empresariais com terceiros, exceto quando exigido por lei ou para cumprir uma obrigação legal. O sistema não comercializa, aluga ou vende dados de seus usuários.</p></li>
                <li> <p class = "item_lista" >Armazenamento e Proteção de Dados:</p>Os dados coletados são armazenados de forma segura, utilizando práticas de segurança apropriadas para proteger contra acessos não autorizados, perda ou alteração de dados. No entanto, nenhum sistema de segurança é infalível, e não podemos garantir a proteção total das informações armazenadas.</p></li>
                <li> <p class = "item_lista" >Direitos dos Usuários:</p> <p class = "texto_lista">Os usuários têm o direito de:

                    <ul class = "sublista">
                        <li class = "item_sublista">Acessar e corrigir suas informações pessoais a qualquer momento;
                        </li>
                        <li class = "item_sublista">Solicitar a exclusão de seus dados, exceto quando houver obrigações legais que impeçam a exclusão;
                        </li>
                        <li class = "item_sublista">Acessar e consultar exclusivamente o seu próprio histórico de simulações, sem a possibilidade de acesso às simulações de outros usuários.
                        </li>
                    </ul>
                    </p></li>
                <li> <p class = "item_lista" >Alterações na Política de Privacidade:</p> <p class = "texto_lista">Podemos alterar esta Política de Privacidade a qualquer momento, sendo que os usuários serão informados sobre tais mudanças. O uso continuado do sistema após as alterações implica na aceitação da nova política.

                </p> </li>
                <li> <p class = "item_lista" >Contato:</p> <p class = "texto_lista"> Caso tenha dúvidas sobre a nossa Política de Privacidade ou deseje exercer seus direitos, entre em contato conosco pelo e-mail contato@simlab.linceonline.com.br

                </p></li>
                </li>
            </ol>
        </div> 
    </div><br><br>
    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

</body>
</html>