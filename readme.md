<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Iniciando o projeto

É necessário ter o composer instalado em sua máquina.

Primeiramente baixe o projeto, em seguida, descompacte o projeto e coloque na pasta do seu servidor local.

Abra o terminal e vá até o diretório do projeto. Agora use o comando composer update e aguarde o composer adicionar as dependências do projeto.

Agora renomeei o arquivo .env.exemplo para .env . Em seguida, configure no mesmo arquivo as configurações do banco de dados mysql. Crie o nome do seu banco no DB_DATABASE, DB_USERNAME com o nome do usuário da rede local e o DB_PASSWORD com a senha.

Vá no seu gerenciador de banco de dados e crie um database com o mesmo nome adicionado no DB_DATABASE do arquivo .env.

Agora use o comando php artisan key:generate para definir a chave da aplicação do projeto.

Para criar as tabelas no seu banco de dados, use o comando php artisan migrate, depois de concluir, as todas as migrations que se encontram na pasta database/migrations serão adicionadas no seu database. Caso queira refazer as migrations basta usar o comando php artisan migrate:fresh.

Para popular as tabelas do seu banco, use o comando php artisan db:seed, esse comando irá popular as tabelas alunos, professores e cursos com os dados que se encontram na pasta database/seed.

Agora use o comando php artisan serve, para iniciar seu projeto no servidor local. Na url do seu navegador, digite http://localhost:8000

Pronto!