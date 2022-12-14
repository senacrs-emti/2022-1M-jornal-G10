<?php 
include_once './include/_header.php';
?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<main>
    <div class="NoticiaTopo">
        <div class="carroussel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <a href="artigo-enzo.php" class="carousel-item active">
                        <img src="./img/marte.png" class="d-block w-100" alt="...">
                    </a>
                    <a href="noticia-vini.php" class="carousel-item">
                        <img src="./img/furia.jpg" class="d-block w-100" alt="...">
                    </a>
                    <a href="artigo-vini.php" class="carousel-item">
                        <img src="./img/meioambiente.jpg" class="d-block w-100" alt="...">
                    </a>
                </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="AsideMainCorpo">
        <div class="ArtigoNoticia">
            <span class="IndexArtigoDivBar"></span>
            <a href="noticia-enzo.php" class="IndexArtigoNoticaTextBlock1">
                <img src="./img/metaverso.png" alt="" class="IndexArtigoNoticaTextBlock1Img">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>Metaverso, surge um novo universo dentro da internet.</h1>
                    <p>O metaverso, o que ele ??? Como ele funciona? Onde ele fica? E como ele impacta nas nossas vidas?</p>
                </div>
            </a>
            <span class="IndexArtigoDivBar"></span>
            <a href="noticiaPedro.php" class="IndexArtigoNoticaTextBlock1">
                <img class="IndexArtigoNoticaTextBlock1Img" src="./img/ShutterstockArtigoImg.png" alt="">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>Vendas de imagens de IA</h1>
                    <p>A Shutterstock em conjunto com Open AI anunciaram um projeto de lan??ar a cria????o e comercializa????o de imagens feitas por inteligencias artificiais.</p>
                </div>
            </a>
            <span class="IndexArtigoDivBar"></span>
            <a href="ArtigoPedro.php" class="IndexArtigoNoticaTextBlock1">
                <img src="./img/NarizEletronico.jpg" class="IndexArtigoNoticaTextBlock1Img">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>Nariz Eletr??nico</h1>
                    <p>O Nariz Eletr??nico criando na d??cada de 1980 ?? uma c??pia do nariz humano, ele foi inspirado nos processos biol??gicos do reconhecimento de odores. Fora o obvio que ?? reconhecimento de cheiros, ele vem cada vez mais ganhando novas utilidades.</p>
                </div>
            </a>
            <span class="IndexArtigoDivBar"></span>
            <a href="CronicaPedro.php" class="IndexArtigoNoticaTextBlock1">
                <img src="./img/Fedora-logo.svg.png" alt="" class="IndexArtigoNoticaTextBlock1Img">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>Problemas com Linux</h1>
                    <p>Recentemente mudei de sistema operacional e com essa troca vieram varios novas tarefas que deveriam ser feitas para utilizar o meu computador.</p>
                </div>
            </a>
            <span class="IndexArtigoDivBar"></span>
            <a href="noticia-vini.php" class="IndexArtigoNoticaTextBlock1">
                <img src="./img/furia.jpg" alt="" class="IndexArtigoNoticaTextBlock1Img">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>IEM Major Rio 2022 e a saga dos times brasileiros</h1>
                    <p>O IEM Major Rio 2022 foi o primeiro mundial de CS:GO no Brasil.</p>
                </div>
            </a>
            <span class="IndexArtigoDivBar"></span>
            <a href="noticia-cunha.php" class="IndexArtigoNoticaTextBlock1">
                <img src="./img/alanzoka.jpg" alt="" class="IndexArtigoNoticaTextBlock1Img">
                <div class="IndexArtigoNoticaTextBlock1Texts">
                    <h1>Streamer, sua nova profiss??o do futuro </h1>
                    <p>O que ?? ser um Streamer?</p>
                </div>
            </a>
        </div>
        <div class="Aside">
            <?php
            include_once './include/_aside.php';
            ?>
        </div>
    </div>
    <div class="IndexFooter">
    <?php 
    include_once './include/_footer.php';
    ?>
    </div>
</main>