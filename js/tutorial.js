document.addEventListener("DOMContentLoaded", function() {
    const tutorialModal = document.getElementById("tutorialtotal");
    const floatingElement = document.querySelector(".floating-element");
    const closeButtons = document.querySelectorAll(".bi-x");
    const avancarButtons = document.querySelectorAll('[name="avancar"]');
    const voltarButtons = document.querySelectorAll('[name="voltar"]');
    let contador = 1; // Controla qual etapa está sendo exibida

    // Função para mostrar o modal
    function mostrarModal() {
        tutorialModal.style.display = "block"; // Mostra o modal
        contador = 1; // Reinicia para o primeiro passo
        atualizarPassos(); // Atualiza para mostrar a primeira etapa
    }

    // Função para esconder o modal
    function esconderModal() {
        tutorialModal.style.display = "none"; // Esconde o modal
    }

    // Função para avançar para o próximo passo
    function avanca() {
        contador++;
        if (contador > 5) { // Limite de etapas
            esconderModal(); // Fecha o modal quando terminar
        } else {
            atualizarPassos();
        }
    }

    // Função para voltar para o passo anterior
    function volta() {
        contador--;
        if (contador < 1) {
            contador = 1;
        }
        atualizarPassos();
    }

    // Função para atualizar a exibição dos passos
    function atualizarPassos() {
        document.querySelectorAll(".totaltutorial > div").forEach((passo, index) => {
            if (index + 1 === contador) {
                passo.classList.remove("escondido_1"); // Mostra o passo atual
            } else {
                passo.classList.add("escondido_1"); // Esconde os outros passos
            }
        });
    }

    // Evento de clique no elemento flutuante para abrir o modal
    floatingElement.addEventListener("click", mostrarModal);

    // Evento de clique nos botões de fechar dentro do modal
    closeButtons.forEach(button => {
        button.addEventListener("click", esconderModal);
    });

    // Eventos de clique nos botões "Avançar" e "Voltar" para navegação entre etapas
    avancarButtons.forEach(button => {
        button.addEventListener("click", avanca);
    });
    voltarButtons.forEach(button => {
        button.addEventListener("click", volta);
    });
});
