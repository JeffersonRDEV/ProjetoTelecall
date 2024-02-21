$(document).ready(function() {

	function limpa_formulário_cep() {
		// Limpa valores do formulário de cep.
		$("#rua").val("");
		$("#bairro").val("");
		$("#cidade").val("");
		$("#uf").val("");
		$("#ibge").val("");
	}
	
	//Quando o campo cep perde o foco.
	$("#CEPform").blur(function() {

		//Nova variável "cep" somente com dígitos.
		var cep = $(this).val().replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if(validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				$("#endform").val("");
				$("#cidadeform").val("");
				$("#ufform").val("");
				$("#bairroform").val("");
			

				//Consulta o webservice viacep.com.br/
				$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

					if (!("erro" in dados)) {
						//Atualiza os campos com os valores da consulta.
						$("#endform").val(dados.logradouro);
						$("#cidadeform").val(dados.localidade);
						$("#ufform").val(dados.uf);
						$("#bairroform").val(dados.bairro);
						CEPform.setAttribute ("style", "border-color:green")
						endform.setAttribute("style", "border-color:green")
						cidadeform.setAttribute("style", "border-color:green")
						ufform.setAttribute("style", "border-color:green")
						bairroform.setAttribute("style", "border-color:green")
						
					} //end if.
					else {
						//CEP pesquisado não foi encontrado.
						limpa_formulário_cep();
						alert("CEP não encontrado.");
						CEPform.setAttribute ("style", "border-color:red")
						endform.setAttribute("style", "border-color:red")
						cidadeform.setAttribute("style", "border-color:red")
						ufform.setAttribute("style", "border-color:red")
						bairroform.setAttribute("style", "border-color:red")
					}
				});
			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				CEPform.setAttribute ("style", "border-color:red")
				endform.setAttribute("style", "border-color:red")
				cidadeform.setAttribute("style", "border-color:red")
				ufform.setAttribute("style", "border-color:red")
				bairroform.setAttribute("style", "border-color:red")
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	});
});
  


  function ajustaLoginSenha(v) {
    //Remove numeros
    v.value = v.value.replace(/\d+/g, '');
}

function maiuscula(texto) {
    texto.value = texto.value.toUpperCase();
  }

  function ajustaNumeros(v) {
    // Remove os caracteres não numéricos
    v.value = v.value.replace(/\D/g, "");
  }


$("#telform").mask("+55(00)0000-0000")
$("#celform").mask("+55(00)00000-0000")
$("#CEPform").mask("00.000-000")
$("#cpfform").mask("000.000.000-00")


//email validador de acordo com @ e . //

emailform.addEventListener("keyup", () => {
    if (validatorEmail(emailform.value) !== true) {
      emailform.setAttribute("style", "border-color:red")
  
    } else {
      emailform.setAttribute("style", "border-color:green")
    }
  });
  
  function validatorEmail(emailform) {
    let emailPattern =
      /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    return emailPattern.test(emailform);
  }






  //validação de CPF//

  function valida() {
	if (valida_cpf(document.getElementById('cpfform').value)){
	    cpfform.setAttribute ("style", "border-color:green")}
		
	else{
		//alert('CPF Inválido');
		cpfform.setAttribute ("style", "border-color:red")
		alert ("CPF Inválido")}

}

function valida_cpf() {

var Cpf = cpfform.value.replace(/\D/g, '');

		var Soma;
		var Resto;
		Soma = 0;
	
		//verifica numeros iguais
	  if (Cpf== "00000000000") return false;
	   if (Cpf=="11111111111") return false;
		if (Cpf=="22222222222") return false;
			if (Cpf=="33333333333") return false;
				if (Cpf=="55555555555") return false;
					if (Cpf=="66666666666") return false;
					if (Cpf=="77777777777") return false;
						if (Cpf=="88888888888") return false
							if (Cpf=="99999999999") return false;
							
	  

	//segunda verificação//

	  for (i=1; i<=9; i++) 
		  Soma = Soma + parseInt(Cpf.substring(i-1, i)) * (11 - i);
		 Resto = (Soma * 10) % 11;
	
		
		if ((Resto == 10) || (Resto == 11)){
			Resto = 0;

		}  

		if (Resto != parseInt(Cpf.substring(9, 10)) ){
			return false;
		} 
	
	  	Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(Cpf.substring(i-1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;
	
		if ((Resto == 10) || (Resto == 11)){
			Resto = 0;
		}  
			
		if (Resto != parseInt(Cpf.substring(10, 11) ) ) {
			return false;
		}else{
			return true;
		}
		
		
}

//validação de nome//

nomeform.addEventListener("keyup" , () => {
	if(nomeform.value.length <= 15){
	   nomeform.setAttribute ("style", "border-color:red")
	   
	
	} else{
		nomeform.setAttribute ("style", "border-color:green")
          }
})

//validação de materno//

nomemae.addEventListener("keyup" , () => {
	if(nomemae.value.length <= 15){
		nomemae.setAttribute ("style", "border-color:red")

		
    } else{
		nomemae.setAttribute ("style", "border-color:green")
          }
})

//validação de numero da rua ou apartamento//

numform.addEventListener("keyup" , () => {
	if(numform.value.length <= 0){
		numform.setAttribute ("style", "border-color:red")
		
    } else{
		numform.setAttribute ("style", "border-color:green")
          }
})

//validação login//

loginform.addEventListener("keyup" , () => {
	if(loginform.value.length <= 5){
		loginform.setAttribute ("style", "border-color:red")
		
    } else{
		loginform.setAttribute ("style", "border-color:green")
          }
})

//validação de celular//

celform.addEventListener("keyup", () => {
	if (celform.value.length <= 11) {
		celform.setAttribute("style", "color: red");
	    celform.setAttribute("style", "border-color: red");
	  
	} else {
		celform.setAttribute("style", "color: green");
	  
	celform.setAttribute("style", "border-color: green");
	  validphone = true;
	}
  });

  //validação de telefone-fixo//

  telform.addEventListener("keyup", () => {
	if (telform.value.length <= 12) {
		telform.setAttribute("style", "color: red");
	    telform.setAttribute("style", "border-color: red");
	  
	} else {
		telform.setAttribute("style", "color: green");
	  
	telform.setAttribute("style", "border-color: green");
	  validphone = true;
	}
  });

  //senha e confirmar senha//

senha.addEventListener ("keyup",()=>{
	if (senha.value.length <=7){
		senha.setAttribute("style", "border-color:red")
    } else{
		senha.setAttribute("style", "border-color:green")
	 }
})

confirmasenha.addEventListener ("blur",()=>{
	if (senha.value != confirmasenha.value ){
		confirmasenha.setAttribute("style", "border-color:red")
		alert("senhas precisam ser iguais")
    } else{
		confirmasenha.setAttribute("style", "border-color:green")
	 }
})

//Letras fica maiores//
function maiuscula(texto) {
    texto.value = texto.value.toUpperCase();
 
}


//DARK-MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})

   

// Aguarda até que o DOM esteja completamente carregado para garantir que todos os elementos da página estejam disponíveis
document.addEventListener('DOMContentLoaded', function () {
    // Obtém a referência para o ícone de olho pelo seu ID
    const showPasswordIcon = document.getElementById('showPassword');
    // Obtém a referência para o campo de senha pelo seu ID
    const senhaInput = document.getElementById('senha');
    // Obtém a referência para o campo de confirmação de senha pelo seu ID
    const confirmarSenhaInput = document.getElementById('confirmasenha');

    // Adiciona um ouvinte de evento de clique ao ícone de olho
    showPasswordIcon.addEventListener('click', function () {
        // Verifica se o tipo do campo de senha é 'password'
        if (senhaInput.type === 'password') {
            // Se o tipo for 'password', muda para 'text' para mostrar a senha
            senhaInput.type = 'text';
            confirmarSenhaInput.type = 'text'; // Também muda o campo de confirmação para 'text'
        } else {
            // Se o tipo for 'text', muda de volta para 'password' para ocultar a senha
            senhaInput.type = 'password';
            confirmarSenhaInput.type = 'password'; // Também muda o campo de confirmação para 'password'
        }
    });
});

