function Email() 
{
    email = document.getElementById('email')
    expressao = /^.*@.*.com$/g;
    texto = email.value
    resposta = expressao.test(texto);

    
    if (resposta == false) 
    {
        email.classList.remove('certo');
        email.classList.add('errado'); 
    }
    if (resposta == true) 
    {
        email.classList.remove('errado');
        email.classList.add('certo');
    }
}

function Senha(){
    if (senha.value==senha2.value){
        senha2.classList.remove('errado');
        senha2.classList.add('certo');
    }else{
        senha2.classList.remove('certo');
        senha2.classList.add('errado');
    }}

var input = document.getElementById('senha');
var button = document.getElementById("cadeado");

function Ver(){

  if (document.getElementById('senha').type == "password") {
    document.getElementById('senha').type = "text";
  } else {
    document.getElementById('senha').type = "password";
  }
}