function emailValida() 
{
    // Verifique se as senhas coincidem
    let testeemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = document.getElementById('input_email_cadastro')
    
    if(!testeemail.test(email.value))
        return false; // Senhas não conferem ou são muito curtas
    
}
function LarguraDaTela() 
{
    const tamanhoTela = window.innerWidth;
    const imagem = document.getElementById('logo')

    if (tamanhoTela <= 600)
    {
        imagem.src = "http://localhost/Projeto2025/SimLab/Assets/icon.png"
        
    }
    else 
    {
         imagem.src = "http://localhost/Projeto2025/SimLab/Assets/SimlabLogo.png"
    }
}

LarguraDaTela() 
window.addEventListener("resize", LarguraDaTela);

function autoTab(current, nextFieldID, prevFieldID) {
            if (current.value.length >= 1) {
                document.getElementById(nextFieldID).focus();
            }
        }

        function handleBackspace(event, currentFieldID, prevFieldID) {
            if (event.key === "Backspace" && event.target.value.length === 0) {
                document.getElementById(prevFieldID).focus();
            }
        }