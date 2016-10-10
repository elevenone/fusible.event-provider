<?php
/**
 * Fusible\EventProvider
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  Resolver
 * @package   Fusible\EventProvider
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/fusible/fusible.event-provider
 */

namespace Fusible\EventProvider;

use Aura\Di\Injection\InjectionFactory;

/**
 * Resolver
 *
 * @category Resolver
 * @package  Fusible\EventProvider
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/fusible/fusible.event-provider
 */
class Resolver
{

    /**
     * Injection Factory
     *
     * @var InjectionFactory
     *
     * @access protected
     */
    protected $injectionFactory;

    /**
     * __construct
     *
     * @param InjectionFactory $injectionFactory DI Factory
     *
     * @access public
     */
    public function __construct(InjectionFactory $injectionFactory)
    {
        $this->injectionFactory = $injectionFactory;
    }

    /**
     * __invoke
     *
     * @param mixed $spec spec to resolve
     *
     * @return mixed
     *
     * @access public
     */
    public function __invoke($spec)
    {
        if (is_string($spec)) {
            return $this->injectionFactory->newInstance($spec);
        }
        if (is_array($spec) && is_string($spec[0])) {
            $spec[0] = $this->injectionFactory->newInstance($spec[0]);
        }
        return $spec;
    }
}

