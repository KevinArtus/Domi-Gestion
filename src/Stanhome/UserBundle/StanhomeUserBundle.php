<?php

namespace Stanhome\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StanhomeUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
