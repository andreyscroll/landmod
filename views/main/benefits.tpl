
<?php
    $setting = rebuildingArray($data['setting']);
?>

<section class="section p-5 text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4 text-uppercase fs-2"><?= $setting['title']; ?></h2>
                <p><?= $setting['description']; ?></p>
            </div>
        </div>

        <div class="row row-cols-<?= $setting['count_in_row']; ?>">
            <?php foreach($data['items'] as $item): ?>
            <div class="col">
                <div class="card bg-light border-light">
                    <div class="card-body">

                        <h3 class="card-title text-uppercase"><?= $item['title']; ?></h3>
                        <p class="card-text fw-light"><?= $item['text']; ?></p>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
