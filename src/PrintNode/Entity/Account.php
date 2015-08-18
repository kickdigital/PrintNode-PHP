<?php

namespace PrintNode\Entity;

use PrintNode\Entity;

/**
 * Account
 *
 * Object representing an Account to POST in PrintNode API
 *
 * @property-read string[string] $Account
 * @property-read string[] $ApiKeys
 * @property-read string[string] $Tags
 */
class Account extends Entity
{
    protected $Account;
    protected $ApiKeys;
    protected $Tags;

    public function foreignKeyEntityMap()
    {
        return array(
            'Account' => 'PrintNode\\Entity\\Whoami'
        );
    }
}
