<?php

namespace Models;

use Core\Db;

class Seo
{
    public static function getData()
    {
        $conn = Db::getConn();
        $stmt = $conn->query("SELECT title, description, keywords, head, footer FROM seo WHERE id = 1");
        return $stmt->fetch();
    }

    public static function setData($data)
    {
        $conn = Db::getConn();
        $stmt = $conn->prepare('UPDATE seo
                                    SET title = :title, description = :description, keywords = :keywords, head = :head, footer = :footer
                                    WHERE id = :id');
        return $stmt->execute([
			':id' => 1,
            ':title' => $data['title'],
            ':description' => $data['description'],
            ':keywords' => $data['keywords'],
            ':head' => $data['head'],
            ':footer' => $data['footer']
        ]);
    }
}