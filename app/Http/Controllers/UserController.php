<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/21/19
 * Time: 8:03 PM
 */

namespace App\Http\Controllers;


use App\UserType;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $types = json_encode([
            ['id'=>1,"name" => "Fisayo Afolayan"],
            ['id'=>2,'name' => "Software Enginner"],
            ['id'=>3 ,'name'=> "Always keeping it clean"]
        ]);
        $types = UserType::get();
        $title = 'Title';
        $author = json_encode([
            "name" => "Fisayo Afolayan",
            "role" => "Software Enginner",
            "code" => "Always keeping it clean"
        ]);


        return view('users.index', compact('types', 'title', 'author'));
       // dd($userTypes->toArray());

    }
}