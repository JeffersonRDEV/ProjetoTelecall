//DARK-MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})

//email validador de acordo com @ e . //



function validatorEmail(emailform) {
  let emailPattern =
    /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
  return emailPattern.test(emailform);
}

//Letras fica maiores//
function maiuscula(texto) {
  texto.value = texto.value.toUpperCase();

}