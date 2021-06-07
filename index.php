<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

if ($page === 'post.home') {
    ob_start();
    require 'home.php';
    $content = ob_get_clean();
} elseif ($page === 'post.show') {
    ob_start();
    require 'show.php';
    $content = ob_get_clean();
} elseif($page === 'user.connect') {
    ob_start();
    require 'connectionForm.php';
    $content = ob_get_clean();
}


require 'base.php';
