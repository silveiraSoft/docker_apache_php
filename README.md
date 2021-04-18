"# docker_apache_php" 
<br>********CRUD de gestão de desenvolvedores***********
<br>O CRUD de gestão de desenvolvedores deve ser uma aplicação SPA e deve usando uma API e
<br>Desenvolver uma API JSON REST na linguagem a sua escolha, que utilize os métodos (GET, POST, PUT, DELETE). 
<br>DIFERENCIAL PARA VAGA SENIOR - Frontend
<br>UI/UX fica a critério do desenvolvedor, porém deverá ser SPA (single-page application) e atender o consumo de todos endpoints da API
<br>Configuração e inicialização do projeto:
<br>FRONT do projeto
<br>http://localhost/apps_2021/crud_gazin

<br>Arquivos fontes do CRUD para a gestão de desenvolvedores disponível a partir da seguinte URL:
https://github.com/silveiraSoft/docker_apache_php
<br>A seguir se mostra a URL e sua estrutura para o funcionamento do sistema.
<br>http://localhost/apps_2021/crud_gazin
<br>Passos para criar a imagem e o container para o front usando Docker.
<br>Foi criada uma estrutura de um projeto PHP para mostrar o uso e experiência na linguagem PHP embora não era necessário fazer arquivos php para implementar o front deste projeto.
<br>Para o front do projeto foi utilizado o Bootstrap4, Jquery, DataTables, Javascript, html5, CSS3.
<br>Foi aplicado Ajax para chamar a API. 
<br>Passos para criar a imagem e o container necessário para poder executar o projeto usando Docker.
<br>1-	 Baixe o FRONT do projeto para seu ambiente local de desenvolvimento a partir do seguinte repositório: https://github.com/silveiraSoft/docker_apache_php
<br>2-	 Abra a linha de comando ou Shell e entre na pasta raiz onde está o arquivo Dockerfile.
<br>3-	 Executes os seguintes comandos para cria a imagem e o container usando docker:
<br>..> docker build -t adalbertosn/apache-php:latest .
<br>O apache, servidor para executar o php vai usar a porta 80, assegure-se que não esteja sendo usada esta porta no docker. 
<br>Tenha em conta a especificação e uso desta porta 80 e do domínio localhost para evitar problemas de CORS ao acessar a API.
<br>No comando seguinte substitui o caminho que está especificado depois da opção -v pelo caminho completo até chegar a pasta code que se obteve usando o passo 1.
<br>..> docker container run --name debian -d -it -p 80:80 -v E:\app_docker\docker-apache-php\code:/var/www/html adalbertosn/apache-php:latest
<br>..> docker ps
<br>O comando anterior permite validar se está iniciado o container e permite visualizar o comando que está sendo executado.
<br>4-	 Abra o front do projeto a partir da URL seguinte: http://localhost/apps_2021/crud_gazin
