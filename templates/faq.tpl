
<div class="container py-4 border-bottom">
	<div class="row">
		<div class="col-md-8 m-auto">
	
			<h2 class="mb-4">Часто задаваемые вопросы</h2>
			
			<?php foreach($data as $i): ?>
			<h3 class="fst-italic h-4"><?= $i['quest']; ?></h3>
			<p class="fw-light"><?= $i['answer']; ?></p><hr>
			<?php endforeach; ?>

		</div>
	</div>
</div>