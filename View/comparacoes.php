<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/comparacao.css">
    <title>SimLab</title>
</head>
<body>
 
    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <main class='total_menu'>

        <div class = "apresentacao">
            <?php 
                include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Menu/menu.php');
            ?>
            
            <div class="conteudo">

                <h1 class="titulo">Comparar simulações</h1>
                <p class="busca">Buscar simulações</p> 

                <div class="pesquisa">
                    <i class="bi bi-search iconpesquisa"></i>
                    <input class='input' type="search" placeholder='Digite aqui o nome ou código do gráfico que você deseja:'>
                    <button class='botao' type="submit"> Buscar</button>
                </div>

                <div class="comparacoes">
                    <div class="campo_graficos">
                        <p class="grafico">Gráfico 1</p>
                        <div class = "graficos"></div>
                    </div>

                    <div class="campo_graficos">
                        <p class="grafico">Gráfico 2</p>
                        <div class = "graficos"></div>
                    </div>

                </div>
            </div>
        </div> 
    </main>
    
    <footer>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "/Projeto2025/SimLab/js/menu.js"></script>
</body>
</html>