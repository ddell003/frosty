<?php

use App\MenuSection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenueTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = ['Entrees', 'Sides','Dessert', 'Drinks', 'Wines', 'Beer'];

        foreach ($types as $type) {
            $section = new MenuSection();
            $section->name = $type;
            $section->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sections = MenuSection::get();

        foreach($sections as $section){
            $section->delete();
        }
    }
}
