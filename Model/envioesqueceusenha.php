<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('/xampp/htdocs/Projeto2025/SimLab/Model/banco.php');

$erroEmail = false;

if (isset($_POST['enviar'])) 
{
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // Verifica se o e-mail existe no banco de dados
        $sql = $pdo->prepare("SELECT COUNT(email) FROM usuario WHERE email = ?;");
        $sql->execute([$_POST['email']]);
        $qnt = $sql->fetchColumn();

        if ($qnt == 1) {
            // Gera o código de verificação
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $num4 = rand(0, 9);
            $num5 = rand(0, 9);
            $num6 = rand(0, 9);
            $verificar = "$num1$num2$num3$num4$num5$num6";
            $_SESSION['verificar'] = $verificar;

            // Obtém o nome do usuário
            $sql = $pdo->prepare("SELECT nome FROM usuario WHERE email = ?;");
            $sql->execute([$_POST['email']]);
            $User = $sql->fetchColumn();

            $_SESSION['emailverificar']=$_POST['email'];

            // Configura e envia o e-mail
            require 'C:/xampp/htdocs/Projeto2025/SimLab/View/vendor/autoload.php';

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mail.simlab.linceonline.com.br';
            $mail->SMTPAuth = true;
            $mail->Username = 'contato@simlab.linceonline.com.br';
            $mail->Password = 'ODcFAK74a;xp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('contato@simlab.linceonline.com.br', 'SimLab');
            $mail->addAddress($_POST['email'], $User);
            $mail->isHTML(true);
            $mail->Subject = 'Recuperação de senha';

            $mail->Body = "
                <html>
                <head>
                    <style>
                        body { background-color: #404040; color: #fff; font-family: 'Actor', sans-serif; text-align: justify; margin: 0; padding: 0; }
                        .container { display: table; width: 100%; height: 100vh; text-align: center; background-color:#404040; }
                        .content { display: table-cell; vertical-align: middle; }
                        .logo { width: 100px; height: 100px; }
                        .message { width: 80%; font-size: 16px; line-height: 1.5; margin: 0 auto; color:#fff; text-align: justify; }
                        .code { font-size: 24px; color: #fff; }
                        .footer { width: 80%; background-color: #5a5a5a; border-radius: 10px; padding: .5rem; margin: 1rem auto; color:#fff; text-align: justify; }
                        .footer p { line-height: 1.5; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='content'>
                            <img class='logo' src='https://simlab.linceonline.com.br/Assets/icon.png' alt='logo'>
                            <p class='message'>Olá $User, identificamos um pedido de recuperação de senha na sua conta. Se foi você, utilize o código abaixo para autorizar o pedido na tela de verificação. Caso não tenha sido você, desconsidere esse e-mail e não compartilhe o código.</p>
                            <span class='code'><br><b>$verificar</b></span><br><br>
                            <div class='footer'>
                                <p><b>Abraços,<br>Equipe SimLab</b><br><br>Por favor, pedimos que você não responda esse e-mail, pois se trata de uma mensagem automática.</p>
                            </div>
                        </div>
                    </div>
                </body>
                </html>";

            $mail->AltBody = "Olá $User, identificamos um pedido de recuperação de senha na sua conta. Se foi você, utilize o código abaixo para autorizar o pedido na tela de verificação. Caso não tenha sido você, desconsidere esse e-mail e não compartilhe o código. Código: $verificar";

            $mail->send();

            echo '<script type="text/javascript">
            window.location.href = "http://localhost/Projeto2025/SimLab/View/esqueciasenha2.php";
            </script>';
        } else {
            $erroEmail = true;
        }
    }
}
?>
