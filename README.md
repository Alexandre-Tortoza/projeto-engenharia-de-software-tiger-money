# Projeto Laravel – Guia de Instalação e Execução

## Requisitos

Certifique-se de ter os seguintes componentes instalados:

* PHP 8.2 ou superior
* Composer
* Node.js e npm
* SQLite (já incluso na maioria dos sistemas Linux e macOS)

---

## 1. Clonar o repositório

```bash
git clone https://github.com/usuario/projeto-engenharia-de-software-tiger-money.git
cd projeto-engenharia-de-software-tiger-money
cd app/
```

---

## 2. Instalar dependências do Laravel

```bash
composer install
```

---

## 3. Criar e configurar o arquivo `.env`

Crie o arquivo de ambiente a partir do exemplo:

```bash
cp .env.example .env
```

---

## 4. Criar o banco SQLite

```bash
touch database/database.sqlite
```

---

## 5. Gerar a chave da aplicação

```bash
php artisan key:generate
```

---

## 6. Executar as migrações e seeders (opcional)

```bash
php artisan migrate
php artisan db:seed
```

---

## 7. Instalar dependências do frontend

```bash
npm install
```

---

## 8. Rodar o ambiente completo

O comando abaixo executa o servidor Laravel, o listener de filas, o monitor de logs e o Vite simultaneamente.

```bash
composer run dev
```

Ao final, você verá algo como:

```
Server running on http://127.0.0.1:8000
VITE v7.x ready on http://localhost:5173
```

---

## 9. Acessar a aplicação

* Backend Laravel: [http://127.0.0.1:8000](http://127.0.0.1:8000)
* Frontend Vite (assets): [http://localhost:5173](http://localhost:5173)

---

## Estrutura básica

```
.
├── app/
├── bootstrap/
├── config/
├── database/
│   └── database.sqlite
├── public/
├── resources/
│   └── js/
│   └── views/
├── routes/
│   └── web.php
└── vite.config.js
```

---

## Observação

Durante o desenvolvimento, mantenha o comando `composer run dev` ativo em um terminal, pois ele recarrega o frontend, as filas e os logs em tempo real.
