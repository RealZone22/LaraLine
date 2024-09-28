<?php

namespace RealZone22\LaraLine\Commands;

use Illuminate\Console\Command;

class LaraLineCommand extends Command
{
    public $signature = 'laraline';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
