<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use InvalidArgumentException;

class CreateRandomUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:random {--count=5}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Random Users for your account';

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
        $count = $this->option('count');

        if ($count && ! is_numeric($count)) {
            $this->error('Count must be an integer!');
            return false;
        }

        factory(User::class, intval($count))->create();
        dd(User::get()->toArray());
    }
}
