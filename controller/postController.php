<?php

function home()
{
    require dirname(__DIR__) . '/model/postRepository.php';
    $posts = findAll();

    ob_start();
    require dirname(__DIR__) . '/view/post/home.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}

function show()
{
    require dirname(__DIR__) .  '/model/postRepository.php';
    $post = findOneById($_GET['id']);

    ob_start();
    require dirname(__DIR__) .  '/view/post/show.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}
