<?php

namespace Classes;

class Hero extends Modules
{
	function setData($arr){
		$stmt = $this->conn->prepare('UPDATE hero
										SET title = :title, subtitle = :subtitle, btn_text = :btn_text, btn_url = :btn_url
										WHERE id = :id');
        $stmt->execute([
			':id' => 1,
            ':title' => $arr['title'],
            ':subtitle' => $arr['subtitle'],
            ':btn_text' => $arr['btn_text'],
            ':btn_url' => $arr['btn_url']
        ]);
	}

	function getData(){
		$stmt = $this->conn->query('SELECT title, subtitle, btn_text, btn_url, bg_img FROM hero');
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

	function setImg($path){
		$stmt = $this->conn->prepare('UPDATE hero SET bg_img = :bg_img WHERE id = :id');
		$stmt->execute([':id' => 1, ':bg_img' => $path]);
	}

}
