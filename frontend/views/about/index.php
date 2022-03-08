<?php

/** @var yii\web\View $this */

$this->title = 'Vacancy';
?>


<div class="container">
    <div class="row">

        <?php if ($vacancies) : ?>

            <?php foreach ($vacancies as $vacancy): ?>
                <div class="col-sm-12">
                    <h1 class="col-red"><span>Job title -- </span><?= $vacancy['title'] ?></h1>
                    <h3 class="col-red"><span>Department -- </span><?= $vacancy['name'] ?></h3>
                    <h5 class="col-red"><span>Job description -- </span><?= $vacancy['description'] ?></h5>
                    <p><span>Salary rate -- </span><?= $vacancy['min'] ?> <span>-</span> <?= $vacancy['max']; ?> RUR </p>
                </div>
                <hr style="width:100%;text-align:left;margin-left:0">
            <?php endforeach; ?>

        <?php else: ?>
            <p> There is no any vacancy</p>
        <?php endif; ?>

    </div>
</div>
