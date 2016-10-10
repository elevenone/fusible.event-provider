<?php
// @codingStandardsIgnoreFile

namespace Fusible\EventProvider;

use Aura\Di\ContainerBuilder;

class ResolverTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $builder = new ContainerBuilder();
        $container = $builder->newInstance();
        $container->params[Resolver::class] = [
            'injectionFactory' => $container->getInjectionFactory()
        ];

        $invoke = 'INVOKED';
        $foo    = 'FOOED';

        $container->params[Fake\Service::class] = [
            'invoke' => $invoke,
            'foo'    => $foo
        ];

        $resolver = $container->newinstance(Resolver::class);

        $invoker = $resolver(Fake\Service::class);
        $fooer   = $resolver([Fake\Service::class, 'foo']);

        $this->assertSame($invoke, $invoker());
        $this->assertSame($foo, $fooer());
    }
}
