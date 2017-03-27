<?php

namespace FastAdmin\Commands;

use Illuminate\Console\Command;

class CreateSeries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dancesmile:series {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '创建控制器，视图，模型';

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
        $name = ucfirst($this->argument("name"));
        $controller = "Admin/".$name."Controller";
        $model = $name;

        $this->call("make:controller",[
            "name" => $controller,
            "--resource" => 1,
        ]);
        $this->call("make:model",[
            "name"=> $model
        ]);

        $this->call("make:model",[
            "name"=> $model
        ]);
        copy(__DIR__.'/../Controller/controllerTpl.php',
            app_path("Http/Controllers/{$controller}.php")
        );


    }
}
