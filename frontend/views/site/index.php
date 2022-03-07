<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php if ($blogList) : ?>
        <?php foreach ($blogList as $eachBlog): ?>
            <div class="col-md-4">
                <p><?=$eachBlog->title?></p>
                <p><?=$eachBlog->subject?></p>
            </div>
        <?php endforeach; ?>

    <?php else: ?>
        <p> There is no any blog</p>
    <?php endif; ?>

</div>
