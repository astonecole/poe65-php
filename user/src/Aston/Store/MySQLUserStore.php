<?php

namespace Aston\Store;

use Aston\Model\User;
use PDO;

class MySQLUserStore implements UserStoreInterface
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function getDb(): PDO
    {
        return $this->db;
    }

    public function setDb(PDO $db): MySQLUserStore
    {
        $this->db = $db;
        return $this;
    }

    public function save(User $user): UserStoreInterface
    {

    }

    public function find($id): User
    {

    }

    public function findByEmail(string $email): User
    {

    }

    public function findAll(): array
    {

    }

    public function remove(User $user): UserStoreInterface
    {

    }

}