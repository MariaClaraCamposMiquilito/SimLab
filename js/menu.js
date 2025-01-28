const totalmenu = document.getElementById('totalmenu');
const btnExp = document.querySelector('.setamenu');
const botaomenu = document.getElementById('botao');
const comparar = document.getElementById('comparar');
const assinatura = document.querySelector('.fechado_assinatura');
const historico = document.querySelector('.historico');
const seta = document.querySelector(".setinha");
const campoassinatura = document.querySelector('.campo_assinatura');
const fade = document.getElementById("fade");
const modal = document.querySelector("#modal");

btnExp.addEventListener('click', expandir);

function expandir() {
    if (totalmenu.classList.contains('fechado')) {
        totalmenu.classList.remove('fechado');
        assinatura.classList.remove('fechado_assinatura');
        btnExp.classList.remove('seta_fechada');
        comparar.classList.remove('escondido1');
        botaomenu.classList.remove('escondido_botao');
        historico.classList.remove("escondido1");
        campoassinatura.classList.remove('escondido1');
        seta.classList.remove('bi-caret-right-fill');
        seta.classList.add('bi-caret-left-fill');
    } else { 
        totalmenu.classList.add('fechado');
        assinatura.classList.add('fechado_assinatura');
        btnExp.classList.add('seta_fechada');
        comparar.classList.add('escondido1');
        botaomenu.classList.add('escondido_botao');
        historico.classList.add("escondido1");
        campoassinatura.classList.add('escondido1');
        seta.classList.add('bi-caret-right-fill');
        seta.classList.remove('bi-caret-left-fill');
    }
}


const buttons = document.querySelectorAll('[id^="openButtonModalConfirmacao"]');

buttons.forEach(button => {
    button.addEventListener('click', function() {
        const form = this.closest('form'); 
        const id_sim = form.querySelector('input[name="id_sim"]').value; 
        openModalConfirmacao(id_sim); 
    });
});

function openModalConfirmacao(id_sim) {
    const modal = document.getElementById('modalConfirmacao');
    const fade = document.getElementById('fadeModalConfirmacao');
    
    modal.classList.remove('hideModalConfirmacao');
    fade.classList.remove('hideModalConfirmacao');
}

const closeModalConfirmacao = document.getElementById('closeButtonModalConfirmacao');
const closeModalConfirmacao1 = document.getElementById('closeButtonModalConfirmacao1');

closeModalConfirmacao.addEventListener('click', () => {
    const modal = document.getElementById('modalConfirmacao');
    const fade = document.getElementById('fadeModalConfirmacao');
    
    modal.classList.add('hideModalConfirmacao');
    fade.classList.add('hideModalConfirmacao');
});

closeModalConfirmacao1.addEventListener('click', () => {
    const modal = document.getElementById('modalConfirmacao');
    const fade = document.getElementById('fadeModalConfirmacao');
    
    modal.classList.add('hideModalConfirmacao');
    fade.classList.add('hideModalConfirmacao');
});



