<?php

namespace Models;

class Faq extends Model
{
    public function getData()
    {
        $stmt = $this->conn->query("SELECT id, quest, answer FROM faq");
        return $stmt->fetchAll();
    }

    public function setData($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO faq (quest, answer) VALUES (:quest, :answer)");
		return $stmt->execute([
			':quest' => $data['quest'],
			':answer' => $data['answer']
		]);
    }

    public function deleteData($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM faq WHERE id = :id");
		return $stmt->execute([':id' => $id]);
    }
}