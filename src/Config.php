<?php
/**
 * Event Provider
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  Config
 * @package   Fusible\EventProvider
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/fusible/fusible.event-provider
 */

namespace Fusible\EventProvider;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

use Jnjxp\Event;

/**
 * Config
 *
 * @category Config
 * @package  Fusible\EventProvider
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/fusible/fusible.event-provider
 *
 * @see ContainerConfig
 */
class Config extends ContainerConfig
{

    const EMITTER  = 'jnjxp/event:emitter';
    const RESOLVER = 'jnjxp/event:resolver';

    /**
     * Define Container
     *
     * @param Container $di di container
     *
     * @return null
     *
     * @access public
     *
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function define(Container $di)
    {
        $di->set(static::EMITTER,  $di->lazyNew(Event\Emitter::class));
        $di->set(static::RESOLVER, $di->lazyNew(Resolver::class));

        $di->params[Event\Emitter::class] = [
            'resolver' => $di->lazyGet(static::RESOLVER),
        ];

        $di->params[Resolver::class] = [
            'injectionFactory' => $di->getInjectionFactory()
        ];
    }
}
