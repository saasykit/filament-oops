<?php

namespace Saasykit\FilamentOops\Commands;

use Illuminate\Console\Command;

class FilamentOopsCommand extends Command
{
    public $signature = 'filament-oops';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
