<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/22/19
 * Time: 7:36 AM
 */

namespace App\Http\Api;


use App\Http\Controllers\Controller;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        $request = request();
        $type = $request->get('type');
        $clearCache = $request->get('clearCache');

        if($clearCache){
            Cache::flush();
        }

        if($type){

            $users = Cache::remember('users-'.$type, 10, function () use($type){
                return User::byType($type)->orderBy('name', 'asc')->get();
            });

            return $users;

        }
        return User::get();
    }
}