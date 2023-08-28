<?php

$errors = [];
$article = '';
$content = '';


if ($_SERVER['REQUEST_METHOD']=='POST') {
    $article = $_POST['article'];
    $content = $_POST['content'];
    if ($article=='') {
        $errors[] = "article is required";
    }
    if ($content=='') {
        $errors[] = "content is required";
    }
}

?>