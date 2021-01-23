<?php

class LandCMS {

	public $conn;

	function __construct(){
		$this->conn = new PDO('sqlite:' . DB_NAME);
	}

	function load(){
		$data = file_get_contents('admin/modules.config.dat');
		return unserialize($data);
	}

}

class Seo extends LandCMS {

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
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}

class Modules extends LandCMS {

	function getTemplate($name){
		$name = strtolower($name);
		return "templates/{$name}.tpl";
	}

}

class Hero extends Modules {

	function setData($arr){
		$stmt = $this->conn->prepare('UPDATE hero
										SET title = :title, subtitle = :subtitle, btn_text = :btn_text, btn_url = :btn_url, bg_img = :bg_img
										WHERE id = :id');
        $stmt->execute([
							':id' => 1,
            ':title' => $arr['title'],
            ':subtitle' => $arr['subtitle'],
            ':btn_text' => $arr['btn_text'],
            ':btn_url' => $arr['btn_url'],
            ':bg_img' => $arr['bg_img']
        ]);
	}

	function getData(){
		$stmt = $this->conn->query('SELECT title, subtitle, btn_text, btn_url, bg_img FROM hero');
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	function setImg(){}

}

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
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

class Catalog extends Modules {
	function getData(){}
}

class Benefits extends Modules {
	function getData(){}
}

class Faq extends Modules {

	function setData($arr){
		$stmt = $this->conn->prepare("INSERT INTO faq (quest, answer) VALUES (:quest, :answer)");
		$stmt->execute([
			':quest' => $arr['quest'],
			':answer' => $arr['answer']
		]);
	}

	function getData(){
		$stmt = $this->conn->query("SELECT id, quest, answer FROM faq");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function deleteRow($id){
		$stmt = $this->conn->prepare("DELETE FROM faq WHERE id = :id");
		return $stmt->execute([':id' => $id]);
	}

}

class Contact extends Modules {
	function getData(){}
}
