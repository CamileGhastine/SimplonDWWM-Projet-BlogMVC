<?php

ob_start();
try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

    if ($page === 'post.home') {
        require 'view/post/home.php';
    } elseif ($page === 'post.show') {
        require 'view/post/show.php';
    } elseif ($page === 'user.connect') {
        require 'view/user/connectionForm.php';
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require 'view/error/error' . $e->getMessage() . '.php';
}
$content = ob_get_clean();

require 'view/base.php';
