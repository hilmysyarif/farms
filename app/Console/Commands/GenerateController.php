<?php

namespace App\Console\Commands;

use RTKit\Generator\Controller;
use Illuminate\Console\Command;

class GenerateController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:controller {controllerName} {--parent=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a controller class';



    private $genController;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Controller $genController)
    {
        parent::__construct();

        $this->genController = $genController;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $controllerName = $this->argument('controllerName');
        $parentClassName = $this->option('parent');
        $this->genController->generate($controllerName, $parentClassName);
        $this->info($controllerName.' has been genereated successfully');
    }
}
