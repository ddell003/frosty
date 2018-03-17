<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class MenuSection
 * We have a table called menu_sections which has the columns id, name, created_at, updated_at
 * We can get all the sections in the route through calling (make sure you say use app/MenuSection) MenuSection::get
 * @package App
 */
class MenuSection extends Model
{

    public function items()
    {
        return $this->hasMany(MenuItem::class,'section_id');
    }

}
