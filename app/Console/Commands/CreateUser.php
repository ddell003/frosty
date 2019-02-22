<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use InvalidArgumentException;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {--first_name=} {--last_name=} {--email=} {--password=} {--user_type=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        //php artisan user:create --first_name=Parker --last_name=Dell --email=parkerdell94@gmail.com --password=password --user_type=1
        $first_name = $this->option('first_name');
        $last_name = $this->option('last_name');
        $email = $this->option('email');
        $password = $this->option('password');
        $type = $this->option('user_type');


        if (! $first_name  || ! $last_name || ! $email || ! $password) {
            $this->error('Options are non-optional :)');
            return false;
        }

        $rules = [
            'name'=>[
                'required',
                'string',
                'max:225'
            ],
            'email'=>[
                'required',
                'string',
                'max:225',
                'unique:users'
            ],
            'type_id'=>[
                'nullable',
                'integer',
                Rule::exists('user_types', 'id')
            ],
            'password'=>[
                'required',
                'string',
                'min:6'
            ]
        ];


        $data = [
            'name' => "{$first_name} {$last_name}",
            'email' => $email,
            'password'=>$password,
            'type_id'=>$type
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $this->error(json_encode($errors));
            return false;
        }

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        $this->info('User Created');



    }
}
