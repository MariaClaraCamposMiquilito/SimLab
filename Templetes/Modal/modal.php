<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/modal.css">
    <title>Upgrade de plano</title>
</head>
<body> 
    <div id = "fadeModalPremium" class = "hideModalPremium"></div>
        <div id = "modalPremium" class = "hideModalPremium">
            <div class = "modal_header">
                <div class = "titulo_modal_header">
                    <h2 class = "titulo_header">Faça upgrade do seu plano</h2>
                    <i class="bi bi-stars" id = "estrelas"></i>
                </div>
                <i class="bi bi-x close" id = "closeModalPremium"></i>
            </div>
        
            <div class = "modal_body"> 
                <div class = "modal_body_header">
                    <div class = "campo_texto">
                        <i class="bi bi-check" id = "check"></i>
                        <p class = "texto_header"><b>Comparação dos gráficos gerados pelas simulações realizadas anteriormente</b></p>
                    </div>
                    <div class = "campo_texto">
                        <i class="bi bi-check" id = "check"></i>
                        <p class = "texto_header"><b>Download dos gráficos gerados pelas simulações</b></p>
                    </div>
                </div>
                
                <h2 class = "texto_header"><b>Escolha o melhor plano para você!!</b></h2>

                <div class = "modal_body_body">

                    <div class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Semanal</p>
                        <p class = "subtitulo_modal_body_div">7 dias</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">19,90</p>
                    </div>

                    <div class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Mensal</p>
                        <p class = "subtitulo_modal_body_div">30 dias</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">39,90</p>
                    </div>

                    <div class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Semestral</p>
                        <p class = "subtitulo_modal_body_div">6 meses</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">169,90</p>
                    </div>

                    <div class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Anual</p>
                        <p class = "subtitulo_modal_body_div">12 meses</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">336,50</p>
                    </div>
                </div>
                <div class = "campo_contato_premium"> 
                    <i class="bi bi-shield-fill-exclamation"></i>
                    <p id = "contato_premium">Para acessar os benefícios exclusivos do Plano Premium, é necessário realizar a assinatura diretamente conosco. Pedimos que entre em contato por meio do e-mail<a id = "email_premium" href="https://mail.google.com/mail/?view=cm&fs=1&to=contato@simlab.linceonline.com.br"> contato@simlab.linceonline.com.br</a></p>
                </div>
                
            </div>
        </div>
        <script src="/Projeto2025/SimLab/js/modal.js"></script>

</body>
</html>