<?php

/** @var yii\web\View $this */

$this->title = 'Vacancy';
?>


<div class="container">
    <div class="row">

        <?php if ($vacancies) : ?>

            <?php foreach ($vacancies as $vacancy): ?>
                <div class="col-sm-4">
                    <p class="col-red"><?=$vacancy->title?></p>
                    <p class="col-red"><?=$vacancy->description?></p>
                    <p class="col-red"><?=$vacancy->name?></p>
<!--                    <p>--><?//=$vacancy->rate?><!--</p>-->
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p> There is no any vacancy</p>
        <?php endif; ?>

    </div>
</div>
