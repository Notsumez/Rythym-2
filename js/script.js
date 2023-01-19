/*---------------------------
      Tabela de Conteúdos
    --------------------
    01- FAQ
    02- Ir para o MusicPlayer
    03- Voltar do MusicPlayer
    04- Sessão Volume
 ----------------------------*/

 /*==========  FAQ   ==========*/

const pergunta = document.querySelectorAll('.faq_sub_perguntas_lista_item_nome');
const resposta = document.querySelectorAll('.faq_sub_perguntas_lista_item_desc');

for(let i = 0; i < pergunta.length; i++){
    pergunta[i].addEventListener('click', () => {
        if(pergunta[i].classList.contains('fechar')){
            pergunta[i].classList.toggle('fechar')
            resposta[i].classList.toggle('ativar')
        }else {
            pergunta[i].classList.add('fechar')
            resposta[i].classList.add('ativar')
        }
    });
};

/*==========  Navegação - Charts   ==========*/

/*==========  Ir para o MusicPlayer  ==========*/

const sessaoPlayerMusica = document.querySelector('.sessao_player_musica');

let clickCount = 1;

sessaoPlayerMusica.addEventListener('click', () => {
    if(clickCount >= 2){
        sessaoPlayerMusica.classList.add('active');
        clickCount = 1;
        return;
    }
    clickCount++;
    setTimeout(() => {
        clickCount = 1;
    }, 250);
});

/*==========  Voltar do MusicPlayer  ==========*/

const voltarParaHomeBtn = document.querySelector('.sessao_player_musica .player-botao-voltar');

voltarParaHomeBtn.addEventListener('click', () => {
    sessaoPlayerMusica.classList.remove('active');
});

/*==========  Sessão Volume  ==========*/

const volumeBtn = document.querySelector('span.fas fa-volume-up icone-volume');
const volumeSlider = document.querySelector('slider-volume');

volumeBtn.addEventListener('click', () => {
    volumeBtn.classList.toggle('active');
    volumeSlider.classList.toggle('active');
});

volumeSlider.addEventListener('input', () => {
    music.volume = volumeSlider.value;
})