<?php

declare(strict_types=1);

namespace zonuexe\ZonuHello;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @phpstan-method non-empty-string getName()
 */
#[AsCommand(name: 'hello:world')]
class HelloWorldCommand extends Command
{
    /**
     * @return void
     */
    protected function configure()
    {
        $this->setDescription('Outputs "Hello World"');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello, world!');

        return 0;
    }
}
