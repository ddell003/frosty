<?php

use App\MenuItem;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $items = [

            [
                'name'=>'Steak',
                "description"=>'Large 12 oz juicy steak',
                'price'=>'20',
                'section_id'=>1
            ],
            [
                'name'=>'Ribs',
                "description"=>'Full stack of ribs',
                'price'=>'18',
                'section_id'=>1
            ],
            [
                'name'=>'Texas Burger',
                "description"=>'Nice juicy burger with a kick to it',
                'price'=>'12',
                'section_id'=>1
            ],
            [
                'name'=>'Classic Burger',
                "description"=>'Nice juicy burger',
                'price'=>'12',
                'section_id'=>1
            ],
            [
                'name'=>'Pulled Pork Burger',
                "description"=>'Nice juicy burger',
                'price'=>'12',
                'section_id'=>1
            ],
            [
                'name'=>'Fries',
                "description"=>'Fries and more fries',
                'price'=>'3',
                'section_id'=>2
            ],
            [
                'name'=>'Orange Fry',
                "description"=>'Sweet potato fries with our home made dipping sauce',
                'price'=>'3',
                'section_id'=>2
            ],
            [
                'name'=>'House Salad',
                "description"=>'Healthy Salad',
                'price'=>'3',
                'section_id'=>2
            ],
            [
                'name'=>'Triple Coco Cake',
                "description"=>'Yummy Chocolate cake',
                'price'=>'4.50',
                'section_id'=>3
            ],
            [
                'name'=>'Cookie Skillet',
                "description"=>'Large cookie served on a sizzling skillet',
                'price'=>'4.50',
                'section_id'=>3
            ],
            [
                'name'=>'Brownie Skillet',
                "description"=>'Large brownie served on a sizzling skillet',
                'price'=>'4.50',
                'section_id'=>3
            ],
            [
                'name'=>'Sodas',
                "description"=>'Fizzy Sodas any flavor',
                'price'=>'1.50',
                'section_id'=>4
            ],
            [
                'name'=>'Tea',
                "description"=>'Sweet Southern Tea',
                'price'=>'1.50',
                'section_id'=>4
            ],
            [
                'name'=>'Coffee',
                "description"=>'For those who need some caffeine',
                'price'=>'1.50',
                'section_id'=>4
            ],
            [
                'name'=>'House Red',
                "description"=>'House made red wine',
                'price'=>'6',
                'section_id'=>5
            ],
            [
                'name'=>'House White',
                "description"=>'House made white wine. Not to dry and not to sweet',
                'price'=>'6',
                'section_id'=>5
            ],
            [
                'name'=>'Blueberry White',
                "description"=>'Sweet dessert wine',
                'price'=>'6',
                'section_id'=>5
            ],
            [
                'name'=>'Irish Classic',
                "description"=>'An Irish style Beer',
                'price'=>'5',
                'section_id'=>6
            ],
            [
                'name'=>'Winter Frosty',
                "description"=>'An hearth stout',
                'price'=>'5',
                'section_id'=>6
            ],
            [
                'name'=>'Summer Frosty',
                "description"=>'An nice light wheat beer',
                'price'=>'4',
                'section_id'=>6
            ],
        ];

        foreach ($items as $item){
            $newItem = new MenuItem();
            $newItem->name = $item['name'];
            $newItem->description = $item['description'];
            $newItem->price = $item['price'];
            $newItem->section_id = $item['section_id'];

            $newItem->save();

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $items = MenuItem::get();

        foreach($items as $item){
            $item->delete();
        }
    }
}
