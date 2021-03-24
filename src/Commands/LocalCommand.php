<?php

namespace RamonPego\Local\Commands;

use Illuminate\Console\Command;
use RamonPego\CLI\Local;
use Symfony\Component\Process\Process;

class LocalCommand extends Command
{
    public $signature = 'local {user : username on your server} {rawCommand : command that must be run} {--a|artisan : if its an artisan command}';

    public $description = 'Run command on local machine with different user';

    public function handle()
    {
        $path = config('local-config.path') ?? config('local-config.default_path');
        Local::create($path, $this->user())
            ->onOutput(function ($type, $line) {
                $this->displayOutput($type, $line);
            })->execute($this->command());
        $this->comment('All done');
    }

    protected function user():string
    {
        return $this->argument('user');
    }

    public function command():string
    {
        $command = $this->argument('rawCommand');
        if ($this->option('artisan')) {
            $command = "php artisan {$command}";
        }

        return $command;
    }

    protected function displayOutput($type, $line): void
    {
        $lines = explode(PHP_EOL, $line);

        foreach ($lines as $line) {
            if (strlen(trim($line)) === 0) {
                continue;
            }

            if ($type == Process::OUT) {
                $this->output->write(trim($line) . PHP_EOL);

                return;
            }

            $this->output->write('<fg=red>' . trim($line) . '</>' . PHP_EOL);
        }
    }
}
