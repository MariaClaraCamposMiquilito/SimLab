const main = document.getElementById('main')
const btn_cadastro = document.getElementById('btn_entrar')
const btn_login = document.getElementById("cadastrar")

btn_login.addEventListener('click', login)

function login()
{
    main.addEventListener('click', main.classList.remove('toggle'))
}
btn_cadastro.addEventListener('click', cadastro)

function cadastro()
{
    main.addEventListener('click', main.classList.add('toggle'))
}
