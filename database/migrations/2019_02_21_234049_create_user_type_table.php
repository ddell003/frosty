<?php

use App\UserType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        $types = [
            "Web Administer",
            "Client",
            "Customers",
            "Employees"
        ];

        foreach ($types as $type){

            $newItem = new UserType();
            $newItem->name = $type;
            $newItem->save();
        }

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('type_id')->default(3)->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
        Schema::dropIfExists('user_types');
    }
}
