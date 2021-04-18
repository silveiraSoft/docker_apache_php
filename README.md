"# docker_apache_php" 
********CRUD de gestão de desenvolvedores***********
O CRUD de gestão de desenvolvedores deve ser uma aplicação SPA e deve usando uma API e
Desenvolver uma API JSON REST na linguagem a sua escolha, que utilize os métodos (GET, POST, PUT, DELETE). 
DIFERENCIAL PARA VAGA SENIOR - Frontend
UI/UX fica a critério do desenvolvedor, porém deverá ser SPA (single-page application) e atender o consumo de todos endpoints da API
Configuração e inicialização do projeto:
FRONT do projeto
http://localhost/apps_2021/crud_gazin

Arquivos fontes do CRUD para a gestão de desenvolvedores disponível a partir da seguinte URL:
https://github.com/silveiraSoft/docker_apache_php
A seguir se mostra a URL e sua estrutura para o funcionamento do sistema.
http://localhost/apps_2021/crud_gazin
Passos para criar a imagem e o container para o front usando Docker.
Foi criada uma estrutura de um projeto PHP para mostrar o uso e experiência na linguagem PHP embora não era necessário fazer arquivos php para implementar o front deste projeto.
Para o front do projeto foi utilizado o Bootstrap4, Jquery, DataTables, Javascript, html5, CSS3.
Foi aplicado Ajax para chamar a API. 
Passos para criar a imagem e o container necessário para poder executar o projeto usando Docker.
1-	 Baixe o FRONT do projeto para seu ambiente local de desenvolvimento a partir do seguinte repositório: https://github.com/silveiraSoft/docker_apache_php
2-	 Abra a linha de comando ou Shell e entre na pasta raiz onde está o arquivo Dockerfile.
3-	 Executes os seguintes comandos para cria a imagem e o container usando docker:
..> docker build -t adalbertosn/apache-php:latest .
O apache, servidor para executar o php vai usar a porta 80, assegure-se que não esteja sendo usada esta porta no docker. 
Tenha em conta a especificação e uso desta porta 80 e do domínio localhost para evitar problemas de CORS ao acessar a API.
No comando seguinte substitui o caminho que está especificado depois da opção -v pelo caminho completo até chegar a pasta code que se obteve usando o passo 1.
..> docker container run --name debian -d -it -p 80:80 -v E:\app_docker\docker-apache-php\code:/var/www/html adalbertosn/apache-php:latest
..> docker ps
O comando anterior permite validar se está iniciado o container e permite visualizar o comando que está sendo executado.
4-	 Abra o front do projeto a partir da URL seguinte: http://localhost/apps_2021/crud_gazin
