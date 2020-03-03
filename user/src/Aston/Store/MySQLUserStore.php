<?php

namespace Aston\Store;

use Aston\Model\User;
use Exception;
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
        $sql = 'INSERT INTO `user` VALUES (
            NULL, :email, :password, :first_name, :last_name, :created_at, :updated_at)';

        $mapper = new UserMapper();
        $stmt = $this->getDb()->prepare($sql);

        if ($stmt->execute($mapper->toArray($user)) === false) {
            throw new Exception('Query does not executed');
        }

        $user->setId($this->getDb()->lastInsertId());

        return $this;
    }

    public function find($id): ?User
    {
        return null;
    }

    public function findByEmail(string $email): ?User
    {
        return null;
    }

    public function findAll(): array
    {
        return [];
    }

    public function remove(User $user): UserStoreInterface
    {
        return $this;
    }
}