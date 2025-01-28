<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/estudos.css">
    <title>Modelagem computacional</title>
</head>

<body>
    <!-- ================ CABEÇALHO ================== -->
    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <main>

        <div class = "main">
            
            <h2 class = "titulo_pagina">Modelagem Computacional</h1>


            <div class = "sumario">
                <h3 class = "subtitulo_pagina">Sumário</h2>
                <ol class = "lista_sumario">
                    <li> <a class = "item_lista" href = '#id_item1'>Modelagem computacional e os modelos matemáticos</a> </li>
                    <li> <a class = "item_lista" href = '#id_item2'>Modelo SIR</a> </li>
                    <li> <a class = "item_lista" href = '#id_item3'>Modelo Lotka-Volterra</a> </li>
                    <li> <a class = "item_lista" href = '#id_item4'>Nosso modelo</a> </li>
                    <li> <a class = "item_lista" href = '#id_item5'>Referências</a> </li>

                </ol>
            </div>

            <div class = "topicos">
                <ol>
                    <li class ="item" id = "id_item1"> <h3 class = "titulo_item1">O que é modelagem computacional?</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo" >Modelos são formas simplificadas de representar qualquer tipo de fenômeno.<b> Assim, modelos computacionais são aqueles codificados em linguagem computacional, a fim de simular o fenômeno e entendê-lo, a partir da execução do código no computador.</b> A modelagem computacional é um dos pilares do desenvolvimento científico atual. Sem ela, é praticamente impossível elaborar soluções para problemas complexos advindos das mais diversas áreas do conhecimento, como Física, Química e Biologia.</p><br>
                            <p class = "paragrafo" >Basicamente, esses modelos podem ser criados manualmente por especialistas a partir de equações matemáticas, usadas para traduzir de alguma forma o fenômeno em questão. Portanto, a modelagem computacional aliada aos modelos matemáticos são amplamente utilizados em pesquisas científicas, para analisar e simular o evento sob estudo.</p><br>
                            <p class = "paragrafo" >Para maior entendimento do assunto abordado, vão ser abordados nos tópicos seguintes dois modelos matemáticos amplamente usados e conhecidos: o modelo SIR e o modelo de Lotka-Volterra.</p>
                        </div>
                        
                    </li>
                    <li class ="item" id = "id_item2"> <h3 class = "titulo_item2">Modelo SIR</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo" >O modelo SIR é um modelo matemático que simula a propagação de doenças contagiosas. Ele pode ser aplicado no estudo da propagação de doenças como gripe, dengue e a AIDS, na previsão de ocorrência ou não de uma epidemia numa população e na identificação da disseminação de uma doença.</p><br>
                            <p class = "paragrafo" >Proposto por  Kermack e McKendrick (1927), o modelo SIR foi originalmente para direcionado para explicar matematicamente o rápido crescimento e a queda súbita do número de pacientes infectados pela peste bubônica, durante a epidemia ocorrida na Índia, entre 1905 e 1906.</p><br>
                            <p class = "paragrafo" >O modelo SIR caracteriza a estado do indivíduo ao longo do desenvolvimento de uma doença, relacionando esses estágios com um sistema não linear de equações diferenciais. A população é dividida em três grupos disjuntos: os Suscetíveis (S), os infectados (I) e os removidos (R), em que cada indivíduo pode ocupar apenas uma classe, mas pode se mover de uma para outra ao passar do tempo.</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<i>S</i> = Indivíduos não infectados e estão suscetíveis para contrair a doença;</p><br>
                            <!--S = Indivíduos não infectados e estão suscetíveis para contrair a doença;-->
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<i>I</i> = Indivíduos que contraíram a doença e podem transmiti-la;</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<i>R</i> = Indivíduos que contraíram a doença e morreram, ou que adquiriram imunidade, não podendo haver reinfecções.</p>

                            <div class = "imagem_texto">
                                <img class="equacoesSIR"id='equacoesSIR' src="http://localhost/Projeto2025/SimLab/assets/equacoesSIR.png" alt="Sistema de equaçãoes diferencias do modelo SIR">
                                <p class = "legenda_imagem"><b>Sistema não linear de equações diferenciais do Modelo SIR</b><p>
                            </div>
                            
                            <p class = "paragrafo" >O contexto de funcionamento do modelo é o seguinte: uma ou mais pessoas infectadas são introduzidas em uma população suscetível à doença em questão. Assim, por meio do contato de um infectado com um suscetível, a doença vai sendo disseminada para a resto dos indivíduos. Cada pessoa infectada passa pelo curso da doença, e, por fim, vai ser removida da população sob estudo por recuperação ou por morte. A epidemia da doença pode acabar por dois motivos. Ou todos os indivíduos suscetíveis foram removidos, ou, ao decorrer do tempo da epidemia, a virulência do organismo causador tenha gradualmente reduzido.</p><br>
                            
                            <h4 class = "subtitulo">Descrição do modelo</h4><br>

                            <p class = "paragrafo" >Consideramos que a quantidade de indivíduos da população seja constante e igual a N. Dessa forma, no instante t, cada classe da população é dada por 𝑆(𝑡), 𝐼(𝑡) e 𝑅(𝑡), tais quais <br><br>&nbsp;&nbsp;&nbsp; 𝑁(𝑡) = 𝑆(𝑡) + 𝐼(𝑡) + 𝑅(𝑡),<br><br>sabendo que a taxa de variação da população ao longo do tempo é zero.</p><br>
                            <p class = "paragrafo" >𝛽 e Υ são as taxas de infecção e de remoção, respectivamente, ambas maiores do que zero</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>1)</b> A variação de suscetíveis ao longo do tempo (𝑑𝑆(𝑡)/𝑑𝑡) é proporcional ao contato deles com os infectados (−𝛽𝑆I). O termo é negativo, pois indivíduos saem da classe S e entram na classe I.</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>2)</b> A variação de infectados ao longo do tempo é a diferença entre a quantidade de novos indivíduos infectados (𝛽𝑆𝐼) e a parcela que foi removida (𝛾I).</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>3)</b> A variação de removidos ao longo do tempo é proporcional à quantidade de infectados que morreram ou que adquiriram imunidade (𝛾I).</p>
                            
                            <div class = "imagem_texto">
                                <img class="graficoSIR"id='graficoSIR' src="http://localhost/Projeto2025/ModeloSIR/Gráficos/GraficoSIR.png" alt="Gráfico plotado do Modelo SIR">

                                <p class = "legenda_imagem"><b>Gráfico plotado a partir da modelagem computacional do modelo SIR pela equipe do SimLab.</b></p><br>

                            </div>

                            
                            <p class = "paragrafo" >O gráfico em questão representa visualmente a relação das equações previamente explicadas. No instante 0 (início da epidemia), a  população de suscetíveis é máxima, e a de infectados e de removidos é nula. Porém, a partir do momento que começam a ser introduzidos infectados na comunidade sob estudo, o número de suscetíveis começa a decair, e o de removidos começa a crescer, pois os indivíduos estão morrendo com a doença ou adquirindo imunidade. Dessa forma, quando o número de infectados chega no máximo, há uma inversão nas curvas de R e de S, ou seja, os removidos superam a quantidade de suscetíveis. E quando não há mais infecções pela doença, todas as curvas atingem um equilíbrio e se tornam constantes. </p><br>
                        </div>
                    </li>

                    <li class ="item" id = "id_item3"> <h3 class = "titulo_item3">Modelo de lotka-Volterra</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo" >O modelo de Lotka-Volterra foi desenvolvido em 1926, pelo matemático e físico Vito Volterra (1860-1940), que propôs um modelo simples para a predação que explicava, primeiramente, os níveis da captura de certos peixes no Mar Adriático.</p><br>
                            <p class = "paragrafo" >Nos ecossistemas, quando duas espécies diferentes interagem, a dinâmica populacional de cada uma dessas espécies é afetada de alguma forma. Essa interação pode ser classificada de três maneiras: (i) simbiose ou mutualismo, quando ambas as espécies são beneficiadas com a presença uma da outra; (ii) competição, quando ambas as espécies são afetadas negativamente pela presença da outra; (iii)  predação, quando uma das espécies (predador) se beneficia com a presença da outra (presa), mas a taxa de crescimento da presa é afetada negativamente pela presença do predador.</p><br>
                            <p class = "paragrafo" >O modelo de Lotka-Volterra expressa a relação entre duas espécies, onde uma das espécies (o predador) se alimenta da outra (a presa), enquanto essa, se alimenta de outro tipo de suprimento disponível no ambiente.</p><br>
                            <p class = "paragrafo" >É de extrema importância ressaltar que o modelo não descreve a dinâmica depredação de forma precisa, uma vez que é uma relação de grande complexidade. Ela depende de uma série de outros fatores externos, tais como os fenômenos naturais e a intervenção do próprio homem na natureza. No entanto, isso não anula o fato de que o modelo, mesmo sendo considerado simples, é ainda um passo importante para a compreensão dos ecossistemas. </p><br>
                            <p class = "paragrafo" >Portanto, a modelagem matemática do modelo de Lotka-Volterra, pode contribuir decisivamente para a tomada de decisões na área de descrição e de controle de uma situação de predação. Em outras palavras, pode-se, através de modelos, estudar os fatores que podem contribuir para que o sistema volte ao equilíbrio ou mesmo desestabilizá-lo, em caso de necessidade</p><br>

                            <h4 class = "subtitulo">Descrição do modelo</h4><br>

                            <p class = "paragrafo" >O modelo é expresso por duas equações diferenciais ordinárias não lineares de 1° ordem,</p>

                            <div class = "imagem_texto">
                                <img class="equacoesLokta"id='equacoesLokta' src="http://localhost/Projeto2025/SimLab/assets/equacoesLotka.png" alt="Equações lokta-Volterra">

                                <p class = "legenda_imagem">Sistema de equações diferenciais ordinárias não lineares de 1° ordem do modelo de Lotka-Volterra</p>
                            </div>

                            <p class = "paragrafo" >em que a representa a taxa de crescimento da população de presas na ausência de predadores, c é a taxa de mortalidade da população de predadores na ausência de presas, α é a taxa de decréscimo da população de presas em virtude da interação com os predadores e β é a taxa de crescimento populacional dos predadores em razão da predação</p><br>
                            <p class = "paragrafo" >Para a representação matemática do Modelo de Lotka-Volterra, considerando x(t) e y(t) as densidades de presas e predadores, respectivamente, fazem-se inicialmente as seguintes hipóteses:</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>1)</b> Na ausência de predadores, a população de presas aumenta a uma taxa proporcional à população atual. Assim, dx/dt = ax, a > 0 quando y = 0.</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>2)</b> Na ausência de presas, a população de predadores irá à extinção, pois, estas são sua única fonte de alimento. Logo, dy/dt = −cy, c > 0 quando x = 0.</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>3)</b> O número de encontros entre predadores e presas é proporcional ao produto das duas populações, ou seja, ao produto xy. Esses encontros tendem a ser benéficos à população de predadores e inibem o crescimento da população de presas.</p><br>
                            <p class = "paragrafo" >&nbsp;&nbsp;&nbsp;<b>4)</b> A taxa de crescimento da população de predadores é aumentada por um termo da forma βxy, e a taxa de crescimento da população de presas é diminuída por um termo da forma −αxy, em que α e β são constantes positivas.</p>

                            <div class = "imagem_texto">
                                <img class="graficoSIR"id='graficoSIR' src="http://localhost/Projeto2025/Modelo Lotka-Volterra/Gráficos/GraficoLotka.png" alt="Gráfico 1 plotado do Modelo de Lokta-Volterra">

                                <p class = "legenda_imagem">Gráfico plotado pela equipe SimLab que representa a dinâmica predador e presa em função do tempo.</p>
                            </div>

                            <div class = "imagem_texto">
                                <img class="graficoSIR"id='graficoSIR' src="http://localhost/Projeto2025/Modelo Lotka-Volterra/Gráficos/GraficoLotka2.png" alt="Gráfico 2 plotado do Modelo de Lokta-Volterra">

                                <p class = "legenda_imagem">Gráfico plotado pela equipe SimLab que representa a dinâmica predador e presa em função das populações de animais (Exemplo da relação de lobos e coelhos no ecossistema)</p>
                            </div>
                        </div>
                    </li>
                    <li class ="item" id = "id_item4"> <h3 class = "titulo_item4">Nosso modelo</h3>
                        <div class = "conteudo_item">
                            <p class = "paragrafo" >O nosso modelo surgiu a partir de um projeto de extensão do Centro Federal de Educação Tecnológica do campus de Leopoldina,  que propôs a criação de um modelo computacional que iria tratar da resposta imunológica humana contra a vacina do Sarampo.</p>
                            <p class = "paragrafo">O modelo computacional simula a resposta do SIH frente à vacinação contra o Sarampo, em nível celular e molecular. Ele é composto por doze equações diferenciais ordinárias (EDOs), que representam algumas populações fundamentais envolvidas na resposta imunológica induzida pela vacinação. As principais populações imunológicas estão dispostas no Quadro 1, enquanto, no Quadro 2 estão reunidos todos os parâmetros das equações e seus significados. </p>
                            <div class = "imagem_texto">
                                <img  src="http://localhost/Projeto2025/SimLab/Assets/populacoes.png" alt="Populações imunológicas abordadas no modelo computacional">
                                <p class = "legenda_imagem">Quadro 1 - Populações cruciais na resposta imunológica </p>
                            </div>
                            <div class = "imagem_texto">
                                <img  src="http://localhost/Projeto2025/SimLab/Assets/parametros1.png" alt="Populações imunológicas abordadas no modelo computacional">
                                <img  src="http://localhost/Projeto2025/SimLab/Assets/parametros2.png" alt="Populações imunológicas abordadas no modelo computacional">
                                <p class = "legenda_imagem">Quadro 2: Parâmetros do modelo e fenômenos imunológicos correspondentes</p>
                            </div>  
                            <p class = "paragrafo">O processo imunológico se inicia quando o vírus vacinal (V) adentra o organismo hospedeiro, infectando as células que se localizam na região. Esta infecção estimula as ACPs imaturas (Ap) presentes no local a capturarem o vírus e se tornarem maduras (Apm), podendo, assim, ativar as células naive e torná-las efetoras. As células T CD4 + efetoras (The) são responsáveis pela ativação de outras células imunológicas, como os linfócitos B (B), que quando ativas, diferenciam-se em plasmócitos de vida curta (Ps) e de vida longa (Pl). Os plasmócitos são as células capazes de secretar anticorpos. Uma outra parte das células B ativas também se diferenciam em células B de memória (Bm), que permanecem em repouso preparadas para agir no caso de uma nova exposição ao mesmo vírus. Além disso, as células B de memória são responsáveis por manter os níveis de plasmócitos de vida longa. A figura 6 é um esquema que demonstra o relacionamento entre as populações imunológicas consideradas no modelo.</p>
                            <div class = "imagem_texto">
                                <img  src="http://localhost/Projeto2025/SimLab/Assets/esquema.png" alt="Populações imunológicas abordadas no modelo computacional">
                                <p class = "legenda_imagem">Esquema que resume as interações entre as populações imunológicas consideradas no modelo computacional.</p>
                            </div>
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">O vírus viral (V) é descrito pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes1.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo" >Para o vírus se proliferar no organismo do hospedeiro, ele precisa infectar uma célula e usá-la para fabricar novos vírus. O termo πvV representa essa multiplicação do vírus no organismo. O termo Cv1V/(cv2+V)   representa o clareamento viral não específico realizado pelo SIH inato O termo kv1VA denota o clareamento viral específico decorrente da neutralização dos vírus pelos anticorpos. E o último termo, kv2V Tke, representa o clareamento viral, devido à indução de a apoptose das células infectadas pelo vírus da febre amarela +</p>
                            <p class = "paragrafo"></p>
                            </div>
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">APCs imaturas (Ap) são descritas pela equação:</p>
                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes2.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo, αap(Ap0-Ap), representa a homeostase das APCs e o termo βapAp  cap1V/(cap2+V)  denota a o decaimento delas devido ao fato de se tornarem maduras.</p>

                        </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">APCs maduras (Apm) são descritas pela equação:</p>
                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes3.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo, βapAp  cap1V/(cap2+V), é o mesmo que aparece na equação anterior, e aqui está representado com um sinal positivo, pois demonstra a maturação das APCs imaturas. O termo δapmApm  representa o decaimento natural das APCs maduras.</p>

                            
                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os linfócitos T CD4+ naive (Thn) são descritas pela equação:</p>    
                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes4.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo, αth(Thn0-Thn), representa a homeostase das células T CD4 + e o segundo, βthApmThn , denota a ativação das células T CD4 + naive.</p>

                                
                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os linfócitos T CD4+ efetores (The) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes5.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo"> 	O termo, πthApmThe , representa a replicação das células T CD4 + efetoras e o termo δthThe denota a morte natural dessas células.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os linfócitos T CD8+ naive (Tkn) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes6.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo, αtk(Tkn0-Tkn), representa a homeostase das células T CD8 + e o segundo termo βtkApmTkn  denota a ativação das células T CD8 + naive.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os linfócitos T CD8+ efetores (Tke) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes7.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O termo, πtkApmTke, representa a replicação das células T CD8 + efetoras e o termo δtkTke o denota a morte natural dessas células.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">As células B, naive e efetora são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes8.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">Para simplificar o modelo, essas populações foram todas consideradas atuando juntas. A parte das células B ativas que não se diferencia em plasmócitos se transforma em células de memória, que permanecem inativas, mas prontas para reagir rapidamente se houver nova exposição ao mesmo antígeno. O termo, αb(B0-B), refere-se à homeostase das células B. Os termos, πb1TheB e πb2TheB, representam a ativação das células B por mecanismos independentes ou dependentes de células T CD4 +. Por fim, os termos βpsApmB,βplTheB  e βbmTheB descrevem as células B ativas que se diferenciam em plasmócitos de vida curta, vida longa ou células de memória, respectivamente.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os plasmócito de vida curta (Ps) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes9.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo, βpsApmB, representa a diferenciação das células B ativas em plasmócitos de vida curta e o segundo termo, δpsPs ,denota o decaimento dos plasmócitos de vida curta</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os plasmócito de vida longa (Pl) são descritas pela equação: </p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes10.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O  termo, βpl The B, representa a diferenciação das células B ativas em plasmócitos de vida longa. O segundo termo, δplPl, denota o decaimento dos plasmócitos de vida curta, e o terceiro termo, γbmBm , representa a diferenciação das células B de memória em plasmócitos de vida longa.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">As células de B memória (Bm) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes11.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">O primeiro termo βbmTheB representa a diferenciação das células B ativas em células B de memória. O  termo πbm1Bm( 1-  Bm/πbm2  ) denota o crescimento logístico das células B de memória e o γbmBm representa a diferenciação das células B de memória em plasmócitos de vida longa.</p>

                            </div>
                            
                            <div class = "imagem_texto">
                            <p class = "legenda_imagem">Os anticorpos (A) são descritas pela equação:</p>

                            <img  src="http://localhost/Projeto2025/SimLab/Assets/equacoes12.png" alt="Populações imunológicas abordadas no modelo computacional"><br>
                            <p class = "paragrafo">Os termos πpsPs e  πplPl representam a produção de anticorpos pelos plasmócitos de vida curta e de vida longa, respectivamente, enquanto o termo δaA denota o decaimento natural dessa população.</p>

                            </div>
                            
                        </div>
                    </li>
                    <li class ="item" id = "id_item5"> <h3 class = "titulo_item1">Referências</h3>
                        <div class = "conteudo_item">
                            <ul class = "lista_paragrafo">
                                <li class = "paragrafo">AUGUSTO, Douglas A.. Entenda o que são modelos computacionais e como o SISS-Geo os utiliza. Disponível em:<a class="links_paragrafo" href="https://www.biodiversidade.ciss.fiocruz.br/entenda-o-que-sao-modelos-computacionais-e-como-o-siss-geo-os-utiliza"> Clique Aqui!</a> Acesso em: 5 maio 2024.</p>
                                </li><br> 

                                <li class = "paragrafo">MOREIRA, Marco Antonio. Modelos científicos, modelos mentais, modelagem computacional e modelagem matemática: aspectos epistemológicos e implicações para o ensino. Revista Brasileira de Ensino de Ciência e Tecnologia, [S.L.], v. 7, n. 2, p. 1-20, 26 ago. 2014. Universidade Tecnologica Federal do Parana (UTFPR).  <a class="links_paragrafo" href="http://dx.doi.org/10.3895/s1982-873x2014000200001">Clique Aqui!</a>. </li><br>
                                
                                <li class = "paragrafo">DE MIRANDA SILVA, Isabeli Raiany; ROSA, Jane. Modelagem matemática aplicada à sistemas dinâmicos epidemiológicos: O modelo sir. Revista Científica Interdisciplinar INTERLOGOS, v. 3, n. 1, p. 33-41, 2018. </li><br>

                                <li class = "paragrafo">VIEIRA, Aline de Oliveira. Estudo sobre Modelos Matemáticos Aplicados à Epidemiologia: modelo sir, sir com vacinação e sirs. 2016. 46 f. TCC (Graduação) - Curso de Licenciatura em Matemática, Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, São Paulo, 2016.</a> </li><br>

                                <li class = "paragrafo">PATA, Rafael Biasi. MODELO DE LOTKA-VOLTERRA PARA A DINÂMICA PREDADOR-PRESA. 2017. 53 f. TCC (Graduação) - Curso de Licenciatura em Matemática, Universidade Federal do Pampa, Itaqui, 2017. </li><br>

                                <li class = "paragrafo" >FIORI, Angelo Fernando; FRANSOZI, Luana; VALDIERO, Antonio Carlos; RASIA, Luiz Antonio. Análise do ponto de equilíbrio no modelo Lotka-Volterra. Proceeding Series Of The Brazilian Society Of Computational And Applied Mathematics, [S.L.], v. 2, n. 1, p. 1-6, 19 dez. 2014. SBMAC. <a class="links_paragrafo" href="http://dx.doi.org/10.5540/03.2014.002.01.0082">Clique Aqui!</a>.</li>

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

    <script src = "/Projeto2025/SimLab/js/menu.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>