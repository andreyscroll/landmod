<?php

namespace Models;

class Benefits extends Model
{
    public function getData()
    {
        // Массив для соединения настроек и данных
        $rsBenefits = [];
        // Берем настройки
        $settingStmt = $this->conn->query("SELECT field, value FROM benefits");
        $rsBenefits['setting'] = $settingStmt->fetchAll();

        $settingStmt->closeCursor();

        // Берем список преимуществ
        $itemStmt = $this->conn->query("SELECT id, title, text, icon FROM benefits_item");
        $rsBenefits['items'] = $itemStmt->fetchAll();

        return $rsBenefits;
    }

    public function setData($data)
    {
        $stmt = $this->conn->prepare("UPDATE benefits SET value = :value WHERE field = :name");

        foreach($data as $key => $val){
            $stmt->execute([
                ':value' => $val,
                ':name' => $key
                ]);
        }

        return $stmt;
    }

    public function saveData($data)
    {
        $stmt = $this->conn->prepare("UPDATE benefits_item SET title = :title, text = :text, icon = :icon WHERE id = :id");
        return $stmt->execute([
            ':id' => $data['id'],
            ':title' => $data['title'],
            ':text' => $data['text'],
            ':icon' => null
        ]);
    }
}