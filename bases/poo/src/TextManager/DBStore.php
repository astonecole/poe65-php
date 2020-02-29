<?php

/**
 * Class DBStore
 */
class DBStore implements StoreInterface
{
    /**
     * @var PDO $pdo
     */
    private $pdo;

    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @inheritDoc
     */
    public function write(string $text)
    {
        $sql = /** @lang mysql */
            'INSERT INTO text VALUES (1, ?) ON DUPLICATE KEY UPDATE value=?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $text, PDO::PARAM_STR);
        $stmt->bindValue(2, $text, PDO::PARAM_STR);

        return $stmt->execute();
    }

    /**
     * @inheritDoc
     */
    public function read(): string
    {
        $sql = /** @lang mysql */
            'SELECT * FROM text WHERE id=?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, 1, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch();
        return $data['value'] ?? '';
    }
}
