# Frosty - a laravel web application

https://laravel.com/docs/5.6/installation

## About
We are making a web app for a restaurnt to use. Users will be able to see a menu and place a order if they are logged in. User can register themself and create an account. Admin user will be able to edit menu items and see orders and mark orders as done

### Schema

menu_sections |
------------- |
id            |
name          |

menu_items    |
------------- |
id            |
name          |
description   |
price         |
section_id    |

orders        |
------------- |
id            |
user_id       |
total         |
status        |

order_items   |
------------- |
id            |
order_id      |
user_id       |




## Set up

1. Once you clone down the project look to see if you have .env if you dont run 
`cp .env-example .env`
2. run composer install
3. run php artian migrate
4. php artisan key:generate
5. if you have mac you can run `php artisan serve`
6. Create Users: in your terminal run:
```
php artisan user:create --first_name=Parker --last_name=Dell --email=parkerdell94@gmail.com --password=password --user_type=1
```
7. Create Random Users:
```
php artisan user:random --count=10

```

## How it works

### Routing

if you look in routes/web.php you will see all the endpoints available for the application. Routes have restful endpoints (GET PUT POST DELETE).

Ex. get/menu

We make a variable called data and make it an array.

We then make a model request to get the menu sections and assign it to the array. The model request returns a collection (an array of objects). We then pass the variable data to the view called menu.blade.php located in resources/views(views contain the html logic that gets passed to the browser).

### Models (singular of the tabel it references ie table Orders model Order)

Models interact with the database. We have a table called menu_sections, so we make a model called MenuSection. If you say MenuSection::get() a database call will be made which will go out and get all menu sections. We also have a tabel called menu items which has a foreign key to menu_sections. We define this relationship in the model MenuSection. We make a function called items. Items relate to the section through the section_id on the menu_items table. 

### Views

Views contain the html we will render for the user. We can utilized the data passed to the view from the router to enhance the view. 

### Database

For database we are using a sqlight database. To see the structure of the database you can go to the command line and run `php artisan tinker`. Then type `DB::select('SELECT NAME FROM sqlite_master WHERE type="table"');`

#### Make new tabel with model and controller

To make a new table with a model and controller type into the command line: `php artisan make:model OrderItem -mc`.
This tells artisan (composer library, composer i a package library) to make me a model called OrderItem and a migration to create a tabel called order_items

## To Do

Set up view for order


