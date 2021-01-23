<?php

namespace Classes;

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
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	function deleteRow($id){
		$stmt = $this->conn->prepare("DELETE FROM faq WHERE id = :id");
		return $stmt->execute([':id' => $id]);
	}

}
