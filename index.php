<?php
declare(strict_types=1);
date_default_timezone_set('Asia/Tokyo');

$routes = [
  'home'    => 'ホーム',
  'about'   => 'このサイトについて',
  'news'    => 'お知らせ',
  'contact' => 'お問い合わせ'
];

$page = $_GET['page'] ?? 'home';
if (!array_key_exists($page, $routes)) {
  http_response_code(404);
  $page = '404';
}

$pageTitle   = $routes[$page] ?? 'ページが見つかりません';
$currentPage = $page;

require __DIR__ . '/partials/header.php';

$target = __DIR__ . '/pages/' . $page . '.php';
if (!file_exists($target)) {
  $target = __DIR__ . '/pages/404.php';
  $currentPage = '404';
  $pageTitle = 'ページが見つかりません';
}
require $target;

require __DIR__ . '/partials/footer.php';
