Repositório destinado ao CRUD do teste Unyleya. Crud básico de autores, editores, generos e livros.

Para execução local deste projeto é necessario php versão 7.2.26.

Necessario composer 1.10.1 e Framework Laravel versão 7.4.0(versão que foi utilizada na elaboração do projeto), Banco de dados MySql (utilizado do xamp) Servidor Apache (utilizado do xamp).

O primeiro passo é clonar o repositorio, utileze o seguinte comando:
$ git clone https://github.com/JeanGTI/CRUD_BIBLIOTECA.git

Feito isso no local onde deseja rodar o projeto, deve instalar o composer e o laravel.
Instalação Laravel: No Power Shell, Terminal ou CMD utilizar o comando a seguir, na pasta onde o projecto se encontra:
$ composer global require "laravel/installer"

Logo apos intalar o pacote npm:
$ npm install

Ai então partimos pro arquivo .env(Importante para comunicação com banco de dados.)
Renomear o arquivo ".env.example" para apenas ".env".
E alterar os dados de comunicação como:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biblioteca
DB_USERNAME=root
DB_PASSWORD=

Informando assim que o nome do banco de dados será "biblioteca".
Deixarei no git um arquivo sql caso queira criar o banco pelo mySql com os dados para teste.
E-mail para login no crud: teste.teste@teste.com
Senha: testeteste

Rodar também o comando "npm run dev"
Para funcionamento do CSS e JavaScript

Para criação das tabelas basta ir ate a pasta raiz do projeto atravez do Power Shell, Terminal ou CMD, e digitar o seguinte comando (depois de ter instalado o composer e laravel): php artisan migrate

E para iniciar o servidor digite: php artisan serve.

Qualquer duvida estou a disposição. jean.aug02@gmail.com