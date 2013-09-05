<?php

namespace Sonata\UserBundle\Propel;

use FOS\UserBundle\Model\GroupInterface;
use Sonata\UserBundle\Propel\om\BaseGroup;

class Group extends BaseGroup implements GroupInterface
{
    public function getRolesAsString()
    {
        return implode(', ', $this->getRoles());
    }
}
