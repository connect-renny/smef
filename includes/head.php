<?php
// Shared page head includes
if (!isset($pageTitle)) {
  $pageTitle = 'SME Development Fund';
}
if (!isset($pageDescription)) {
  $pageDescription = 'SME Development Fund (SMEF) — Empowering Omani entrepreneurs and building sustainable businesses.';
}
if (!isset($pageStyles)) {
  $pageStyles = '';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
    />
    <meta name="author" content="SMEF" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <!-- Favicons -->
    <link rel="icon" href="favicon.ico" sizes="32x32" />
    <link rel="apple-touch-icon" href="favicon.ico" />

    <!-- Bootstrap Icon -->
    <link href="assets/css/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="assets/css/bootstrap.rtl.css" rel="stylesheet" /> -->

    <link href="assets/css/swiper-bundle.css" rel="stylesheet" />
    <link href="assets/css/aos.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <?= $pageStyles ?>
  </head>
  <body>
