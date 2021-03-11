<?php

namespace Models;

class About extends Model
{
    public function getData()
    {
        $stmt = $this->conn->query("SELECT title, text FROM about WHERE id = 1");
        return $stmt->fetch();
    }

    public function setData($data)
    {
        $stmt = $this->conn->prepare('UPDATE about
										SET title = :title, text = :text
										WHERE id = :id');
        return $stmt->execute([
			':id' => 1,
            ':title' => $data['title'],
            ':text' => $data['text']
        ]);
    }
}