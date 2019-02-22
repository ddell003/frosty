<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/21/19
 * Time: 6:44 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    use SoftDeletes;
}