<?php

/** @var yii\web\View $this */

$this->title = 'Vacancy';
?>


<div class="container">
    <div class="row">

        <?php if ($vacancies) : ?>

            <?php foreach ($vacancies as $vacancy): ?>
                <div class="col-sm-4">
                    <h1 class="col-red"><?= $vacancy['title'] ?></h1>
                    <h3 class="col-red"><?= $vacancy['name'] ?></h3>
                    <h5 class="col-red"><?= $vacancy['description'] ?></h5>
                    <p><?= $vacancy['min'] ?> <span>-</span> <?= $vacancy['max']; ?> RUR </p>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p> There is no any vacancy</p>
        <?php endif; ?>

    </div>
</div>
