<?php

require '../config.php';

$page_title = 'Модули';

function load(){
	$data = file_get_contents('modules.config.dat');
	return unserialize($data);
}

function save($data){
	file_put_contents('modules.config.dat', serialize($data));
	return true;
}

// Выбор модулей - подгрузка настроек
$conf = load();

if(!empty($_POST)) {

	// Приводим к нулю все значения
	foreach($conf as $key => $val){
		$conf[$key] = 0;
	}
	// Присваиваем новые
	foreach($_POST as $key => $val){
		$conf[$key] = $val;
	}
	// Сохраняем новые значения
	save($conf);
	header('Location: index.php');
}

?>

<?php require 'inc/header.php'; ?>

	<form action="" method="post">
		<input type="hidden" name="hidden" value="0">
		<div class="mb-3">
			<input type="checkbox" id="hero" name="hero" value="1"
				<?php if($conf['hero']) echo 'checked'; ?>>
			<label for="hero">Hero</label>
		</div>
		<div class="mb-3">
			<input type="checkbox" id="about" name="about" value="1"
				<?php if($conf['about']) echo 'checked'; ?>>
			<label for="about">About</label>
		</div>
		<div class="mb-3">
			<input type="checkbox" id="faq" name="faq" value="1"
				<?php if($conf['faq']) echo 'checked'; ?>>
			<label for="faq">Faq</label>
		</div>
		<div class="mb-3">
			<input type="checkbox" id="contact" name="contact" value="1"
				<?php if($conf['contact']) echo 'checked'; ?>>
			<label for="contact">Contact</label>
		</div>

		<div>
			<input type="submit" class="btn btn-primary" value="Сохранить">
		</div>

	</form>

<?php require 'inc/footer.php'; ?>
