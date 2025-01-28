<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/tutorial.css">
    <title>SimLab</title>
</head>
<body>
    <main class="conteudotutorial" id='tutorialtotal'>
        <div class="totaltutorial">
            
            <div class="passo1">
                <div class="campo_fechar">
                    <h1 class="titulotutorial">Simulador Imunológico</h1>
                    <i class="bi bi-x X" name='fecha'></i>
                </div>
                <p class="tutorialtexto"> A tela principal do SimLab apresenta o simulador imunológico da vacinação contra o sarampo. Nele, você pode configurar todos as condições iniciais das populações do sistema imune, e os parâmetros do modelo, que incluem os eventos específicos da resposta imunológica induzida pela vacinação. Você deve dar um nome ou um código para a simulação,denominação que a identificará.
                </p>
                <div class="campoimg">
                    <img class="img" src="http://localhost/Projeto2025/SimLab/Assets/Tutorial1.png"><img>
                </div>
                <div class="botoestutorial">
                    <button class='botaotutorial' type="button" name='voltar'>Voltar</button>
                    <button class='botaotutorial' type="button" name='avancar'>Avançar</button>
                </div>
            </div>

            <div class="passo2 escondido_1">
            <div class="campo_fechar">
                    <h1 class="titulotutorial">
                        Resultado das simulações
                    </h1>
                    <i class="bi bi-x X" name='fecha'></i>
            </div>
                <p class="tutorialtexto"> Depois de preencher todos os campos, clique em "Gerar Simulação" para visualizar os gráficos dinâmicos, que representam a evolução temporal, pós vacinação, do vírus vacinal do sarampo e dos anticorpos produzidos.</p>
                <div class="campoimg">
                    <img class="img" src="http://localhost/Projeto2025/SimLab/Assets/Tutorial2.png"><img>
                </div>
                <div class="botoestutorial">
                    <button class='botaotutorial' type="button" name='voltar'>Voltar</button>
                    <button class='botaotutorial' type="button" name='avancar'>Avançar</button>
                </div>
            </div>
           <div class="passo3 escondido_1">
                <div class="campo_fechar">
                    <h1 class="titulotutorial">
                        Histórico
                    </h1>
                    <i class="bi bi-x X" name='fecha'></i>
                </div>
                <p class="tutorialtexto"> Após realizada uma simulação, as informações relativas a ela ficam salvas no histórico do usuário, identificada com o nome ou código dada a ela no passo anterior. As simulações podem ser visualizadas a qualquer momento, podendo também ser modificadas conforme necessário ou apagadas do histórico. Isso proporciona controle total sobre os dados visualizados.</p>
                <div class="campoimg">
                    <img class="img3" src="http://localhost/Projeto2025/SimLab/Assets/Tutorial3.png"><img>
                </div>
                <div class="botoestutorial">
                    <button class='botaotutorial' type="button" name='voltar'>Voltar</button>
                    <button class='botaotutorial' type="button" name='avancar'>Avançar</button>
                </div>
            </div>                            

            <div class="passo4 escondido_1">
                <div class="campo_fechar">
                    <h1 class="titulotutorial">Plano Premium</h1>
                    <i class="bi bi-x X" name='fecha'></i>
                </div>
                <p class="tutorialtexto"> Para ter acesso a funcionalidades extras, você pode assinar o plano premium individual. O sistema oferece planos semanal, mensal, semestral e anual. Feito o upgrade de plano, você pode realizar o download dos gráficos gerados pelas simulações e ter acesso à função de comparar simulações.</p>
                <div class="campoimg">
                    <img class="img" src="http://localhost/Projeto2025/SimLab/Assets/Tutorial4.png"><img>
                </div>
                <div class="botoestutorial">
                    <button class='botaotutorial' type="button" name='voltar'>Voltar</button>
                    <button class='botaotutorial' type="button" name='avancar'>Avançar</button>
                </div>
            </div>

            <div class="passo4 escondido_1">
                <div class="campo_fechar">
                    <h1 class="titulotutorial">Comparações</h1>
                    <i class="bi bi-x X" name='fecha'></i>
                </div>
                <p class="tutorialtexto">No menu lateral, você encontra o direcionamento para a página onde são realizadas as comparações. Na tela, você pode selecionar duas simulações contidas no seu histórico, e visualizar os gráficos gerados por elas lado a lado. Isso fornece a possibilidade de analisar diferentes cenários do comportamento da resposta imunológica frente à vacinação contra o sarampo.</p>
                <div class="campoimg">
                    <img class="img" src="http://localhost/Projeto2025/SimLab/Assets/Tutorial5.png"><img>
                </div>
                <div class="botoestutorial">
                    <button class='botaotutorial' type="button" name='voltar'>Voltar</button>
                    <button class='botaotutorial' type="button" name='avancar'>Fechar</button>
                </div>
            </div>     
        </div>
    </main>

    <div class="floating-element">
        <i class="bi bi-journal-check"></i>
        <p class = "texto_tutorial">Abrir Tutorial</p>
    </div>

    <script src="/Projeto2025/SimLab/js/tutorial.js"></script>

</body>
</html>