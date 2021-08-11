# Tall Crud Example

An application showing the examples of Livewire Component created using [tall-crud-generator](https://github.com/ascsoftw/tall-crud-generator) Package


## Installation

Clone the repo locally:

```sh
git clone https://github.com/ascsoftw/tall_crud_example.git
cd tall_crud_example
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create Mysql Database and configure the values in .env file


Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Start the dev server

```sh
php artisan serve
```

Open the Link in Browser. Login using following credentials:

Email: user1@localhost.com

Password: user1@localhost.com
