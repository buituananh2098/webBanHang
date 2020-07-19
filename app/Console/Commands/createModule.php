<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class createModule extends Command
{
    protected $signature = 'make:ql {module}';

    protected $description = 'Lệnh CMD tạo mới folder quản lý';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $moduleName   = $this->argument('module');
        echo "\n";

        $newFileName = resource_path('views/backend').'/'.$moduleName;
        mkdir($newFileName);
        file_put_contents($newFileName.'/index.blade.php', '');
        file_put_contents($newFileName.'/create.blade.php', '');
        file_put_contents($newFileName.'/edit.blade.php', '');
        return $this->info('Tạo thành công');
    }
}
