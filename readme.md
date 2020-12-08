New project :- composer create-project --prefer-dist laravel/laravel blog "5.4.*"

# Create a new model.
php artisan make:model ModelName

php artisan make:controller NameController --resource


DB tebal command :- php artisan make:migration create_name_table

php artisan migrate 
-------------------------------------------------------------------------------------------------------------------------------------------
database laravel

sepe 1

create a migration file called create_articles_table with the help of the following the 

command :- php artisan make:migration create_articles_table

--------------------------------------------------------------------------------------------------------------------------------------------

stap 2

Table Structure:-
id, title, description, author, created_at, updated_at

          ------------------------ex-----------------------------------

  public function up()
    {
        Schema::create('tabal name', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('pass', 100);
            $table->string('email', 100);
            $table->timestamps();

        });
    }
------------------------------------------------------------------------------------------------------------------------------------

stap 3

command :- php artisan migrate 

-----------------------------------------------------------------------------------------------------------------------------------
stap 4

create a controller called "ArticleController" with the help of artisan 

command :- php artisan make:controller nameofController

it will create a ArticleController controller in controllers folder.
----------------------------------------------------------------------------------------------------------------------------------
web.php
Route::get('/', 'shop@fname');
-------------------------------------
Route::get('/', 'shop@fname');
-------------------------------------
shop.php
function fname()
    {
        echo"hu sav k nay";
    }

-----------view retarn--------------

class shop extends Controller
{
    function fname()
    {
        return view ('index');
    }
}
-------------------------------------------------------------------------------------------------------------------------------------


