<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/Projeto2025/SimLab/Assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto2025/SimLab/Styles/sobrenos.css">
    <title>Sobre nós</title>
</head>
<body> 

    <header>
        <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Header/header.php'); ?>
    </header>

    <main class = "total">

        <div class = "apresentacao">
            <?php include_once('/xampp/htdocs/Projeto2025/SimLab/Templetes/Menu/menu.php'); ?>

            <div class="conteudo_total">

                <h1 class="titulo">Desenvolvedores:</h1>

                <div class="img"> 
                    <div class="desenvolvedores"> 
                        <img src="http://localhost/Projeto2025/SimLab/Assets/Kauan.jpg" alt="Desenvolvedor" class="fotos">
                        <p class="nome">Kauan Rezende</p>
                        <div class="linha"></div>
                        <div class="icons">
                            <a href="https://wa.me/5532999830653"><i class="bi bi-whatsapp rede"></i></a>
                            <a href="https://www.instagram.com/kauan_.rz"><i class="bi bi-instagram rede"></i></a>
                            <a href=" http://lattes.cnpq.br/3584932850171990"><img src="http://localhost/Projeto2025/SimLab/Assets/Lattes.png" alt="" class="lattes"></a>
                        </div>    
                    </div>
                    <div class="desenvolvedores">
                        <img src="http://localhost/Projeto2025/SimLab/Assets/Maria.png" alt="Desenvolvedora" class="fotos">
                        <p class="nome">Maria Clara Miquilito</p>
                        <div class="linha2"></div>
                        <div class="icons">
                            <a href="https://wa.me/5532999812804"><i class="bi bi-whatsapp rede"></i></a>
                            <a href="https://www.instagram.com/mariaclaramiquelito/"><i class="bi bi-instagram rede"></i></a>
                            <a href="http://lattes.cnpq.br/0791812250504437"><img src="http://localhost/Projeto2025/SimLab/Assets/Lattes.png" alt="" class="lattes"></a>
                        </div>
                    </div>
                    <div class="desenvolvedores">
                        <img src="http://localhost/Projeto2025/SimLab/Assets/Mafe.jpg" alt="Desenvolvedora" class="fotos">
                        <p class="nome">Maria Fernanda Ventura</p>
                        <div class="linha3"></div>
                        <div class="icons">
                            <a href="https://wa.me/5532984576949"><i class="bi bi-whatsapp rede"></i></a>
                            <a href="https://www.instagram.com/jus.tpurple/"><i class="bi bi-instagram rede"></i></a>
                            <a href="http://lattes.cnpq.br/8704795450902275"><img src="http://localhost/Projeto2025/SimLab/Assets/Lattes.png" alt="" class="lattes"></a>
                        </div>     
                    </div>
                </div>
                <h1 class="titulo">Sobre nós:</h1>
                <div class="texto">
                    <p>Bem-vindo ao SimLab, uma plataforma dedicada à descoberta e disseminação do conhecimento científico. Fundado por um grupo de estudantes técnicos, que querem contribuir para a ciência em 2024, nosso site tem como objetivo promover o avanço da ciência e inspirar uma compreensão mais profunda do mundo que nos rodeia. Nossa equipe é composta por cientistas de diversas disciplinas, cada um trazendo sua expertise única para contribuir com nossa missão. Nosso compromisso com a excelência científica nos impulsiona a realizar pesquisas inovadoras e a compartilhar nossas descobertas de maneira acessível e compreensível para todos.<br><br>

                    Acreditamos na importância da colaboração e do compartilhamento de conhecimento entre cientistas e o público em geral. Por isso, estamos empenhados em oferecer conteúdo educativo e informativo, desde artigos científicos até vídeos explicativos, para estimular o interesse e a curiosidade pela ciência em pessoas de todas as idades. Além disso, reconhecemos nossa responsabilidade em promover a integridade científica e ética em todas as nossas atividades. Seguimos rigorosos padrões de conduta e ética em pesquisa, garantindo a credibilidade e confiabilidade de nossas descobertas.<br><br>

                    Estamos empolgados em compartilhar nossa paixão pela ciência com você e convidamos você a explorar nosso site para descobrir mais sobre as maravilhas do universo científico. Obrigado por se juntar a nós nesta jornada de descoberta e aprendizado!!!</p>
                </div>
            </div> 
        </div>
    </main>
    
    <footer class='Rodape'>
        <?php include_once("/xampp/htdocs/Projeto2025/SimLab/Templetes/Footer/footer.php");?>
    </footer>

    <script src = "/Projeto2025/SimLab/js/menu.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>