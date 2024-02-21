// Obtendo o elemento HTML com o ID 'pesquisar'
var search = document.getElementById('pesquisar');

// Adicionando um ouvinte de eventos para a tecla pressionada no elemento de pesquisa
search.addEventListener("keydown", function(event) {

    // Verificando se a tecla pressionada é a tecla "Enter"
    if (event.key === "Enter") 
    {
        // Se a tecla for "Enter", chama a função searchData()
        searchData();
    }
});

// Função que redireciona para 'sistema.php' com o valor atual do campo de pesquisa como parâmetro na URL
function searchData()
{
    window.location = 'sistema.php?search='+search.value;
}