<?php

namespace Classes;

class Seo extends LandCMS
{
	
	function setData($arr){
		$stmt = $this->conn->prepare('UPDATE seo
										SET title = :title, description = :description, keywords = :keywords, head = :head, footer = :footer
										WHERE id = :id');
        $stmt->execute([
			':id' => 1,
            ':title' => $arr['title'],
            ':description' => $arr['description'],
            ':keywords' => $arr['keywords'],
            ':head' => $arr['head'],
            ':footer' => $arr['footer']
        ]);
	}

	function getData(){
		$stmt = $this->conn->query('SELECT title, description, keywords, head, footer FROM seo');
        return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

}
