# Sistema de tradução com PHP
## O sistema a seguir tem o intuito de facilitar a tradução entre páginas

Os arquivos json dentro de "Languages" são os arquivos de tradução das suas respectivas linguagens. Cada um dos arquivos deve conter o conteúdo que seja traduzido e a tradução do mesmo.

O formato json é composto por um par de chaves que engloba tudo  e dentro é contido cada tradução que tem o seguinte formato:
"palavra ou frase a se traduzir" : "Tradução"

A primeira string é o que será traduzido, seguido por um dois pontos ":" e a tradução.

É importante salientar que as strings são textos e são envoltos por um par de ASPAS DUPLAS.
Por conta que o tipo do arquivo é Json, então as aspas são NECESSARIAMENTE DUPLAS.

Para cada linguagem para se traduzir, será necessário criar um novo arquivo de tradução

Caso ele não ache o arquivo para tradução, ele apontará um erro.
Caso ele não ache o índice para traduzir ele retornará o proprio texto.

A linguagem da tradução será selecionada pela SESSION do PHP o arquivo env.php define a linguagem padrão, porém a SESSION['language'] poderá ser alterada de acordo com a escolha do usuário.
