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

  //DARK-MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})
