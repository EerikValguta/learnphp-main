<?php

?>

        <?php include __DIR__ . '/partials/header.php'; ?>
        <h1><?=$name?></h1>
        <?php if($num > 10): ?>
            <h1>yesyes</h1>
        <?php  else: ?>
            <h1>Suur</h1>
        <?php endif ?>
        <?php include __DIR__ . '/partials/footer.php'; ?>