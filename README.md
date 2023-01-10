## CERTIFICADOS

Aplicação criada utilizando Laravel.

## 1 - Passo

Baixe o codigo e execute composer install dentro do diretório.

## 2 - Gere a chave da aplicação

Execute o comando abaixo dentro do diretório.

php artisan key: generate

Armazene a chave.

## 3 - Crie um .env

Faça uma cópia do arquivo .env.example e renomeie para .env

Na variável APP_KEY= adicione a chave que você gerou.

## 4 - Configure seu banco de dados

No arquivo .env configure as variáveis de banco de dados (crie antes o banco de dados).

Importe o conteúdo do arquivo certificados.sql e execute no seu banco de dados.

## 5 - Execute a aplicação

No terminal execute o comando php artisan serve

Acesse o sistema pelo endereço http://localhost:8000

## By

Desenvolvido por Herton Vilarim (hertonk@gmail.com)
