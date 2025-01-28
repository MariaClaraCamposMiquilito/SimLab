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

    <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Model/menu.php")?>

    <div class="total fechado" id='totalmenu'>
        <div class="setamenu seta_fechada">
            <i class="bi bi-caret-right-fill setinha"></i>
        </div>

        <ul class="lista_">
            <div class="campo_lista">

                <div class="campo_item_lista">
                    <li  id='botao' class="item_menu escondido_botao">
                        <a id = "openModalPremium1" >
                            <span class="icon">
                                <i class="bi bi-file-earmark-check-fill"></i>
                            </span>
                            <span name='links' id='comparar' class="txt_link escondido1">Comparar</span>
                        </a>
                    </li>
                </div>
                            
                <div class="historico escondido1">
                <?php
         
                    foreach ($simulacaomenu as $id_sim => $nomesim) 
                    {
                        echo "<div class='menu_historico'>
                                <ul class='lista_historico'>
                                    <div class='divisao_lista_historico'>
                                        <div class='icones_item_lista'>

                                            <form method='POST'>
                                                <input type='hidden' name='id_sim' value='$id_sim'>
                                                <div class='enviarmenu'>
                                                    <button type='submit' class='lupa grafico_historico'name='simular'>     <i1 class='bi bi-search lupaicon'>$nomesim</i1>
                                                    </button>
                                                </div>
                                            </form>

                                           <form method='POST' action='http://localhost/Projeto2025/SimLab/Model/menuapagar.php'>
                                                <input type='hidden' name='id_sim' value=\"$id_sim\">
                                                <button class='buttonapagar' 
                                                        name='apagar' 
                                                        type='submit'
                                                        onclick=\"return confirm('Você realmente deseja excluir essa simulação?')\">
                                                    <i class='bi bi-trash3-fill icon_historico'></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </ul>
                            </div>";
                    }
                ?>

                </div> 
                <!-- Plano com assinatura --> 
                <div class="assinatura fechado_assinatura" id = "openModalPremium">
                    <i class="bi bi-stars"></i>
                    <a class="campo_assinatura escondido1">Fazer upgrade de plano</a>
                </div>
                <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Modal/modal.php")?>

            </div>
        </ul>
        
                
    </div>
    
    <script src="/Projeto2025/SimLab/js/menu.js"></script>
    <script src="/Projeto2025/SimLab/js/modal.js"></script>

</body>
</html>