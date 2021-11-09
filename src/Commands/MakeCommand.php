<?php

namespace Dasundev\LaravelSimpleAuth\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\StreamOutput;

class MakeCommand extends Command
{

    protected $signature = 'make:auth {auth-type=bootstrap}';

    protected $description = 'Create default laravel authentication';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $authType = $this->argument('auth-type');

        $stream = fopen("php://output", "w");

        Artisan::call('ui ' . $authType . ' --auth', array(), new StreamOutput($stream));
        echo $stream;

        shell_exec('npm install');
        shell_exec('npm run dev');

        $this->line('');
        $this->line('Default authentication successfully created. Thanks for using the <fg=green;options=bold>laravel simple auth</> package! 😘');
    }
}
