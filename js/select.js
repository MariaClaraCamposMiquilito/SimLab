document.querySelectorAll('.campo_select').forEach(select => {
    const button = select.querySelector('.select-button');
    const options = select.querySelector('.select-options');
    const optionItems = select.querySelectorAll('.option');

    // Alterna o menu ao clicar no botão
    button.addEventListener('click', function () {
        const isOpen = options.style.display === 'block';
        closeAllMenus(); // Fecha outros menus antes
        options.style.display = isOpen ? 'none' : 'block';
    });

    // Atualiza o valor selecionado ao clicar em uma opção
    optionItems.forEach(option => {
        option.addEventListener('click', function () {
            button.innerHTML = this.innerHTML;
            options.style.display = 'none';
        });
    });
});

// Fecha todos os menus ao clicar fora
document.addEventListener('click', function (event) {
    if (!event.target.closest('.campo_select')) {
        closeAllMenus();
    }
});

// Função para fechar todos os menus
function closeAllMenus() {
    document.querySelectorAll('.select-options').forEach(options => {
        options.style.display = 'none';
    });
}
