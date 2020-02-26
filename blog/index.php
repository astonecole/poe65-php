<?php

$categories = [
    1 => 'Livre',
    2 => 'Vidéo',
    3 => 'Music',
];

$category = $_POST['category'] ?? '';
$title = $_POST['title'] ?? '';
$teaser = $_POST['teaser'] ?? '';
$content = $_POST['content'] ?? '';
$published = $_POST['published'] ?? '0';
$category = (int) $category;

include 'layout.phtml';
