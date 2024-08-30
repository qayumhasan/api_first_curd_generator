[![License](https://poser.pugx.org/andreacivita/api-crud-generator/license)](https://packagist.org/packages/andreacivita/api-crud-generator)

# Laravel | API First CRUD Generator

This Generator package provides generators of Models, Controllers, Request, Routes for a painless development. 

## INSTALL

Install the package through [Composer](https://getcomposer.org/).

Run the Composer require command from the Terminal:

```sh
composer require qayum/api-first-crud-generator --dev
```

## USAGE

Usage of this package is very simple.

First, let's supposing I want to generate CRUD.

So, we run

```sh
php artisan make:crud Product
```

No further options required. It will create a controller,model,validation,migration file and API routes!

## ROUTING

Routes will follow Route::apiResource() Schema (default routing schema provided by Laravel).

Example: i'm generating Product crud

| Route         | Method           | Operation        |
| ------------- |:----------------:| ----------------:|
| products           | GET              | Get all products     |
| products/{id}      | GET              | Find product by id   |
| products           | POST             | Insert a new product |
| products/{id}      | PUT / PATCH      | Update product by id |
| products/{id}      | DELETE           | Delete product by id |


# Remember that all api routes have 'api/' prefix.

## AUTHORS 

This package has been originally developed by [Qayum Hasan](https://github.com/qayumhasan)
