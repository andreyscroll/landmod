
<div class="card border-primary">
    <div class="card-body">
        <form name="saveSettingBenefits" action="/admin/savesettingbenefits/" method="POST">

            <div class="mb-3">
                <label for="title" class="form-label">Заголовок блока преимуществ</label>
                <input type="text" id="title" name="title" value="<?= $setting['title']; ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Подзаголовок</label>
                <input type="text" id="description" name="description" value="<?= $setting['description']; ?>" class="form-control">
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="count_in_row" class="form-label">Количество блоков в строке</label>
                    <select id="count_in_row" name="count_in_row" class="form-select">
                        <option value="2" <?php if($setting['count_in_row'] == 2) echo 'selected'; ?>>2</option>
                        <option value="3" <?php if($setting['count_in_row'] == 3) echo 'selected'; ?>>3</option>
                        <option value="4" <?php if($setting['count_in_row'] == 4) echo 'selected'; ?>>4</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="icon_color" class="form-label">Цвет иконок</label>
                    <input type="text" id="icon_color" name="icon_color" value="<?= $setting['icon_color']; ?>" class="form-control">
                </div>
            </div>

            <div class="my-3">
                <input type="submit" value="Сохранить" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>

<!-- <h3>Добавить новое преимущество</h3>
<form name="addNewBenefit" action="/admin/addnewbenefit/" method="POST">

    <label for="icons" class="form-label">Заголовок</label>
    <select id="icons" name="icons" class="form-select form-select-lg mb-3">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <div class="mb-3">
        <label for="title" class="form-label">Заголовок</label>
        <input type="text" id="title" name="title" value="<?= $data['title']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" value="Добавить" class="btn btn-primary">
    </div>
</form> -->

<h3 class="my-3 h5">Список преимуществ</h3>
<?php foreach($data['items'] as $item): ?>
<div class="card mb-3 border-secondary">
    <div class="card-body">
        <form name="saveBenefit" action="/admin/benefit/save/" method="POST">

            <input type="hidden" name="id" value="<?= $item['id'] ?>">

            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title" value="<?= $item['title']; ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Текст</label>
                <textarea name="text" id="text" rows="2" class="form-control"><?= $item['text']; ?></textarea>
            </div>

            <div class="mb-3">
                <input type="submit" value="Сохранить" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
<?php endforeach; ?>