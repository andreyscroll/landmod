
<form name="saveAbout" action="/admin/saveabout/" method="post">
    <input type="hidden" name="hidden" value="1">

    <div class="mb-3">
        <label for="title" class="form-label">Заголовок</label>
        <input type="text" id="title" name="title" value="<?= $data['title']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Текст <span class="text-black-50">*(Можно HTML)</span></label>
        <textarea name="text" id="text" rows="10" class="form-control"><?= $data['text']; ?></textarea>
    </div>

    <div>
        <input type="submit" value="Сохранить" class="btn btn-primary">
    </div>
</form>
