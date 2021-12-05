<?php

namespace Oxyage\Laravel\Yookassa\Commands;

use Illuminate\Console\Command;

class YookassaCommand extends Command
{
    public $signature = 'laravel-cashier-yookassa';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
