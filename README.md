## Iniciando o projeto

Para poder abrir o projeto, você precisa executar os seguintes comandos no terminal com o projeto aberto (e tendo PHP && Composer instalados em sua máquina):

### Para instalar as dependências:
```bash
composer install
```

### Criar uma cópia do arquivo .env.example e renomeá-la para .env:
```bash
cp .env.example .env
```

### Gerar uma nova chave de aplicação:
```bash
php artisan key:generate
```

### Executar as migrações para criar as tabelas no banco de dados:
```bash
php artisan migrate
```

### Para servir o projeto na porta default:
```bash
php artisan serve
```

## Criando o banco de dados no MYSQL:
```bash
create database bd_laravel;
```

### Entrar no banco:
```bash
use bd_laravel;
```

## Execute o comando para realizar a migration (terminal):
```bash
php artisan migrate
```

