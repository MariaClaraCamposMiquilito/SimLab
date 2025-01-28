const botao = document.getElementById("hamburguer")
const navegar = document.getElementById("navegar")
const perfil = document.getElementById("perfil")
const total = document.getElementById("total")
const conta = document.getElementById("conta")

botao.addEventListener("click", responsividade)

function responsividade()
{
    if(navegar.classList.contains("escondido"))
    {
        total.style.transition = '1s';
        navegar.style.transition = '.5s';
        perfil.style.transition = '.5s';
        navegar.classList.remove("escondido")
        perfil.classList.remove("escondido")
        conta.classList.remove("escondido")
        total.style.marginBottom = '17rem';
    }
    else
    {
        navegar.style.transition = '.5s';
        perfil.style.transition = '.5s';
        navegar.classList.add("escondido")
        conta.classList.add("escondido")
        perfil.classList.add("escondido")
        total.style.marginBottom = '-0rem';
    }
}

function mostrarperfil()
{
    const divprincipal = document.getElementById('perfilcontaprincipal')
    const divsecun = document.getElementById('perfilconta')
    
    if(divsecun.classList.contains('escondido'))
    {
        divsecun.classList.remove("escondido")
    }
    else
    {
        divsecun.classList.add("escondido")
    }
}

function LarguraDaTela() 
{
    const tamanhoTela = window.innerWidth;

    if (tamanhoTela <= 986)
    {
        navegar.classList.add("escondido")
        perfil.classList.add("escondido")
        conta.classList.add("escondido")
        total.style.marginBottom = '-0rem';
        
    }
    else 
    {
        navegar.classList.remove("escondido")
        conta.classList.remove("escondido")
        perfil.classList.remove("escondido")
    }
}

LarguraDaTela() 
window.addEventListener("resize", LarguraDaTela);