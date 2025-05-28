<?php

namespace Dapodik\Model\Commands;

use Illuminate\Console\Command;

class ModelCommand extends Command
{
    public $signature = 'laravel-dapodik-model';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
