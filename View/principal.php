<!DOCTYPE html>
<html lang="pt-br">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimLab</title>
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <header>
        <?php
            /*ini_set('include_path', '/SimLab/Templetes/Header/header.php');*/
            include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php"); 
        ?>
    </header>
 
    <main class="conteudo_total">

        <div class = "apresentacao">
            
            <!-- ================ MENU LATERAL ================ -->
            <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Menu/menu.php");?>
            <!-- ================ TUTORIAL ================ -->
            <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Tutorial/tutorial.php");?>
            <!-- ================ SIMULADOR ================-->
            <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Model/simulacao.php");?>
            
            <div class = "campo_total">
                <p class="titulo"> Simulador do Modelo</p><br>

                <div class = "campo_parcial">
                    <form method="POST">
            
                        <div class="inputs">
                            <div class = "campoNomeGrafico">
                                <input class = "nomeGrafico" type="text" class="input" name='nome' placeholder = "Definir nome para a simulação:" value="<?php echo $nome; ?>" required>
                                <!--<button class = "botaoNomeGrafico" type = "submit" >Pronto</button>-->
                                <div class = "campo_lembrete">
                                    <div class = "campo_texto_lembrete">
                                        <i class="bi bi-exclamation-diamond-fill"></i>
                                        <p class = "texto_lembrete">Você pode representar <b>potências com o caracter "E"</b></p>
                                    </div>
                                    <ul class = "campo_exemplo_lembrete">
                                        <p class = "exemplos_lembrete">Exemplos:</p>
                                        <li>1.16<sup>-8</sup> = 1.16E-8</li>
                                        <li>1.49<sup>-5</sup> = 1.49E-5
                                    </ul>
                                </div>

                            </div>

                            <p class = "titulo_parametros">Condição inicial das populações:</p>
                            <div class = "condIniciais1">

                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>Vírus vacinal:</label>
                                        <input type="text" class="inputC" value = "<?php echo $v0; ?>" name='v0' required>
                                    </div>

                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>APC's imaturas:</label>
                                        <input type="text" class="inputC" value = "<?php echo $ap0; ?>" name='ap0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>APC's maduras:</label>
                                        <input type="text" class="inputC" value = "<?php echo $apm0; ?>" name='apm0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Células TCD4+ <br><i>naive</i>: </label>
                                        <input type="text" class="inputC" value = "<?php echo $thn0; ?>"  name='thn0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Células TCD4+ <br>efetoras:</label>
                                        <input type="text" class="inputC" value = "<?php echo $the0; ?>" name='the0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Células TCD8+ <br><i>naive</i>: </label>
                                        <input type="text" class="inputC" value = "<?php echo $tkn0; ?>" name='tkn0' required>
                                    </div>

                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Células TCD8+ <br>efetoras:</label>
                                        <input type="text" class="inputC" value = "<?php echo $the0; ?>" name='tke0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>Células B:</label>
                                        <input type="text" class="inputC" value = "<?php echo $b0; ?>" name='b0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Plasmócitos de <br>vida curta:</label>
                                        <input type="text" class="inputC" value = "<?php echo $pl0 ;?>" name='ps0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Plasmócitos de <br>vida longa:</label>
                                        <input type="text" class="inputC" value = "<?php echo $pl0 ;?>" name='pl0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label">Células B <br>de memória:</label>
                                        <input type="text" class="inputC" value = "<?php echo $bm0 ;?>" name='bm0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>Anticorpos:</label>
                                        <input type="text" class="inputC" value = "<?php echo $a0; ?>" name='a0' required>
                                    </div>
                                    <div class="taxa_inputC">
                                        <label for="taxa" class="label"><br>Tempo:</label>
                                        <input type="text" class="inputC" value = "<?php echo $t; ?>" name='t' required>
                                    </div>
                            </div>

                            <p class = "titulo_parametros">Parâmetros da epidemia</p>

                            <div class = "condIniciais2">

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br>Replicação viral:</label>
                                        <input type="text" class="input" value = "<?php echo $pi_v; ?>" name='pi_v' required>
                                    </div>


                                </div>
                                

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br>Clareamento viral:</label>
                                        <input type="text" class="input" value = "<?php echo $c_v1; ?>" name='c_v1' required>
                                    </div>


                                </div>
                                <div class="taxa_input">

                                    <div class = "campo_input">  
                                        <label for="taxa" class="label">Constante de meia <br>saturação: </label>
                                        <input type="text" class="input" value = "<?php echo $c_v2; ?>" name='c_v2' required>
                                    </div>


                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Neutralizção dos <br>vírus por anticorpos: </label>
                                        <input type="text" class="input" value = "<?php echo $k_v1; ?>" name='k_v1' required>
                                    </div>  

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Eliminação do vírus <br>por células TCD8+:</label>
                                        <input type="text" class="input" value = "<?php echo $k_v2; ?>" name='k_v2' required>
                                    </div>
                                    

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Homeostase das<br> APC's imaturas:</label>
                                        <input type="text" class="input" value = "<?php echo $alpha_ap; ?>" name='alpha_ap' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Maturação das <br>APC's:</label>
                                        <input type="text" class="input" value = "<?php echo $beta_ap; ?>" name='beta_ap' required>
                                    </div>


                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Maturação máxima <br>das APC's:</label>
                                        <input type="text" class="input" value = "<?php echo $k_ap1; ?>" name='k_ap1' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Constante de <br>meia aplicação:</label>
                                        <input type="text" class="input" value = "<?php echo $k_ap2; ?>" name='k_ap2' required>
                                    </div>
                                    

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Morte das <br>APC's maduras:</label>
                                        <input type="text" class="input" value = "<?php echo $delta_apm; ?>" name='delta_apm' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Homeostase das <br>células TCD4+:</label>
                                        <input type="text" class="input" value = "<?php echo $alpha_tn; ?>" name='alpha_tn' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Homeostase das <br>células TCD4+ <i>naive</i>:</label>
                                        <input type="text" class="input" value = "<?php echo $c11 ;?>" name='c11' required>
                                    </div>


                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Ativação das <br>TCD4+ <i>naive</i>:</label>
                                        <input type="text" class="input" value = "<?php echo $c12 ;?>" name='c12' required>
                                    </div>
                                    

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Replicação das células <br>TCD4+ efetoras:</label>
                                        <input type="text" class="input" value = "<?php echo $c13 ;?>" name='c13' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Morte das células <br>TCD4+ efetoras:</label>
                                        <input type="text" class="input" value = "<?php echo $c14 ;?>" name='c14' required>
                                    </div>


                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Homeostase das <br>células TCD8+ <i>naive</i>: </label>
                                        <input type="text" class="input" value = "<?php echo $pi_t; ?>" name='pi_t' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br>Replicação das<br> células TCD8+ <br>efetoras:</label>
                                        <input type="text" class="input" value = "<?php echo $k_te1; ?>" name='k_te1' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br>Morte das <br>células<br> TCD4+ efetoras:</label>
                                        <input type="text" class="input" value = "<?php echo $delta_te; ?>" name='delta_te' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Homeostase das<br> células B:</label>
                                        <input type="text" class="input" value = "<?php echo $alpha_b; ?>" name='alpha_b' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Ativação das céluas B<br> com mecanismo <br>independente das <br>células T:</label>
                                        <input type="text" class="input" value = "<?php echo $pi_b1; ?>" name='pi_b1' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Ativação das céluas B <br>com mecanismo <br>dependente das <br>células T:</label>
                                        <input type="text" class="input" value = "<?php echo $pi_b2; ?>" name='pi_b2' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Diferenciação das<br> células B em <br>plasmócitos de vida <br>curta:</label>
                                        <input type="text" class="input" value = "<?php echo $beta_s; ?>" name='beta_s' required>
                                    </div>

                                </div>

                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label">Diferenciação das <br>células B em <br>plasmócitos de <br>vida longa:</label>
                                        <input type="text" class="input" value = "<?php echo $beta_l; ?>" name='beta_l' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br>Diferenciação das <br>células B em células <br>de memória: </label>
                                        <input type="text" class="input" value = "<?php echo $beta_bm; ?>" name='beta_bm' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        
                                        <label for="taxa" class="label"><br>Morte de plasmócitos <br>de vida curta</label>
                                        <input type="text" class="input" value = "<?php echo $delta_s; ?>" name='delta_s' required>

                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Morte de plasmócitos<br> de vida longa:</label>
                                        <input type="text" class="input" value = "<?php echo $delta_l; ?>" name='delta_l' required>
                                    </div>
                                    

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        
                                        <label for="taxa" class="label">Diferenciação das <br>células B de memória <br>em plasmócitos de vida <br>longa:</label>
                                        <input type="text" class="input" value = "<?php echo $gamma_m; ?>" name='gamma_m' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Proliferação das <br>células B de memória:</label>
                                        <input type="text" class="input" value = "<?php echo $k_bm1; ?>" name='k_bm1' required>
                                    </div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        <label for="taxa" class="label"><br><br>Constante de <br>crescimento máximo:</label>
                                        <input type="text" class="input" value = "<?php echo $k_bm2; ?>" name='k_bm2' required></div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                    <label for="taxa" class="label">Secreção de <br>anticorpos por <br>plasmócitos de vida <br>curta: </label>
                                    <input type="text" class="input" value = "<?php echo $pi_as; ?>" name='pi_as' required></div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                    <label for="taxa" class="label">Secreção de <br>anticorpos <br>por plasmócito de <br>vida longa: </label>
                                    <input type="text" class="input" value = "<?php echo $pi_al; ?>" name='pi_al' required></div>

                                </div>
                                <div class="taxa_input">
                                    <div class = "campo_input">
                                        
                                    <label for="taxa" class="label"><br><br><br>Morte de anticorpos: </label>
                                    <input type="text" class="input" value = "<?php echo $delta_a; ?>" name='delta_a' required>
                                    </div>
                                </div>
                            </div>
                            <div class="errorsim">
                                <?php 
                                    if($errorsim)
                                        echo "<i c;lass='bi bi-exclamation-circle-fill erroricon'></i> <p class='errormsg'>Por favor, preencha todos os campos obrigatórios com valores maiores que zero</p>";
                                ?>
                            </div>

                            <div class = "campoBotao">                                
                                <button type="submit" name='simulacao' class="botao">Gerar simulação</button>
                            </div>
                            
                        </div>

                    </form>
                </div>
                    <div class="grafico">
                        <p class="titulo">Gráficos da simulação</p><br>

                    
                        <div class="area_grafico">
                            <div class = "area_grafico_divisao">
                                <p>População de anticorpos</p>
                                <canvas class='graficos' id="graficoanticorpos"></canvas>
                            </div>
                            <div class = "area_grafico_divisao">
                                <p>População de vírus</p>
                                <canvas class='graficos' id="graficovirus"></canvas>
                            </div>
          
                        </div> 
                        
                        <div class="escrita">

                                <div class="auxiliar">
                                    <a class="elemento" >
                                        <button class="txt_resultado" name = "open_modal">Fazer download dos gráficos</button>
                                        <i class="bi bi-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div> 
        </div> 
    </main>

    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "/Projeto2025/SimLab/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/Projeto2025/SimLab/js/graficos.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>