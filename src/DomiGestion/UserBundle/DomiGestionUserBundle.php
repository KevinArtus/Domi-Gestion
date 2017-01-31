<?php

namespace DomiGestion\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DomiGestionUserBundle
 * @package DomiGestion\UserBundle
 */
class DomiGestionUserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
