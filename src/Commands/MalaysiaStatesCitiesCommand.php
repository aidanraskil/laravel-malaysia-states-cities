<?php

namespace Aidanraskil\MalaysiaStatesCities\Commands;

use Illuminate\Console\Command;

class MalaysiaStatesCitiesCommand extends Command
{
    public $signature = 'laravel-malaysia-states-cities';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('Siap bang!');

        return self::SUCCESS;
    }
}
