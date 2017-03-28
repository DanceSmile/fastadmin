<?php

namespace FastAdmin\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


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


        $this->isDir();

        $controller = "Admin/".$name."Controller";

        $model = $name;

        $directory = strtolower($name);



        $this->call("make:model",[
            "name"=> $model
        ]);


        file_put_contents(app_path("Http/Controllers/{$controller}.php"),
        str_replace(
            [
             '{!!model!!}',
              '{!!view!!}',
            ],
            [
                $model,
                strtolower($this->argument("name"))
            ],
            file_get_contents(__DIR__.'/../Controller/controllerTpl.stub')
        ));

        File::copyDirectory(__DIR__.'/../resource/user', resource_path("views/admin/{$directory}"), $options = null);

    }


    public function isDir(){
        if( !is_dir(app_path("Http/Controllers/Admin"))){
            mkdir(app_path("Http/Controllers/Admin"),0755,true);
        }

    }
}
