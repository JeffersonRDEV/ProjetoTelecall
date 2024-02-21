
//validação login//

loginform.addEventListener("keyup" , () => {
	if(loginform.value.length <= 5){
		loginform.setAttribute ("style", "border-color:red")
		
    } else{
		loginform.setAttribute ("style", "border-color:green")
          }
})

senha.addEventListener ("keyup",()=>{
	if (senha.value.length <=7){
		senha.setAttribute("style", "border-color:red")
    } else{
		senha.setAttribute("style", "border-color:green")
	 }
})

//remove numeros//

function ajustaLoginSenha(v) {
    //Remove numeros
    v.value = v.value.replace(/\d+/g, '');
}

//deixa as letras maiores/

function maiuscula(texto) {
    texto.value = texto.value.toUpperCase();
 
}

//DARK-MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})


document.getElementById("hCor").style.color="#FF00e4";


function mudarCorDark() {
  // Seletor do elemento
  var elemento = $('hCor');

  // Nova cor do texto no modo dark
  var novaCor = '#00ff00'; // Substitua pela cor desejada

  // Aplicar a nova cor usando a função css()
  elemento.css('color', novaCor);
}

// Chamada da função ao carregar a página (apenas para exemplo)
$(document).ready(function () {
  mudarCorDark();
});



