<?php

namespace Models;

class Hero extends Model
{
    public function getData()
    {
        $stmt = $this->conn->query("SELECT title, subtitle, btn_text, btn_url, bg_img FROM hero WHERE id = 1");
        return $stmt->fetch();
    }

    public function setData($data)
    {
        $stmt = $this->conn->prepare('UPDATE hero
										SET title = :title, subtitle = :subtitle, btn_text = :btn_text, btn_url = :btn_url
										WHERE id = :id');
        return $stmt->execute([
			':id' => 1,
            ':title' => $data['title'],
            ':subtitle' => $data['subtitle'],
            ':btn_text' => $data['btn_text'],
            ':btn_url' => $data['btn_url']
        ]);
    }
}