<?php

class DBStore implements StoreHandler
{
    /**
     * PDO = PHP DATA OBJECTS
     * @var PDO $pdo
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function write(string $text)
    {
        $sql = "INSERT INTO text (value) VALUES (?)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(1, $text, PDO::PARAM_STR);
        $ok = $stmt->execute();

        // var_dump($ok);
    }

    public function read(): string
    {
        $sql = 'SELECT * FROM text WHERE id=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, 1, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch() ?? '';
    }
}