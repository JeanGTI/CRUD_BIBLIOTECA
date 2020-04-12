# CRUD do teste Unyleya.
*Repositório destinado ao Crud básico de autores, editores, gêneros e livros.*

Para execução local deste projeto é necessário php versão 7.2.26.

Necessário Composer 1.10.1 e Framework Laravel versão 7.4.0 (versão que foi utilizada na elaboração do projeto), Banco de dados MySql.
## Instalação
O primeiro passo é clonar o repositório, utilize o seguinte comando:
>git clone  [https://github.com/JeanGTI/CRUD_BIBLIOTECA.git]

Deve instalar o [Composer](https://getcomposer.org/Composer-Setup.exe).

Instalação Laravel: No Power Shell, Terminal ou CMD utilizar o comando a seguir, na pasta onde o projeto se encontra:

>composer global require "laravel/installer"

Logo apos instalar o pacote npm execute o comando na pasta raiz do projeto:
>npm install

Ai então partimos pro arquivo .env (Importante para comunicação com banco de dados). Renomear o arquivo **".env.example"** para apenas **".env"**
E alterar os dados:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=biblioteca
    DB_USERNAME=root
    DB_PASSWORD=

No Mysql cria a base de dados com o mesmo nome do `DB_DATABASE=` **biblioteca**

Rodar também o comando para funcionamento do CSS e JavaScript
>npm run dev

Para gerar chave e criação das tabelas através do Power Shell, Terminal ou CMD, e digitar o seguinte comando:
>php artisan key:generate
>php artisan migrate

E para iniciar o servidor digite:
>php artisan serve.

Deixarei no git um arquivo sql na raiz com o nome `insertTetse.sql` com os dados para teste.
E-mail para login no crud:`teste.teste@teste.com`
Senha:`testeteste`

Qualquer duvida estou a disposição. [jean.aug02@gmail.com]