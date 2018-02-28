<?php

namespace App\Core;

class Message
{
    protected $db;

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function save(array $data)
    {
        $sql = "insert into messages (name, message, img, created_at) values (:name, :message, :img, :created_at)";

        $this->db->query($sql, $data);

        return (bool) $this->db->lastInsertId();
    }

    public function getMessages($count = 5)
    {
        $sql = "select * from messages ORDER BY id DESC limit 0, $count";

        $stmt = $this->db->query($sql, ['count' => 5]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}