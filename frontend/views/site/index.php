<?php

/** @var yii\web\View $this */

$this->title = 'Home';
?>

<div class="container">
    <div class="row">

        <?php if ($blogList) : ?>
            <?php foreach ($blogList as $eachBlog): ?>
                <div class="col-sm-4">
                    <p class="col-red"><?=$eachBlog->title?></p>
                    <p><?=$eachBlog->subject?></p>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p> There is no any blog</p>
        <?php endif; ?>
    </div>
</div>
