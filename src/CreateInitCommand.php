<?php

namespace BrunoHenrique\Command;

use Illuminate\Console\Command;

class CreateInitCommand extends Command
{
    protected $signature = "teste:teste";

    protected $description = "Teste";

    public function handle() {
        $this->info("Teste");
    }
}
