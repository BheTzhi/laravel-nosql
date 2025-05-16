# Laravel NoSQL - Simple CRUD with MongoDB

This project is a simple CRUD application built with Laravel, utilizing MongoDB as its database.

## 🔧 Tech Stack

* Laravel (version 8/9/10)
* MongoDB (NoSQL database)
* [Jenssegers/Mongodb](https://github.com/jenssegers/laravel-mongodb) Laravel package (MongoDB Eloquent driver)

## 🚀 Installation Steps

1.  **Clone this repository:**
    ```bash
    git clone [https://github.com/BheTzhi/laravel-nosql.git](https://github.com/BheTzhi/laravel-nosql.git)
    cd laravel-nosql
    ```

2.  **Install Laravel dependencies:**
    ```bash
    composer install
    ```

3.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```

4.  **Configure MongoDB connection in `.env`:**
    ```env
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=laravel_nosql
    DB_USERNAME=
    DB_PASSWORD=
    ```

5.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Run the development server:**
    ```bash
    php artisan serve
    ```

## ✅ Features

* **Create (Insert) Data**
* **Read (List) Data**
* **Update Data**
* **Delete Data**

All data operations are stored and managed via MongoDB.

## 📚 MongoDB Laravel Model Setup

Ensure your model uses the correct base class:

```php
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tests';
}
```

# Laravel NoSQL - Simple CRUD with MongoDB

This project is a simple CRUD application built with Laravel, utilizing MongoDB as its database.

## 🔧 Tech Stack

* Laravel (version 8/9/10)
* MongoDB (NoSQL database)
* [Jenssegers/Mongodb](https://github.com/jenssegers/laravel-mongodb) Laravel package (MongoDB Eloquent driver)

## 🚀 Installation Steps

1.  **Clone this repository:**
    ```bash
    git clone [https://github.com/BheTzhi/laravel-nosql.git](https://github.com/BheTzhi/laravel-nosql.git)
    cd laravel-nosql
    ```

2.  **Install Laravel dependencies:**
    ```bash
    composer install
    ```

3.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```

4.  **Configure MongoDB connection in `.env`:**
    ```env
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=laravel_nosql
    DB_USERNAME=
    DB_PASSWORD=
    ```

5.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Run the development server:**
    ```bash
    php artisan serve
    ```

## ✅ Features

* **Create (Insert) Data**
* **Read (List) Data**
* **Update Data**
* **Delete Data**

All data operations are stored and managed via MongoDB.

## 📚 MongoDB Laravel Model Setup

Ensure your model uses the correct base class:

```php
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tests';
}
```

## Install the MongoDB package:


```Bash

composer require jenssegers/mongodb
```

## 👤 Author

BheTzhi

## 🕋 Bismillah
This project is built as a learning tool and to demonstrate Laravel integration with MongoDB.

May it be useful and bring barakah.