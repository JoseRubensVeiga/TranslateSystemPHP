
# Sistema de tradução com PHP
## O sistema a seguir tem o intuito de facilitar a tradução entre páginas

Este projeto usa as sessões para manipular os textos que serão apresentados em tela dentro de um site ou sistema escrito em PHP. Em vez de recriar o site em inglês e alternar as navegações, é possível fazer a tradução dinâmica do texto em português para inglês (ou qualquer outro idioma) de forma dinâmica.
## Estrutura de pastas

 - helpers
	 - Contém a lógica de programação para a inicialização, definição e utilização das sessões.
 - languages
	 - Contém os arquivos de tradução. *Considere que o idioma padrão é o português*.
## Adicionando novos idiomas
Para isso basta criar um novo arquivo .json dentro da pasta languages com a seguinte estrutura: nome_do_idioma.json.
## Variáveis de Ambiente
Estão contidas dentro do arquivo env.php. Lá contém o idioma padrão que inicializará seu site ou sistema. porém a `SESSION['language']` poderá ser alterada de acordo com a escolha do usuário.
## Como alterar o idioma contido na sessão do usuário
Para isso, é necessário criar um arquivo `setlanguage.php`

    <?php
    // incluindo as funções do pacote
    require 'helpers/helper.php';
    // inserindo uma nova linguagem com base na requisição feita pela url
    // exemplo de url localhost/setlanguage.php?lang=uk
    setLanguage($_GET['lang']);
    // redirecionando para a página principal
    header('Location: index.php');

## Arquivos .json
Os arquivos .json dentro de "languages" são os arquivos de tradução das suas respectivas linguagens. Cada um dos arquivos deve conter o conteúdo que seja traduzido e a tradução do mesmo.

O formato .json é composto por um par de chaves que engloba tudo  e dentro é contido cada tradução que tem o seguinte formato:

    {
    	"palavra ou frase a se traduzir" : "Tradução"
    }


## Erros

 - Caso ele não ache o arquivo para tradução, ele apontará um erro.
 - Caso ele não ache o índice para traduzir ele retornará o próprio texto.


## Docs
Documentação do PHP
[https://www.php.net/docs.php](https://www.php.net/docs.php)
Documentação do JSON
[https://www.json.org/](https://www.json.org/)
