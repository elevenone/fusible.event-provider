<?php
// @codingStandardsIgnoreFile

namespace Fusible\EventProvider;

use Aura\Di\AbstractContainerConfigTest;

use Jnjxp\Event;

class ConfigTest extends AbstractContainerConfigTest
{
    protected function setUp()
    {
        @session_start();
        parent::setUp();
    }

    protected function getConfigClasses()
    {
        return [
            Config::class
        ];
    }

    public function provideGet()
    {
        return [
            [ Config::EMITTER, Event\Emitter::class],
            [ Config::RESOLVER, Resolver::class]
        ];
    }
}

