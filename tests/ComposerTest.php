<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

class ComposerTest extends TestCase
{
    public function testComposer(): void
    {
        $process = Process::fromShellCommandline('composer validate');
        $code = $process->run();

        $this->assertEquals(0, $code, $process->getErrorOutput());
    }
}
