
<form name="saveFaq" action="/admin/savefaq/" method="post">
        <input type="hidden" name="hidden" value="1">

		<div class="mb-3">
			<label for="quest" class="form-label">Вопрос</label>
			<input type="text" id="quest" name="quest" value="" class="form-control">
		</div>
		<div class="mb-3">
			<label for="answer" class="form-label">Ответ</label>
			<textarea name="answer" id="answer" rows="10" class="form-control"></textarea>
		</div>

		<div>
			<input type="submit" value="Добавить" class="btn btn-primary">
		</div>
	</form>
    <hr>

    <table class="table mt-4">
        <?php foreach($data as $i): ?>
        <tr>
            <td>
                <h4><?= $i['quest']; ?></h4>
                <p><?= $i['answer']; ?></p>
            </td>
            <td class="text-end align-middle">
                <a href="/admin/faq/delete/<?= $i['id']; ?>" class="btn btn-danger btn-sm">Удалить</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
