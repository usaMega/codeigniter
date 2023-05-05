<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$meta_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('public/styles/bootstrap.min.css'); ?>" rel="stylesheet" >
    <link href="<?= base_url('public/styles/style.css'); ?>" rel="stylesheet" >
</head>
<body>

    <div class="app">
        <?= $this->include('layout/nav/navbar.php') ?>
        <?= $this->renderSection('content') ?>
    </div>

<script src="<?= base_url('public/scripts/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('public/scripts/script.js');?>"></script>
</body>
</html>