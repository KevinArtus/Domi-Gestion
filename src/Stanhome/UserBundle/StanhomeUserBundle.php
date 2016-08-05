<?php

namespace Stanhome\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class StanhomeUserBundle
 * @package Stanhome\UserBundle
 */
class StanhomeUserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
