<?php

use Classes\Hero;

require '../config.php';

$page_title = 'Hero';

$h = new Hero();
//обновление данных
if(isset($_POST['data']))
{
	$h->setData($_POST);
	header('Location: hero.php');
}
//загрузка фоновой картинки
if(isset($_POST['upload-file']))
{
	$gen_name = uniqid('bg_img_');
	$type = explode('/', $_FILES['bg_img']['type']);
	$tmp_name  = $_FILES['bg_img']['tmp_name'];
	$file_path = IMG_DIR . '/' . $gen_name . '.' . $type[1];

	if(!file_exists(BASE_DIR . IMG_DIR))
	{
		mkdir(BASE_DIR . IMG_DIR);
	}

	move_uploaded_file($tmp_name, BASE_DIR . $file_path);

	$h->setImg($file_path);

	header('Location: hero.php');
}
//подгружаем данные в поля
$hero = $h->getData();

?>

<?php require 'inc/header.php'; ?>

<div class="card my-4">
	<div class="card-body">

		<div class="">
			<img src="<?= $hero['bg_img']; ?>" width="300" alt="">
		</div>

		<form enctype="multipart/form-data" action="" method="post">

			<input type="hidden" name="MAX_FILE_SIZE" value="100000">
			<div class="mb-3">
				<label for="bg_img" class="form-label">Background image</label>
				<input type="file" id="bg_img" name="bg_img" class="form-control">
			</div>
			<div>
				<input type="submit" name="upload-file" value="Загрузить" class="btn btn-primary">
			</div>

		</form>
	</div>
</div>

<form action="" method="post">
	<input type="hidden" name="hidden" value="1">
	<div class="mb-3">
		<label for="title" class="form-label">Title</label>
		<input type="text" id="title" name="title" value="<?= $hero['title']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="subtitle" class="form-label">Subtitle</label>
		<input type="text" id="subtitle" name="subtitle" value="<?= $hero['subtitle']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="btn_text" class="form-label">Button text</label>
		<input type="text" id="btn_text" name="btn_text" value="<?= $hero['btn_text']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="btn_url" class="form-label">Button Url</label>
		<input type="text" id="btn_url" name="btn_url" value="<?= $hero['btn_url']; ?>" class="form-control">
	</div>
	<div>
		<input type="submit" name="data" value="Сохранить" class="btn btn-primary">
	</div>
</form>

<?php require 'inc/footer.php'; ?>
