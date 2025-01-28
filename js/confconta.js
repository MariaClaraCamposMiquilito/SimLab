const btn = document.getElementById('botao_conf')

function senhaAltera() 
{
    const senha = document.getElementById('senha')
    const senhaConfirmacao = document.getElementById('confirma')
    const msg = document.getElementById('div_error')

    if(senha.value!==senhaConfirmacao.value) //senhas não conferem
    {
        msg.innerHTML=(' <i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Senhas não conferem</p>')
        senha.classList.add('error_campo')
        senhaConfirmacao.classList.add('error_campo')

    }
    else
    {
        senha.classList.remove('error_campo')
        senhaConfirmacao.classList.remove('error_campo')

        if((senha.value.length<8 || senhaConfirmacao.value.length<8)) //valida tamanhos das senhas
        {
            msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i>Senha precisa de no minimo 8 caracteres<p class="errormsg"></p>')
            senha.classList.add('error_campo')
            senhaConfirmacao.classList.add('error_campo')
            btn.disabled = true;
            
        }
        else
        {
            senha.classList.remove('error_campo')
            senhaConfirmacao.classList.remove('error_campo')
            msg.innerHTML=(null)
            btn.disabled = false;
        }
        
    }
}
btn.addEventListener("click", senhaAltera)

function mostrarSenha(olho, senha) // Mostrar senha 
{
    let eyeLogin
    let senhaLogin

    senhaLogin = document.getElementById(senha)
    eyeLogin = document.getElementById(olho)
    if(senhaLogin.type === "password")
    {
        senhaLogin.setAttribute('type', 'text')
        eyeLogin.classList.remove('bi-eye')
        eyeLogin.classList.add('bi-eye-slash')
    }
    else
    {
        senhaLogin.setAttribute('type', 'password')
        eyeLogin.classList.add('bi-eye')
        eyeLogin.classList.remove('bi-eye-slash')
    }
}

function preenchido()
{
    const senhaatual = document.getElementById('senhaatual')
    const msg = document.getElementById('div_error')

    if(senhaatual.value === '')
    {
        
        msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i>Por favor, preencha o campo obrigatórios.<p class="errormsg"></p>')
        senhaatual.classList.add('error_campo')
        btn.disabled = true;
    }
    else
    {
        btn.disabled = false;
        msg.innerHTML=""
        senhaatual.classList.remove('error_campo')
    }
}