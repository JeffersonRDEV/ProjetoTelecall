
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

    //CRIAR PDF
    function CriaPDF() {
        var tabela_aLunos = document.getElementById('tabela').innerHTML;
        var style = "<style>";
        style = style + "table {width: 100%;font: 20px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";
        // CRIA UM OBJETO WINDOW
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>Usuários</title>');   // <title> CABEÇALHO DO PDF.
        win.document.write(style);                                     // INCLUI UM ESTILO NA TAB HEAD
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(tabela_aLunos);                          // O CONTEUDO DA TABELA DENTRO DA TAG BODY
        win.document.write('</body></html>');
        win.document.close(); 	                                         // FECHA A JANELA
        win.print();                                                            // IMPRIME O CONTEUDO
    }