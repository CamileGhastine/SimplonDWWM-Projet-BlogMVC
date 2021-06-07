<?php

if ($_GET['page'] === 'post.home') {
    ob_start();
    require 'home.php';
    $content = ob_get_clean();
} elseif ($_GET['page'] === 'post.show') {
    ob_start();
    require 'show.php';
    $content = ob_get_clean();
}


require 'base.php';
