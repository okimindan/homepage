<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | かいとのサイト</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <a href="index.php?page=home" class="brand-link">かいとのサイト</a>
    </div>
    <nav class="nav">
      <ul>
        <?php foreach ($routes as $key => $label): ?>
          <li>
            <a class="<?php echo ($key === $currentPage) ? 'active' : ''; ?>"
               href="index.php?page=<?php echo urlencode($key); ?>">
              <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>

<main class="container main-content">
