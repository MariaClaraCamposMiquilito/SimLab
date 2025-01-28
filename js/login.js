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

function validacao(input, icon) // Validação se uns dos campos não esta preenchido corretamente (vazio, senha não confere,
{                               //se o email enviado é valido e tamanhos de senhas são maiores que 8
    const input1 = document.getElementById(input)
    const icon1 = document.getElementById(icon)
    const msg = document.getElementById('div_error')
    const senhaCadastro = document.getElementById('senha_cadastro')
    const senhaConfirmacao = document.getElementById('senha_confirmacao')
    const iconSenha = document.getElementById('icon_cadastro')
    const iconConfirma = document.getElementById('icon_confirma')
    

    if (input1.value === '') //campos em branco
    {
        msg.innerHTML = (' <i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Por favor, preencha todos os campos obrigatórios.</p>')
        icon1.classList.add('error_icon')
        input1.classList.add('error_campo')
        input1.required = true
    } 
    else
    {
        icon1.classList.remove('error_icon')
        input1.classList.remove('error_campo')
        msg.innerHTML = (' <i class="bi bi-exclamation-circle-fill corretmsg"></i> <p class="corretmsg">Preenchido corretamente</p>')
    }

    if(input1.id ==='input_email_cadastro' && input1.value !== '')
    {
        let testeemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(!testeemail.test(input1.value))
        {
            msg.innerHTML=(' <i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">E-mail não é valido</p>')
            icon1.classList.add('error_icon')
            input1.classList.add('error_campo')
            botao()
     
        }
        else
        {
            icon1.classList.remove('error_icon')
            input1.classList.remove('error_campo')
            msg.innerHTML = (' <i class="bi bi-exclamation-circle-fill corretmsg"></i> <p class="corretmsg">Preenchido corretamente</p>')
            botao()
        }
    }

    if((input1.id ==='senha_cadastro' || input1.id==='senha_confirmacao') && input1.value !== '') //verifica se o campo enviado é a senha ou confirnação de senha
    {
        if(senhaCadastro.value!==senhaConfirmacao.value) //senhas não conferem
        {
            msg.innerHTML=(' <i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Senhas não conferem</p>')
            iconSenha.classList.add('error_icon')
            iconConfirma.classList.add('error_icon')
            senhaCadastro.classList.add('error_campo')
            senhaConfirmacao.classList.add('error_campo')
            botao()
        }
        else
        {
            iconSenha.classList.remove('error_icon')
            iconConfirma.classList.remove('error_icon')
            senhaCadastro.classList.remove('error_campo')
            senhaConfirmacao.classList.remove('error_campo')

            if((senhaCadastro.value.length<8 || senhaConfirmacao.value.length<8)) //valida tamanhos das senhas
            {
                msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i>Senha precisa de no minimo 8 caracteres<p class="errormsg"></p>')
                iconSenha.classList.add('error_icon')
                iconConfirma.classList.add('error_icon')
                senhaCadastro.classList.add('error_campo')
                senhaConfirmacao.classList.add('error_campo')
                botao()
            }
            else
            {
                msg.innerHTML = (' <i class="bi bi-exclamation-circle-fill corretmsg"></i> <p class="corretmsg">Preenchido corretamente</p>')
                iconSenha.classList.remove('error_icon')
                iconConfirma.classList.remove('error_icon')
                senhaCadastro.classList.remove('error_campo')
                senhaConfirmacao.classList.remove('error_campo')
                botao()
            }
        }
    }
}

document.getElementById('btn_cadastro').addEventListener('click', function(event) // se o botao de submit do cadastro for clicado
{
    const inputs = document.querySelectorAll('.campo_login')
    const icons = document.querySelectorAll('[name="icon_cadastro"]')
    const check = document.getElementById('termo')
    const senhaCadastro = document.getElementById('senha_cadastro')
    const senhaConfirmacao = document.getElementById('senha_confirmacao')
    let camposvalidacaos = false
    const msg = document.getElementById('div_error')

    inputs.forEach(function(input, index) // verifica e manda todos os campos para a função valida
    {
        if (senhaCadastro.value === '') 
        {
            camposvalidacaos = true
            validacao(senhaCadastro.id, "icon_cadastro")
        }

        if (senhaConfirmacao.value === '') 
        {
            camposvalidacaos = true
            validacao(senhaConfirmacao.id, "icon_confirma")  
        }

        if (input.value === '')
        {
            if(input.id!=="email_login" && input.id!=="senha_login")
            {

                camposvalidacaos = true
                let icon = icons[index]
                console.log(index + " " + icon.id)
                
                validacao(input.id, icon.id)
                return
            }
            else
            {
                validacao("input_name_cadastro", "icon_name_cadastro")
                validacao("input_user_cadastro", "icon_user_cadastro")
                return
            }
        }

        if (!check.checked) 
        {
            msg.innerHTML = ('<i class="bi bi-exclamation-circle-fill errormsg"></i><p class="errormsg">Você deve aceitar os termos de uso e privacidade</p>')
            check.required = true;    
        }
        else
            msg.innerHTML = ('')
    })
})

function emailValida() 
{
    // Verifique se as senhas coincidem
    let testeemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = document.getElementById('input_email_cadastro')

    if(!testeemail.test(email.value))
        return false; // Senhas não conferem ou são muito curtas
    
    return true; // Senhas conferem e têm comprimento suficiente
}

function senhaValida() 
{
    const senhaCadastro = document.getElementById('senha_cadastro')
    const senhaConfirmacao = document.getElementById('senha_confirmacao')
    
    if (senhaCadastro.value !== senhaConfirmacao.value || senhaCadastro.value.length < 8 || senhaConfirmacao.value.length < 8) 
        return false;
    
    return true;
}

function senhaAltera() 
{
    const senhaCadastro = document.getElementById('senha_cadastro')
    const senhaConfirmacao = document.getElementById('senha_confirmacao')
    const btnCadastro = document.getElementById('btn_cadastro')
    
    if (senhaCadastro.value !== senhaConfirmacao.value || senhaCadastro.value.length < 8 || senhaConfirmacao.value.length < 8) 
        btnCadastro.disabled = true;
    else
        btnCadastro.disabled = false;  
}

function botao()
{
    const btnCadastro = document.getElementById('btn_cadastro')

    if (emailValida() && senhaValida())
        btnCadastro.disabled = false;
    else 
        btnCadastro.disabled = true;
    
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