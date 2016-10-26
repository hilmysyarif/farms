<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RTKit\Generator\Route;

class GenerateRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:route {routeName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a route class.';

    private $genRoute;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Route $genRoute)
    {
        parent::__construct();
        $this->genRoute = $genRoute;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $routeName = $this->argument('routeName');
        $this->genRoute->generate($routeName);
        $this->info($routeName.' has been genereated successfully');
    }
}
