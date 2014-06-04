<? if(!$_SERVER["HTTP_X_PJAX"]) include 'template_part1.php' ?>
Go to <a href="page2.php" data-pjax="main">page2</a>.
<? if(!$_SERVER["HTTP_X_PJAX"]) include 'template_part2.php' ?>

<? if($_SERVER["HTTP_X_PJAX"]): ?>
    <p>PJAX using PHP</p>
<? endif; ?>

