<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="total fechado" id='totalmenu'>
        <div class="setamenu seta_fechada">
            <i class="bi bi-caret-right-fill setinha"></i>
        </div>

        <ul class="lista_">
            <div class="campo_lista">

                <div class="campo_item_lista">
                    <li  id='botao' class="item_menu escondido_botao">
                        <a name = "open_modal" href="#">
                            <span class="icon">
                                <i class="bi bi-file-earmark-check-fill"></i>
                            </span>
                            <span name='links' id='comparar' class="txt_link escondido1">Comparar</span>
                        </a>
                    </li>
                </div>
                

                <div class="menu_historico">
                    <p class="titulo_historico">Hoje</p>
                    <div class="divisao_lista_historico">
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Viremia Vacinal</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Anticorpos teste unidade</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Vacinação sarampo teste</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
                    </div>
                </div>
<!--
                    <div class="menu_historico">
                        <p class="titulo_historico">Ontem</p>
                        <ul class="lista_historico">
                            <div class="divisao_lista_historico">
                                <div class="icones_item_lista">
                                    <li><a class="grafico_historico" href="#">Gráfico 1</a></li>
                                    <i class="bi bi-trash3-fill icon_historico"></i>
                                </div>
                                <div class="icones_item_lista">
                                    <li><a class="grafico_historico" href="#">Gráfico 1</a></li>
                                    <i class="bi bi-trash3-fill icon_historico"></i>
                                </div>
                                <div class="icones_item_lista">
                                    <li><a class="grafico_historico" href="#">Gráfico 1</a></li>
                                    <i class="bi bi-trash3-fill icon_historico"></i>
                                </div>
                            </div>
                        </ul>
                    </div>-->

                <div class="menu_historico">
                    <p class="titulo_historico">Semana passada</p>
                    <div class="divisao_lista_historico">
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Anticorpos 365 dias</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Viremia sarampo 30 dia</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>s
                        </div>
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Teste cepa virus sarampo</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
                    </div>
                </div>

                <div class="menu_historico">
                    <p class="titulo_historico">Anteriores</p>
                    <div class="divisao_lista_historico">
                        <div class="icones_item_lista">
                            <a class="grafico_historico" href="#">Evolução viremia</a>
                            <i class="bi bi-trash3-fill icon_historico"></i>
                        </div>
<!--
                                <div class="icones_item_lista">
                                    <li><a class="grafico_historico" href="#">Gráfico 1</a></li>
                                    <i class="bi bi-trash3-fill icon_historico"></i>
                                </div>

                                <div class="icones_item_lista">
                                    <li><a class="grafico_historico" href="#">Gráfico 1</a></li>
                                    <i class="bi bi-trash3-fill icon_historico"></i>
                                </div>
                            </div>-->
                    </div>
                </div> 
                <!-- Plano com assinatura --> 
                <div class="assinatura fechado_assinatura" name = "open_modal1">
                    <i class="bi bi-stars"></i>
                    <a class="campo_assinatura escondido1">Fazer upgrade de plano</a>
                </div>
            </div>
        </ul>
<!--=================TELA DE UPGRADE==================-->
        <div id = "fade" class = "hide"></div>
        <div id = "modal" class = "hide">
            <div class = "modal_header">
                <div class = "titulo_modal_header">
                    <h2 class = "titulo_header">Faça upgrade do seu plano</h2>
                    <i class="bi bi-stars estrelas"></i>
                </div>
                <i class="bi bi-x close" id = "close_modal"></i>
            </div>
        
            <div class = "modal_body"> 
                <div class = "modal_body_header">
                    <div class = "campo_texto">
                        <i class="bi bi-check"></i>
                        <p class = "texto_header"><b>Comparação dos gráficos gerados pelas simulações realizadas anteriormente</b></p>
                    </div>
                    <div class = "campo_texto">
                        <i class="bi bi-check"></i>
                        <p class = "texto_header"><b>Download dos gráficos gerados pelas simulações</b></p>
                    </div>
                </div>
                
                <h2 class = "texto_header"><b>Escolha o melhor plano para você!!</b></h2>

                <div class = "modal_body_body">

                    <a href = "#" class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Semanal</p>
                        <p class = "subtitulo_modal_body_div">7 dias</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">30,00</p>
                    </a>

                    <a href = "#" class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Mensal</p>
                        <p class = "subtitulo_modal_body_div">30 dias</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">30,00</p>
                    </a>

                    <a href = "#" class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Semestral</p>
                        <p class = "subtitulo_modal_body_div">6 meses</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">30,00</p>
                    </a>

                    <a href = "#" class = "modal_body_divisao">
                        <p class = "titulo_modal_body_div">Plano Anual</p>
                        <p class = "subtitulo_modal_body_div">12 meses</p>
                        <p class = "cifrao">R$</p>
                        <p class = "valor">30,00</p>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <script src="/Projeto2025/SimLab/js/menu.js"></script>
    <script src="/Projeto2025/SimLab/js/modal.js"></script>
</body>
</html>
