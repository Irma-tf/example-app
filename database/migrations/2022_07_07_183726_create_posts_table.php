<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

//class create CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

/*NOTE: error with migrations:

PS C:\Users\Irma\example-app> php artisan make:controller PostsController
PS C:\Users\Irma\example-app> php artisan make:model Post -m
Model created successfully.

Created Migration: 2022_07_07_183726_create_posts_table

PS C:\Users\Irma\example-app> php artisan migrate

   Illuminate\Database\QueryException 

  could not find driver (SQL: select * from information_schema.tables where table_schema = exampleapp and table_name = migrations and table_type = 'BASE TABLE')

  at C:\Users\Irma\example-app\vendor\laravel\framework\src\Illuminate\Database\Connection.php:759
    755▕         // If an exception occurs when attempting to run a query, we'll format the error
    756▕         // message to include the bindings with SQL, which will make this exception a
    757▕         // lot more helpful to the developer instead of just the database's errors.
    758▕         catch (Exception $e) {
  ➜ 759▕             throw new QueryException(
    760▕                 $query, $this->prepareBindings($bindings), $e
    761▕             );
    762▕         }
    763▕     }

  1   C:\Users\Irma\example-app\vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:70
      PDOException::("could not find driver")

  2   C:\Users\Irma\example-app\vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:70
      PDO::__construct()
      
commented out: extension=php_mysql.dll in php.ini - still same error

      
      
      */