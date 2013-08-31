<?php

namespace Sonata\UserBundle\Propel;

use Sonata\UserBundle\Propel\om\BaseGroup;

class Group extends BaseGroup
{
    public function getRolesAsString()
    {
        return implode(', ', $this->getRoles());
    }
}
