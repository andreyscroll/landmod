<?php

namespace Classes;

class About extends Modules {

	function setData($arr){
		$stmt = $this->conn->prepare('UPDATE about
										SET title = :title, text = :text
										WHERE id = :id');
        $stmt->execute([
							':id' => 1,
            ':title' => $arr['title'],
            ':text' => $arr['text']
        ]);
	}

	function getData(){
		$stmt = $this->conn->query('SELECT title, text FROM about');
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}
}