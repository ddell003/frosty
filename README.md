# Frosty - a laravel web application

## How it works

### Routing

if you look in routes/web.phpyou will all the endpoints available for the application. Routes have restful endpoints (GET PUT POST DELETE).

Ex. get/menu

We make a variable called data and make it an array.

We then make a model request to get the menu sections and assign it to the array. The model request returns a collection (an array of objects). We then pass the variable data to the view called menu.blade.php located in resources/views(views contain the html logic that gets passed to the browser).

### Models (singular of the tabel it references ie table Orders model Order)

Models interact with the database. We have a table called menu_sections, so we make a model called MenuSection. If you say MenuSection::get() a database call will be made which will go out and get all menu sections. We also have a tabel called menu items which has a foreign key to menu_sections. We define this relationship in the model MenuSection. We make a function called items. Itmes relate to the section through the section_id on the menu_items table. 

### Views

Views contain the html we will render for the user. We can utilized the data passed to the view from the router to enhance the view. 

### Database

For database we are using a sqlight database. To see the structure of the database you can go to the command line and run php artisan tinker. Then type DB::select('SELECT NAME FROM sqlite_master WHERE type="table"');

To make a new table with a model and controller type into the command line: php artisan make:model OrderItem -mc.
This tells artisan (composer library, composer i a package library) to make me a model called OrderItem and a migration to create a tabel called order_items


