# Instalação

Instruções para a instalação do sistema em computadores Windows:

## Configurando o ambiente

1. Instalar o [XAMPP ^8.0](https://www.apachefriends.org/pt_br/index.html)
2. Instalar o [Composer](https://getcomposer.org/download/)
3. Iniciar os Serviços **Apache** e **MySQL** no XAMPP

## Clonando e instalando o projeto

1. Clonar o esse repositório na pasta `C:\xampp\htdocs`
2. Copiar e colar o arquivo `.env.exemple` e renomear o arquivo copiado para `.env`
3. Abrir o terminal e usar o comando *cd* para se mover para `C:\xampp\htdocs\Grupo-1-PI--Sa-de-e-Bem-Estar\Sistema`
4. No terminal rodar o comando `composer install` para instalar o Laravel
5. Ainda no terminal rodar o comando `php artisan key:generate` para gerar a APP_KEY do Laravel
6. Continuando no terminal rodar o comando `php artisan migrate` para iniciarmos o banco de dados. OBS: Esse passo pode retornar um erro enquanto ainda não temos um banco de dados, então sem problemas!
7. Fechar o terminal
8. Entrar na url `localhost/Grupo-1-PI--Sa-de-e-Bem-Estar/Sistema` para acessar o sistema
9. Pronto, agora é só curtir o sistema  :smiley:
