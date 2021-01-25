<header id="hero" class="hero section" style="background-image: url(<?= $data['bg_img']; ?>);">
	<div class="container-sm">
		<div class="row">
			<div class="col-md-8 m-auto text-center">
				<div class="hero_info">
					<h1 class="text-white fw-bold text-uppercase"><?= $data['title']; ?></h1>
					<p class="text-white fs-5 fw-light"><?= $data['subtitle']; ?></p>
				</div>
				<a href="<?= $data['btn_url']; ?>" class="btn btn-success text-uppercase btn-lg"><?= $data['btn_text']; ?></a>
			</div>
		</div>
	</div>
</header>