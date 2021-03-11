
<h2 class="h5">Настройки блока Hero</h2>

<div class="card my-4">
	<div class="card-body">

		<div class="">
			<img src="<?= $data['bg_img']; ?>" width="300" alt="">
		</div>

		<form name="heroSetImg" enctype="multipart/form-data" action="" method="post">

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

<form name="heroSetting" action="/admin/savehero/" method="post">
	<input type="hidden" name="hidden" value="1">
	<div class="mb-3">
		<label for="title" class="form-label">Title</label>
		<input type="text" id="title" name="title" value="<?= $data['title']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="subtitle" class="form-label">Subtitle</label>
		<input type="text" id="subtitle" name="subtitle" value="<?= $data['subtitle']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="btn_text" class="form-label">Button text</label>
		<input type="text" id="btn_text" name="btn_text" value="<?= $data['btn_text']; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label for="btn_url" class="form-label">Button Url</label>
		<input type="text" id="btn_url" name="btn_url" value="<?= $data['btn_url']; ?>" class="form-control">
	</div>
	<div>
		<input type="submit" name="data" value="Сохранить" class="btn btn-primary">
	</div>
</form>
