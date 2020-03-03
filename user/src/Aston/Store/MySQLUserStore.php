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
            throw new Exception('the query has not been executed');
        }

        $user->setId($this->getDb()->lastInsertId());

        return $this;
    }

    public function find($id): ?User
    {
        $sql = 'SELECT * FROM `user` WHERE id=?';
        $stmt = $this->getDb()->prepare($sql);

        if ($stmt->execute([$id]) === false) {
            throw new Exception('query has not been executed');
        }

        $mapper = new UserMapper();
        $row = $stmt->fetch();

        if ($row === false) {
            throw new Exception('fetch has not been executed');
        }

        return $mapper->toObject($row);
    }

    public function findByEmail(string $email): ?User
    {
        $sql = 'SELECT * FROM `user` WHERE email=?';
        $stmt = $this->getDb()->prepare($sql);

        if ($stmt->execute([$email]) === false) {
            throw new Exception('the query has not been executed');
        }

        $mapper = new UserMapper();
        $row = $stmt->fetch();

        if ($row === false) {
            throw new Exception('fetch has not been executed');
        }

        return $mapper->toObject($row);
    }

    public function findAll(): array
    {
        $stmt = $this->getDb()->prepare('SELECT * FROM `user`');

        if ($stmt->execute() === false) {
            throw new Exception('query has not been executed');
        }

        $mapper = new UserMapper();
        $users = [];

        foreach ($stmt->fetchAll() as $row) {
            $users[] = $mapper->toObject($row);
        }

        return $users;
    }

    public function remove(User $user): UserStoreInterface
    {
        $this->getDb()->beginTransaction();

        try {
            $stmt = $this->getDb()->prepare('DELETE FROM `user` WHERE id=?');

            if ($stmt->execute([$user->getId()]) === false) {
                throw new Exception('query has not been executed');
            }

            $this->getDb()->commit();

        } catch (Exception $e) {
            $this->getDb()->rollBack();
        }
        return $this;
    }
}
