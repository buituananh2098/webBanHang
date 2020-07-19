<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class createRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {model} {m?} {c?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent repository class';

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
        $ModelName   = $this->argument('model');

        $create_model       = $this->argument('m');
        $create_controller  = $this->argument('c');

        echo "\n";

        if ($create_controller) {
            $created_c  = \Artisan::call('make:controller '.$ModelName.'Controller --resource');
            $txt_oup    = \Artisan::output();
            if (preg_match('/(already exists!)/', $txt_oup)) $this->error($txt_oup);
            else $this->info($txt_oup);
        }
        if ($create_model) {
            $created_m = \Artisan::call('make:model Models/'.$ModelName. ' -m');
            $txt_oup    = \Artisan::output();
            if (preg_match('/(already exists!)/', $txt_oup)) $this->error($txt_oup);
            else $this->info($txt_oup);
        }
        
        $newFileName = app_path('Repositories').'/'.$ModelName.'Repository.php';
        if (file_exists($newFileName)) {
           return $this->error('Repository '."already exists!");
        }

        $file_content = resource_path('templates\Repository.stub');
        $content = file_get_contents($file_content);
        $content = str_replace('{{ModelName}}', $ModelName, $content);
        file_put_contents($newFileName, $content);
        return $this->info('Repository created successfully.');
    }
}
