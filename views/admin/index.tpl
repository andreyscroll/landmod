
<h2 class="h5">Общие настройки</h2>
<!-- Подключение модулей -->
<div class="card border-secondary mb-4">
    <div class="card-header">
        <span>Подключение модулей</span>
    </div>
    <div class="card-body">

        <form name="saveModuleList" action="/admin/savemodulelist/" method="post">
            <input type="hidden" name="hidden" value="0">
            <div class="mb-3">
                <input type="checkbox" id="hero" name="hero" value="1"
                    <?php if($moduleList['hero']) echo 'checked'; ?>>
                <label for="hero">Hero</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="about" name="about" value="1"
                    <?php if($moduleList['about']) echo 'checked'; ?>>
                <label for="about">About</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="faq" name="faq" value="1"
                    <?php if($moduleList['faq']) echo 'checked'; ?>>
                <label for="faq">Faq</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="benefits" name="benefits" value="1"
                    <?php if($moduleList['benefits']) echo 'checked'; ?>>
                <label for="benefits">Benefits</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="contact" name="contact" value="1"
                    <?php if($moduleList['contact']) echo 'checked'; ?>>
                <label for="contact">Contact</label>
            </div>
        
            <div>
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </div>
        
        </form>

    </div>
</div>

<!-- Общие настройки (SEO) -->
<form name="saveSeo" action="/admin/saveseo/" method="post">
    <input type="hidden" name="hidden" value="1">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" value="<?= $gnrlSetting['title']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" rows="2" class="form-control"><?= $gnrlSetting['description']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="keywords" class="form-label">Keywords</label>
        <input type="text" id="keywords" name="keywords" value="<?= $gnrlSetting['keywords']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="head" class="form-label">Head</label>
        <textarea name="head" id="head" rows="2" class="form-control"><?= $gnrlSetting['head']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="footer" class="form-label">Footer</label>
        <textarea name="footer" id="footer" rows="7" class="form-control"><?= $gnrlSetting['footer']; ?></textarea>
    </div>

    <div>
        <input type="submit" value="Сохранить" class="btn btn-primary">
    </div>
</form>