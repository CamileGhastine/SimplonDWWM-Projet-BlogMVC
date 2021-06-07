<?php

$path = dirname(__DIR__);

ob_start();
try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

    if ($page === 'post.home') {
        require $path . '/model/postRepository.php';
        require $path . '/view/post/home.php';
    } elseif ($page === 'post.show') {
        require $path . '/view/post/show.php';
    } elseif ($page === 'user.connect') {
        require $path . '/view/user/connectionForm.php';
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require $path . '/view/error/error' . $e->getMessage() . '.php';
}
$content = ob_get_clean();

require $path . '/view/base.php';
