
<section class="section">
	<div class="container-sm py-4 text-center">
		<div class="row">
			<div class="col-md-12">
		
				<h2 class="my-4 text-uppercase fs-2">Часто задаваемые вопросы</h2>
				
				<?php foreach($data as $i): ?>
				<h4 class="fst-italic"><?= $i['quest']; ?></h4>
				<p class="fw-light"><?= $i['answer']; ?></p>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>
