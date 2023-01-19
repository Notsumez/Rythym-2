<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/charts.css">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="shortcut icon" href="images/Rythym-pequeno-Logo.ico" type="image/x-icon">
    <title>RYTHYM - Charts</title>
</head>
<body id="bg_charts">
    <noscript>Você precisa ativar o JavaScript para rodar essa aplicação.</noscript>
    <?php include('header.html'); ?>

    <main class="pagina-charts">
        <article class="pagina-charts-desktop">
            <!-- começo da barra lateral  -->
            <div class="charts-desktop-esquerda">
                <a href="" class="charts-desktop-nome-esquerdo active">Top 40 do Rythym</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 30 Funks</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 30 de Pop</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 30 de Hip-Hop</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 30 Gospel</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 20 MPB</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 20 internacional</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 20 Pagodes</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 20 Rock</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 20 Forró</a>
                <a href="" class="charts-desktop-nome-esquerdo">Lançamentos Top 20</a>
                <a href="" class="charts-desktop-nome-esquerdo">Top 30 Sertanejo</a>
                <a href="" class="charts-desktop-nome-esquerdo">TikTok Top 20</a>
            </div>
            <!-- fim da barra lateral  -->
            <div class="charts-desktop-direita">
                <!-- começo da info do charts  -->
                <div class="info-charts">
                    <img class="info-charts-imagem" src="../Rythym/images/top40.jpg" alt="Top 40 do Rythym">
                    <div class="info-charts-direita">
                        <div class="info-charts-direita-texto">
                            <h1 class="info-charts-direita-titulo">Top 40 do Rythym</h1>
                            <h2 class="info-charts-direita-desc">
                                Atualização diária das 40 faixas mais reproduzidas no Rythym agora.
                            </h2>
                            <h2 class="info-charts-direita-breve">Top Diário | Última Atualização: 8 horas atrás</h2>
                        </div>
                        <div class="info-charts-direita-button">
                            <div class="charts-play-cheio">
                                <span class="icon-play">
                                
                                </span>
                                <button type="button">
                                    <span>Escute no Rythym</span>
                                </button>
                            </div>
                            <div class="charts-favoritar">
                                <div>
                                    <i class="fa-regular fa-heart botao-favoritar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim da info do charts  -->
                <!-- começo das faixas  -->
                <div class="charts-faixas">
                    <div class="charts-faixas-header">
                        <div class="charts-faixas-esquerda">
                            <div class="indice-faixas">#</div>
                            <div class="rank-faixas"></div>
                            <div class="info-faixas">Title</div>
                        </div>
                        <div class="charts-faixas-direita">
                            <div class="titulo-album">Album</div>
                            <div class="duracao-faixas">
                                <span> 
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Começo da faixa 1 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">1</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/album-agudo-magico.webp" alt="Agudo Mágico 3">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Agudo Mágico 3</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="MC MENOR SG" class="titulo-artista" href="">MC MENOR SG,</a>
                                        <a title="DJ Escobar" class="titulo-artista" href="">DJ Escobar,</a>
                                        <a title="MC MENOR HR" class="titulo-artista" href="">MC MENOR HR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Agudo Mágico 3" class="titulo-album" href="">Agudo Mágico 3</a>
                            <div class="duracao-faixa">02:56</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 1 -->
                    <!-- Começo da faixa 2 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">2</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/album-ja-sei-namorar.jfif" alt="Tribalistas 2002 Album">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Já sei Namorar</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tribalistas" class="titulo-artista" href="">Tribalistas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Tribalistas" class="titulo-album" href="">Tribalistas</a>
                            <div class="duracao-faixa">03:16</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 2 -->
                    <!-- Começo da faixa 3 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">3</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/album-astronaut-in-the-ocean.jfif" alt="Astronaut In The Ocean">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Astronaut In The Ocean</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Masqued Wolf" class="titulo-artista" href="">Masked Wolf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Astronaut In The Ocean" class="titulo-album" href="">Astronaut In The Ocean</a>
                            <div class="duracao-faixa">02:12</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 3 -->
                    <!-- Começo da faixa 4 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">4</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/album-Pais_do_Futebol.jpg" alt="País do Futebol">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">País do Futebol</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="MC Guime" class="titulo-artista" href="">MC Guime,</a>
                                        <a title="Emicida" class="titulo-artista" href="">Emicida</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="País do Futebol" class="titulo-album" href="">País do Futebol</a>
                            <div class="duracao-faixa">02:29</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 4 -->
                    <!-- Começo da faixa 5 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">5</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Capa_de_Músicas_para_Churrasco,_Vol._1.jpg" alt="Musica para churrasco">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Amiga da Minha Mulher</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Seu Jorge" class="titulo-artista" href="">Seu Jorge</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Musica para Churrasco" class="titulo-album" href="">Musica para Churrasco</a>
                            <div class="duracao-faixa">04:08</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 5 -->
                    <!-- Começo da faixa 6 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">6</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/alive.jpg" alt="Alive (It Feels Like)">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Alive (It Feels Like)</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Alok" class="titulo-artista" href="">Alok</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Alive (It Feels Like)" class="titulo-album" href="">Alive (It Feels Like)</a>
                            <div class="duracao-faixa">02:22</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 6 -->
                    <!-- Começo da faixa 7 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">7</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/fame.jpg" alt="Fame - A COLORS ENCORE">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Fame - A COLORS ENCORE</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Rema" class="titulo-artista" href="">Rema</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Fame - A COLORS ENCORE" class="titulo-album" href="">Fame - A COLORS ENCORE</a>
                            <div class="duracao-faixa">01:51</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 7 -->
                    <!-- Começo da faixa 8 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">8</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/goosbumps.jpg" alt="Goosebumps">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Goosebumps</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="HVME" class="titulo-artista" href="">HVME</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Goosebumps" class="titulo-album" href="">Goosebumps</a>
                            <div class="duracao-faixa">02:43</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 8 -->
                    <!-- Começo da faixa 9 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">9</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Barnyard.jpg" alt="Boombastic">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Boombastic</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Shaggy" class="titulo-artista" href="">Shaggy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Barnyard Soundtrack" class="titulo-album" href="">Barnyard Soundtrack</a>
                            <div class="duracao-faixa">04:07</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 9 -->
                    <!-- Começo da faixa 10 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">10</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/dying to believe.webp" alt="Dying To Believe">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Dying To Believe</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Papa Roach" class="titulo-artista" href="">Papa Roach</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Dying To Believe" class="titulo-album" href="">Dying To Believe</a>
                            <div class="duracao-faixa">03:02</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 10 -->
                    <!-- Começo da faixa 11 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">11</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Silento_-_Watch_Me.png" alt="Watch Me (Whip / Nae Nae)">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Watch Me (Whip / Nae Nae)</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Silentó" class="titulo-artista" href="">Silentó</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Watch Me (Whip / Nae Nae)" class="titulo-album" href="">Watch Me (Whip / Nae Nae)</a>
                            <div class="duracao-faixa">03:05</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 11 -->
                    <!-- Começo da faixa 12 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">12</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/WASTING TIME.jpg" alt="Wasting Time">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Wasting Time</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="CASTLEBEAT" class="titulo-artista" href="">CASTLEBEAT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="VHS" class="titulo-album" href="">VHS</a>
                            <div class="duracao-faixa">03:06</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 12 -->
                    <!-- Começo da faixa 13 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">13</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/justice-11.jpg" alt="Peaches (feat. Daniel Caesar & Giveon)">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Peaches (feat. Daniel Caesar & Giveon)</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Justin Bieber" class="titulo-artista" href="">Justin Bieber</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Justice" class="titulo-album" href="">Justice</a>
                            <div class="duracao-faixa">03:18</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 13 -->
                    <!-- Começo da faixa 14 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">14</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/summertime sadness.jfif" alt="Summertime Sadness (Lana Del Rey Vs. Cedric Cervais">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Summertime Sadness (Lana Del Rey Vs. Cedric Gervais) - Cedric Gervais Remix</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Lana Del Rey" class="titulo-artista" href="">Lana Del Rey,</a>
                                        <a title="Cedric Gervais" class="titulo-artista" href="">Cedric Gervais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Summertime Sadness (Lana Del Rey Vs. Cedric Gervais) - Cedric Gervais Remix" class="titulo-album" href="">Summertime Sadness (Lana Del Rey Vs. Cedric Gervais) - Cedric Gervais Remix</a>
                            <div class="duracao-faixa">03:35</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 14 -->
                    <!-- Começo da faixa 15 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">15</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/hollywood's.jpg" alt="Wow.">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Wow.</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Post Malone" class="titulo-artista" href="">Post Malone</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Hollywood's Bleeding" class="titulo-album" href="">Hollywood's Bleeding</a>
                            <div class="duracao-faixa">02:30</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 15 -->
                    <!-- Começo da faixa 16 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">16</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Os_Cães_Ladram,_Mas_a_Caravana_Não_Pára.jpg" alt="Nega do Cabelo Duro">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Nega do Cabelo Duro</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Planet Hemp" class="titulo-artista" href="">Planet Hemp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Os Cães Ladram Mas a Caravana Não Pára" class="titulo-album" href="">Os Cães Ladram Mas a Caravana Não Para</a>
                            <div class="duracao-faixa">02:02</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 16 -->
                    <!-- Começo da faixa 17 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">17</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/mercury.jfif" alt="Bones">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Bones</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Imagine Dragons" class="titulo-artista" href="">Imagine Dragons</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Mercury - Acts 1 & 2" class="titulo-album" href="">Mercury - Acts 1 & 2</a>
                            <div class="duracao-faixa">02:45</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 17 -->
                    <!-- Começo da faixa 18 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">18</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Capa-AM_(oficial).jpeg" alt="Do I Wanna Know?">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Do I Wanna Know?</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Artic Monkeys" class="titulo-artista" href="">Artic Monkeys</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="AM" class="titulo-album" href="">AM</a>
                            <div class="duracao-faixa">04:32</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 18 -->
                    <!-- Começo da faixa 19 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">19</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/di melo.jpeg" alt="Minha Estrela">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Minha Estrela</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Di Melo" class="titulo-artista" href="">Di Melo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Di Melo" class="titulo-album" href="">Di Melo</a>
                            <div class="duracao-faixa">02:30</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 19 -->
                    <!-- Começo da faixa 20 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">20</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/antonio carlos & jocafi.jpg" alt="Kabaluere">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Kabaluere</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Antonio Carlos & Jocafi" class="titulo-artista" href="">Antonio Carlos & Jocafi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Mudei de Ideia" class="titulo-album" href="">Mudei de Ideia</a>
                            <div class="duracao-faixa">02:22</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 20 -->
                    <!-- Começo da faixa 21 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">21</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/da lama ao caos.jfif" alt="A Praieira">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">A Praieira</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Chico Science" class="titulo-artista" href="">Chico Science,</a>
                                        <a title="Nação Zumbi" class="titulo-artista" href="">Nação Zumbi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Da Lama ao Caos" class="titulo-album" href="">Da Lama ao Caos</a>
                            <div class="duracao-faixa">03:36</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 21 -->
                    <!-- Começo da faixa 22 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">22</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/swinge & samba rock.jpg" alt="Paz e Arroz">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Paz e Arroz</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Clube do Balanço" class="titulo-artista" href="">Clube do Balanço</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Swing & Samba Rock" class="titulo-album" href="">Swing & Samba Rock</a>
                            <div class="duracao-faixa">02:57</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 22 -->
                    <!-- Começo da faixa 23 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">23</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/thriller.jfif" alt="Billie Jean">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Billie Jean</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Michael Jackson" class="titulo-artista" href="">Michael Jackson</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Thriller 25 Super Deluxe Edition" class="titulo-album" href="">Thriller 25 Super Deluxe Edition</a>
                            <div class="duracao-faixa">04:54</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 23 -->
                    <!-- Começo da faixa 24 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">24</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/minecraft - tauz.jfif" alt="Rap do Minecraft">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Rap do Minecraft</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tauz" class="titulo-artista" href="">Tauz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Minecraft" class="titulo-album" href="">Minecraft</a>
                            <div class="duracao-faixa">03:04</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 24 -->
                    <!-- Começo da faixa 25 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">25</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/every summertime.jfif" alt="Every Summertime">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Every Summertime</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="NIKKI" class="titulo-artista" href="">NIKKI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Every Summertime" class="titulo-album" href="">Every Summertime</a>
                            <div class="duracao-faixa">03:36</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 25 -->
                    <!-- Começo da faixa 26 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">26</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Tom_tom_club_album.jpg" alt="Wordy Rappinghood">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Wordy Rappinghood</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tom Tom Club" class="titulo-artista" href="">Tom Tom Club</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Tom Tom Clube - Deluxe Edition" class="titulo-album" href="">Tom Tom Clube - Deluxe Edition</a>
                            <div class="duracao-faixa">06:28</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 26 -->
                    <!-- Começo da faixa 27 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">27</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Acústico_MTV_-_Charlie_Brown_Jr..jpg" alt="Samba Makosa / Citação Trecho Incidental: Monólogo ao Pé do Ouvido / Citação Trecho Incidental: Queimando Tudo - Ao vivo">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Samba Makosa / Citação Trecho Incidental: Monólogo ao Pé do Ouvido / Citação Trecho Incidental: Queimando Tudo - Ao vivo</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Charlie Brown Jr" class="titulo-artista" href="">Charlie Brown Jr,</a>
                                        <a title="Marcelo D2" class="titulo-artista" href="">Marcelo D2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Acústico(Ao vivo)" class="titulo-album" href="">Acústico(Ao vivo)</a>
                            <div class="duracao-faixa">04:06</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 27 -->
                    <!-- Começo da faixa 28 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">28</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/joão alexandre.jfif" alt="Coração - Ao Vivo">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Coração - Ao Vivo</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="João Alexandre" class="titulo-artista" href="">João Alexandre</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Ao Vivo" class="titulo-album" href="">Ao Vivo</a>
                            <div class="duracao-faixa">03:05</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 28 -->
                    <!-- Começo da faixa 29 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">29</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/bossa nova essenciais.jfif" alt="Onde Anda Você">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Onde Anda Você</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tiago Nacarato" class="titulo-artista" href="">Tiago Nacarato</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Bossa Nova Essenciais" class="titulo-album" href="">Bossa Nova Essenciais</a>
                            <div class="duracao-faixa">02:52</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 29 -->
                    <!-- Começo da faixa 30 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">30</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/guaraná - nikk.jfif" alt="Guaraná">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Guaraná</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="NIKK" class="titulo-artista" href="">NIKK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Guaraná" class="titulo-album" href="">Guaraná</a>
                            <div class="duracao-faixa">04:09</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 30 -->
                    <!-- Começo da faixa 31 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">31</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/RC_Splish_Splash.jpg" alt="Splish Splash - Versão remasterizada">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Splish Splash - Versão remasterizada</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Roberto Carlos" class="titulo-artista" href="">Roberto Carlos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Roberto Carlos(1963 remasterizado)" class="titulo-album" href="">Roberto Carlos(1963 remasterizado)</a>
                            <div class="duracao-faixa">02:29</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 31 -->
                    <!-- Começo da faixa 32 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">32</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/Blackpink_-_How_You_Like_That.png" alt="How You Like That">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">How You Like That</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="BLACKPINK" class="titulo-artista" href="">BLACKPINK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="How You Like That" class="titulo-album" href="">How You Like That</a>
                            <div class="duracao-faixa">03:01</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 32 -->
                    <!-- Começo da faixa 33 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">33</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/FRIENDS_-_Marshmello_e_Anne-Marie.jpg" alt="FRIENDS">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">FRIENDS</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Marshmello" class="titulo-artista" href="">Marshmello,</a>
                                        <a title="Anne-Marie" class="titulo-artista" href="">Anne-Marie</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="FRIENDS" class="titulo-album" href="">FRIENDS</a>
                            <div class="duracao-faixa">03:23</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 33 -->
                    <!-- Começo da faixa 34 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">34</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/jackie chan.jfif" alt="Jackie Chan">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Jackie Chan</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tiësto" class="titulo-artista" href="">Tiësto,</a>
                                        <a title="Dzeko" class="titulo-artista" href="">Dzeko,</a>
                                        <a title="Preme" class="titulo-artista" href="">Preme,</a>
                                        <a title="Post Malone" class="titulo-artista" href="">Post Malone</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Jackie Chan" class="titulo-album" href="">Jackie Chan</a>
                            <div class="duracao-faixa">03:36</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 34 -->
                    <!-- Começo da faixa 35 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">35</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/seja para mim acustico.jfif" alt="Seja Para Mim - Acústico">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Seja Para Mim - Acústico</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Maneva" class="titulo-artista" href="">Maneva</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Seja Para Mim (Acústico)" class="titulo-album" href="">Seja Para Mim (Acústico)</a>
                            <div class="duracao-faixa">03:01</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 35 -->
                    <!-- Começo da faixa 36 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">36</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/life is good.jpg" alt="Life is Good (Feat. Drake)">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Life is Good (Feat. Drake)</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Future" class="titulo-artista" href="">Future,</a>
                                        <a title="Drake" class="titulo-artista" href="">Drake</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Life Is Good (Feat. Drake)" class="titulo-album" href="">Life Is Good (Feat. Drake)</a>
                            <div class="duracao-faixa">03:58</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 36 -->
                    <!-- Começo da faixa 37 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">37</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/doo-woops.jfif" alt="Grenade">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Grenade</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Bruno Mars" class="titulo-artista" href="">Bruno Mars</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Doo-Woops & Hooligans" class="titulo-album" href="">Doo-Woops & Hooligans</a>
                            <div class="duracao-faixa">03:42</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 37 -->
                    <!-- Começo da faixa 38 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">38</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/rio super funk.jfif" alt="Ela Só Pensa Em Beijar">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Ela Só Pensa Em Beijar</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="MC Leozinho" class="titulo-artista" href="">MC Leozinho</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Rio Super Funk" class="titulo-album" href="">Rio Super Funk</a>
                            <div class="duracao-faixa">04:07</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 38 -->
                    <!-- Começo da faixa 39 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">39</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/sou tão eu.jfif" alt="Sou Tão Eu">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Sou Tão Eu</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Vitti Romera" class="titulo-artista" href="">Vitti Romera</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Sou Tão Eu" class="titulo-album" href="">Sou Tão Eu</a>
                            <div class="duracao-faixa">03:23</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 39 -->
                    <!-- Começo da faixa 40 -->
                    <div class="faixa-charts">
                        <div class="charts-faixa-esquerda">
                            <div class="indice-faixa">40</div>
                            <div class="rank-faixa">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="info-faixa">
                                    <img src="../Rythym/images/Capas - Top 40 do Rythym/tim maia.jfif" alt="Que Beleza">
                                <div class="info-faixa-texto">
                                    <a class="info-faixa-titulo">Que Beleza</a>
                                    <div class="lista-artistas-lista-pequena">
                                        <a title="Tim Maia" class="titulo-artista" href="">Tim Maia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="charts-faixa-direita">
                            <a title="Que Beleza" class="titulo-album" href="">Que Beleza</a>
                            <div class="duracao-faixa">03:29</div>
                        </div>
                    </div> 
                    <!-- fim da faixa 40 -->
                </div>
                <!-- fim das faixas  -->
            </div>
        </article>
        <!-- Começo Player de Musicas  -->
        <section class="sessao_player_musica">
            <div class="player-controle">
                <div class="player-botao-voltar">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="player-capa-album">
                    <img src="./images/Capas - Top 40 do Rythym/Blackpink_-_How_You_Like_That.png" alt="">
                </div>
                <div class="player-barra-tempo">
                    <input type="range" max="1" value="1" step="0.1"></input>
                    <p class="player-barra-min-inicio">00:00</p>
                    <p class="player-barra-min-fim">00:00</p>
                </div>
                <div class="player-info-musica">
                    <h1 class="player-nome-musica">Nome da Musica</h1>
                    <a class="player-nome-artista" href="">Artista</a>
                </div>
                <div class="player-progress">
                    <i class="fa-solid fa-rotate-right active"></i>
                    <i class="fa-solid fa-backward active"></i>
                    <i class="fa-solid fa-play active"></i>
                    <i class="fa-solid fa-pause"></i>
                    <i class="fa-solid fa-forward active"></i>
                    <input type="range" class="slider-volume" max="1" value="1" step="0.1">
                    <span class="fas fa-volume-up icone-volume"></span>
                </div>
            </div>
        </section>
        <!-- Fim Player de Musicas  -->
    </main>
    <script src="js/script.js"></script>
</body>
</html>