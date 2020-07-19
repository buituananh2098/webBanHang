<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class createAllFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:allfile {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tạo model, repository, request, controller, view';

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
        $name = $this->argument('name');
        $model_name = strtoupper(substr($name,0, 1)).substr($name, 1);

        $makeModel = \Artisan::call('make:model Models/'.$model_name. ' -m');
        $makeController  = \Artisan::call('make:controller '.$model_name.'Controller -r');
        $makeRequest = \Artisan::call('make:request '.'Validate'.$model_name);
        $makeRepository = \Artisan::call('make:repository '.$model_name);
        $makeView = \Artisan::call('make:ql '.$name);

        $newRoute = base_path("routes/modules").'/'.$name.'.php';
        $file_content = resource_path('templates\views\route.stub');
        $content = file_get_contents($file_content);
        $content = str_replace('{{ model }}', $name, $content);
        $content = str_replace('{{ ModelUp }}', $model_name, $content);
        file_put_contents($newRoute, $content);
        return $this->info('Thành công');
    }
}
