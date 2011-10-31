<?php

namespace Ray\Di\Definition;

use Ray\Di\Mock\DbInterface,
    Ray\Di\Mock\UserInterface,
    Ray\Di\Mock\AbstractDb;

/**
 * Setter Injection
 *
 */
class AbstractBasic
{
    /**
     * @var DbInterface
     */
    public $db;

    /**
     * @Inject
     *
     * @param DbInterface $db
     */
    public function setDb(AbstractDb $db)
    {
        $this->db = $db;
    }
}