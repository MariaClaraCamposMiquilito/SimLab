const editar_Email = document.getElementById("editar_email")
let email = document.getElementById('email')
const editar_User = document.getElementById("editar_user")
let user = document.getElementById('user')
const btn = document.getElementById("botaoTotal")
const msg = document.getElementById('div_error')
const conteudoemail = email.textContent;
const conteudouser = user.textContent;

editar_Email.addEventListener('click', editarEmail)
editar_User.addEventListener('click', editarUser)
btn.addEventListener('click', emailValida)
btn.addEventListener('click', userValida)

function editarEmail()
{
    if (email.tagName.toLowerCase() === 'p') 
    {
        const input = document.createElement('input');
        input.type = 'email';
        input.value = '';
        input.id = 'email';
        input.name = 'email';
        input.className = 'inputusuario'
        input.placeholder = conteudoemail
        input.onchange= emailValida
        input.onblur = emailValida
        email.parentNode.replaceChild(input, email);
        email = input;
    }
}

function editarUser()
{
    if (user.tagName.toLowerCase() === 'p') 
    {
        const input = document.createElement('input');
        input.type = 'text';
        input.value = "";
        input.id = 'user';
        input.name = 'user';
        input.className = 'inputusuario'
        input.placeholder = conteudouser
        input.onchange=userValida
        input.onblur = userValida
        user.parentNode.replaceChild(input, user);
        user=input
    }
}

function emailValida()
{
    if (email.tagName.toLowerCase() === 'input') 
    {
        if(email.value === '')
        {
            msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">E-mail não é valido</p>')
            email.classList.add('error_campo')
            btn.disabled = true
        }
        else
        {
            msg.innerHTML=("")
            email.classList.remove('error_campo')

            let testeemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if(!testeemail.test(email.value))
            {
                msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">E-mail não é valido</p>')
                email.classList.add('error_campo')
                btn.disabled = true
            
            }
            else
            {
                email.classList.remove('error_campo')
                msg.innerHTML = ('')
                btn.disabled = false
            }
        }
    }
}
function userValida()
{
    if (user.tagName.toLowerCase() === 'input') 
    {
        if(user.value === '')
        {
            msg.innerHTML=('<i class="bi bi-exclamation-circle-fill errormsg"></i> <p class="errormsg">Nome de Usuário não é valido</p>')
            user.classList.add('error_campo')
            btn.disabled = true
        }
        else
        {
            msg.innerHTML=("")
            user.classList.remove('error_campo')
            btn.disabled = false
        }
    }
}

const openModal = document.querySelector('[name="open_modal"]');
const closeModal = document.querySelector('[name="close_modal"]');
const closeModal1 = document.querySelector('[name="close_modal1"]');
const modal = document.querySelector("#modal");
 
const toggleModal = () => {
	modal.classList.toggle("hide");
	fade.classList.toggle("hide");
};

[openModal, closeModal, closeModal1].forEach((el) => {
	el.addEventListener("click", () => toggleModal());
}); 