<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/estudos.css">
    <title>Sarampo</title>
</head> 

<body>
    <!-- ================ CABEÇALHO ================== -->
    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <main>

        <div class = "main">

            <h2 class = "titulo_pagina">Sarampo</h1>

            <div class = "sumario">
                <h3 class = "subtitulo_pagina">Sumário</h2>
                <ol class = "lista_sumario">
                    <li> <a class = "item_lista" href = '#id_item1'>O sarampo</a> </li>
                    <li> <a class = "item_lista" href = '#id_item2'>A vacina Tríplice viral (SCR)</a> </li>
                    <li> <a class = "item_lista" href = '#id_item3'>Vacinação de Sarampo no Brasil</a> </li>
                    <li> <a class = "item_lista" href = '#id_item4'>Referências</a> </li>
                    
                </ol>
            </div>

            <div class = "topicos">
                <ol>
                    <li class ="item" id = "id_item1"><h3 class = "titulo_item1">O sarampo</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo">O sarampo é uma doença aguda altamente transmissível causada por um vírus de RNA, pertencente ao gênero <i>Morbilivirus</i> e família <i>Paramyxoviridae</i>. Quando somos contaminados, o vírus se instala na mucosa do nariz e dos seios da face para se reproduzir, e depois vai para a corrente sanguínea. Para o vírus poder entrar no nosso organismo, existe um receptor (uma espécie de fechadura molecular) com o qual ele se conecta para possibilitar sua entrada. Porém, essa estrutura não se encontra no pulmão, como é de se esperar de um vírus respiratório, e sim nas células do sistema imunológico. </p><br>
                            <div class = "imagem_texto">
                                <img class = "graficoSIR" src="http://localhost/Projeto2025/SimLab/Assets/morbilivirus.jpg" alt="Gráfico 2 plotado do Modelo de Lotka-Volterra" width = "340" height = "220">

                                <p class = "legenda_imagem">Ilustração do vírus do sarampo. Crédito: R&A Studio/iStock</p>
                            </div>
                            <p class = "paragrafo">Dessa forma, o sarampo é uma infecção do sistema imunológico. O vírus do sarampo afetas as nossas células do sistema imune (timócitos, macrófagos, células dendríticas e linfócitos). Mas a contaminação se inicia nas vias aéreas, com os macrófagos e células dendríticas próximas dos alvéolos pulmonares. Essas estruturas são responsáveis pelas trocas gasosas no organismo e, a partir delas, a infecção é ampliada para todos os tecidos linfoides, infectando linfócitos, células dendríticas e epiteliais, e causando uma viremia.  </p><br>
                            <p class = "paragrafo">Além disso, o receptor com que o vírus do sarampo se conecta foi encontrado principalmente nas células de memória. A função dessas células é reconhecer os antígenos com os quais o organismo já teve contato antes e, assim, criar uma resposta imunológica mais rápida para combater a entrada de um micro-organismo. Portanto, o sarampo infecta as únicas células que são capazes de se lembrar do que o corpo já enfrentou antes.</p><br>

                            <h4 class = "subtitulo">Sintomas</h4><br>

                            <ul class = "lista_paragrafo">
                                <div class = "campo_lista_paragrafo">
                                    <div>
                                        <p class = "paragrafo">Os principais sinais e sintomas do sarampo são:</p><br>
                                        <li class = "paragrafo" id = >Exantema (manchas vermelhas) no corpo e febre alta (acima de 38,5°) acompanhada de um ou mais dos seguintes sintomas:</li><br>
                                        <li class = "paragrafo">Tosse seca;</li><br>
                                        <li class = "paragrafo">Irritação nos olhos (conjuntivite);</li><br>
                                        <li class = "paragrafo" >Nariz escorrendo ou entupido;</li><br>
                                        <li class = "paragrafo" >Mal-estar intenso;</li><br>
                                    </div>
                                    <div class = "imagem_texto">
                                        <img class = "graficoSIR" src="http://localhost/Projeto2025/SimLab/Assets/sintomasSarampojpeg.jpeg" alt="Gráfico 2 plotado do Modelo de Lotka-Volterra" width = "300" height = "180">

                                        <p class = "legenda_imagem">Surgimento de exantema (erupções cutâneas) pelo corpo.</p>
                                    </div>
                                </div>
                            </ul>
                            <p class = "paragrafo">Em torno de 3 a 5 dias, pode começar a aparecer manchas vermelhas (exantema) pelo rosto ou atrás das orelhas, que podem se espalhar pelo restante do corpo. Nesse período, podem ser observadas também, na parte interna da bocehcha, manchas brancas características da doença. Se a febre persistir após o aparecimento dessas manchas, pode indicar um alerta para a gravidade da infecção, sobretudo em crianças menores de 5 anos.</p><br>
                            <p class = "paragrafo">O sarampo é uma doença grave que pode deixar sequelas por toda a vida ou até mesmo causar a morte. Algumas complicações do sarampo são:</p><br>
                            <ul class = "lista_paragrafo">
                                <li class = "paragrafo">Em crianças:  Pneumonia (infecção no pulmão), infecção no ouvido e Encefalite aguda (inflamação do encéfalo).</li><br>
                                <li class = "paragrafo">Em adultos: Pneumonia.</li><br>
                                <li class = "paragrafo">Em gestantes: Parto prematuro, o bebê pode nascer com peso abaixo da média.</li><br>
                            </ul>
                            <p class = "paragrafo">Os principais sinais e sintomas do sarampo são:</p><br>

                            <h4 class = "subtitulo">Formas de transmissão</h4><br>
                            <p class = "paragrafo">O sarampo é transmitido através da penetração de gotículas contaminadas que entram em contato com as mucosas, especialmente de vias aéreas superiores, ou do contato direto de secreções eliminadas pelas vias aéreas de uma pessoa contaminada. </p><br>
                            <p class = "paragrafo">A transmissão pode ocorrer entre 6 dias antes e 4 dias após o aparecimento das manchas vermelhas pelo corpo.</p><br>
                            <h4 class = "subtitulo">Formas de prevenção</h4><br>
                            <p class = "paragrafo">O sarampo não tem um tratamento específico. Os medicamentos utilizados são somente para reduzir os sintomas causados por ele, e não para combater a doença. Podem ser prescritos, sob orientação médica, medicamentos para febre, hidratação oral, terapia nutricional com incentivo à amamentação materna e higiente dos olhos, da pele e das vias aéreas superiores.</p><br>
                            <p class = "paragrafo">A única forma de prevenir o sarampo é através da vacina da Tríplice viral, que combate o sarampo, a rubéola e a caxumba.</p><br>

                        </div>
                    </li>
                    <li class ="item" id = "id_item2"> <h3 class = "titulo_item2">A vacina Tríplice viral (SCR)</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo"> A vacina tríplice viral, incluída no calendário de vacinação em 1992, é formada por vírus vivos atenuados (enfraquecidos)  do sarampo, da caxumba e da rubéola, e é apresentada sob a forma liofilizada, em frascos de dose única ou multidoses, acompanhada do respectivo diluente. A vacina é altamente imunogênica, conferindo proteção de 98% contra sarampo, 99,3% contra rubéola e 96,1% contra caxumba.</p><br>

                            <div class = "imagem_texto">
                                <img class = "graficoSIR" src="http://localhost/Projeto2025/SimLab/Assets/vacina.jpg" alt="Gráfico 2 plotado do Modelo de Lotka-Volterra" width = "160" height = "150">

                                <p class = "legenda_imagem">Frascos da vacina da Tríplice Viral</p>
                            </div>

                            <p class = "paragrafo" >No Brasil, o Programa Nacional de Imunizações (PNI) preconiza que a  vacina deve ser administrada em duas doses por via subcutânea. A primeira deve ser aplicada a partir dos 12 meses de idade e a segunda aos 15 meses de idade, com a vacina Tetraviral, com um intervalo de 30 dias entre as doses.</p><br>
                            <ul class = "lista_paragrafo">
                                <li class = "paragrafo">Todas as pessoas nascidas a partir de 1960 com 30 anos ou mais de idade devem receber 1 dose de SCR (sarampo, caxumba e rubéola).</li><br>
                                <li class = "paragrafo">Todas as pessoas até 29 anos, 11 meses e 29 dias deverão receber duas doses de vacina SCR.</li><br>
                            </ul>
                            <p class = "paragrafo" >A vacina tríplice viral usada pelo PNI é uma preparação mista liofilizada das cepas de vírus atenuados de sarampo (cepa Schwarz), caxumba (cepa RIT 4385 derivada da cepa Jeryl Lynn) e rubéola (cepa Wistar RA 27/3).</p><br>
                            <p class = "paragrafo" >A vacina contra o sarampo existe nas seguintes apresentações:</p><br>
                            <ul class = "lista_paragrafo">
                                <li class = "paragrafo">Monovalente (usada no início dos anos 1970) e atualmente não mais recomendada</li><br>
                                <li class = "paragrafo">Combinada com rubéola (vacina dupla viral)</li><br>
                                <li class = "paragrafo">Combinada com caxumba e rubéola (vacina tríplice viral)</li><br>
                                <li class = "paragrafo">Combinada com rubéola, caxumba e varicela (vacina tetraviral). </li><br>
                            </ul>
                        </div>
                    </li>
                    <li class ="item" id = "id_item3"> <h3 class = "titulo_item3">Vacinação de Sarampo no Brasil</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo" >Existe no Brasil, o Programa Nacional de Imunizações (PNI), criado em 1973 pelo Ministério da Saúde, que tem como objetivo coordenar as ações de imunizações nos serviços de saúde, tentar alcançar as coberturas vacinais e erradicar ou controlar diversas doenças. Porém, ainda existe no Brasil uma enorme defasagem quando o assunto é vacinação e o alcance completo da cobertura vacinal, sobretudo ao se tratar do Sarampo.</p><br>
                            <p class = "paragrafo" ><b>Em 2016, o Brasil recebeu o certificado de erradicação do Sarampo em território Nacional. No entanto, poucos anos depois, em 2018, o país começou a enfrentar um ressurgimento da doença, fazendo com que o certificado fosse retirado em 2019.</b> Esse fenômeno está muito relacionado ao crescimento de grupos anti-vacinas que negam as vacinas por receio aos eventos adversos pós vacinação, e à circulação de informações sem fundamentos sobre saúde pública. Apesar das comprovações científicas que afirmam a eficácia das vacinas na diminuição da mortalidade por doenças infectocontagiosas, ainda existem questionamento da segurança e necessidade das vacinas.</p><br>
                            <p class = "paragrafo" >Até 2014, todas as regiões brasileiras apresentavam cobertura vacinal da primeira dose da vacina tríplice viral acima de 95%. Porém,<b> a partir de 2015, as coberturas começaram a decair e, após 2016, nenhuma região atingiu a meta de 95%.</b> Entre 2011 e 2021, houve uma queda nas coberturas vacinais em todas as Unidades Federativas, especialmente no Amazonas, Pará, Ceará, Pernambuco e São Paulo, contribuindo para o retorno da doença ao Brasil. Dados do Ministério da Saúde mostram que, entre 2018 a 2022, foram confirmados 9.325, 20.901, 8.100, 676 e 44 casos de sarampo no Brasil, respectivamente. </p><br>
                            <p class = "paragrafo" >A eliminação do sarampo exige forças globais, que vão além do setor de saúde, de forma a fortalecer os sistemas de saúde e criar inovações tecnológicas para superar as barreiras de acesso à vacina, e para aumentar a confiança nesses imunizantes. Nesse sentido, é evidente que mais estudos sobre o sarampo e a vacinação são necessários. O nosso projeto, dentro da área de modelagem computacional, é uma dessas formas, possibilitando a simulação da resposta imunológica à vacinação do sarampo.</p><br>
                        </div>
                    </li>
                    <li class ="item" id = "id_item4"> <h3 class = "titulo_item4">Referências</h3>
                        <div class = "conteudo_item">
                            <ul class = "lista_paragrafo">
                                <li class = "paragrafo">GORVETT, Zaria. Por que é essencial se proteger do sarampo, doença que causa amnésia imunológica. 2022. Disponível em:  <a class="links_paragrafo" href="https://www.bbc.com/portuguese/vert-fut-59770418#:~:text=Primeiro%2C%20o%20v%C3%ADrus%20do%20sarampo,ca%C3%A7ando%20c%C3%A9lulas%20de%20mem%C3%B3ria%20infectadas">Clique Aqui!</a>. Acesso em: 1 maio 2024.</li><br>
                                <li class = "paragrafo"> SAUDE, Ministério da. Sarampo. 2022. Disponível em: <a class="links_paragrafo" href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/s/sarampo#:~:text=Sarampo é uma doença infecciosa,respira próximo de outras pessoas.">Clique Aqui! </a> Acesso em: 6 maio 2024.</li><br>
                                <li class = "paragrafo">Ministério da Saude. Sarampo: sintomas, prevenção, causas, complicações e tratamento. 2022. Disponível em: <a class="links_paragrafo" href="https://bvsms.saude.gov.br/sarampo-sintomas-prevencao-causas-complicacoes-e-tratamento/#:~:text=O sarampo não tem tratamento,provocado pelos sintomas da doença"> Clique Aqui!</a> Acesso em: 6 maio 2024. </li><br>
                                <li class = "paragrafo">PETRAGLIA, Tânia Cristina de Mattos Barros; FARIAS, Paula Molinari Cardoso de Mello; SÁ, Glória Regina Silva e; SANTOS, Eliane Matos dos; CONCEIÇÃO, Deborah Araújo da; MAIA, Maria de Lourdes de Sousa. Falhas vacinais: avaliando vacinas febre amarela, sarampo, varicela e caxumba. Cadernos de Saúde Pública, [S.L.], v. 36, n. 2, p. 1-14, 6 jul. 2020. FapUNIFESP (SciELO). <a class="links_paragrafo" href="http://dx.doi.org/10.1590/0102-311x00008520."> Clique Aqui!</a></li><br>
                                <li class = "paragrafo">SATO, Ana Paula Sayuri; BOING, Alexandra Crispim; ALMEIDA, Rosa Livia Freitas de; XAVIER, Mariana Otero; MOREIRA, Rafael da Silveira; MARTINEZ, Edson Zangiacomi; MATIJASEVICH, Alicia; DONALISIO, Maria Rita. Vacinação do sarampo no Brasil: onde estivemos e para onde vamos?. Ciência & Saúde Coletiva, [S.L.], v. 28, n. 2, p. 351-362, fev. 2023. FapUNIFESP (SciELO). <a class="links_paragrafo" href="http://dx.doi.org/10.1590/1413-81232023282.19172022">Clique Aqui!</a>.</li><br>
                                <li class = "paragrafo"> PEIXOTO, Maria Eduarda Guedes; NEVES, Ana Cláudia Ferreira; AGUIAR, Marina Cavalcanti Rodrigues de; FONSECA, Letícia Soares; MATIOLI, Luísa de Moura; BHERING, Carlos Alberto. A REEMERGÊNCIA DO SARAMPO NO BRASIL: FALHA DA COBERTURA VACINAL: the reemergence of measles in brazil: failure of vaccine coverage. Revista Ibero-Americana de Humanidades, Ciências e Educação, São Paulo, v. 8, n. 07, p. 1-11, jul. 2022.</li><br>
                                <li class = "paragrafo"> CHAVES, Elem Cristina Rodrigues; TRINDADE JÚNIOR, Kleber das Neves; ANDRADE, Beatriz Fernanda Fernandes de; MENDONÇA, Maria Helena Rodrigues de. Avaliação da cobertura vacinal do sarampo no período de 2013-2019 e sua relação com a reemergência no Brasil. Revista Eletrônica Acervo Saúde, [S.L.], n. 38, p. 1-16, 31 jan. 2020. Revista Eletronica Acervo Saude. <a class="links_paragrafo" href="http://dx.doi.org/10.25248/reas.e1982.2020.">Clique Aqui!</a></li><br>
                            </ul>
                        </div>
                    </li>

                </ol>
            </div>
            
        </div>

    </main>

    <!-- ================ RODAPÉ ================== -->
    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>