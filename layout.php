<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= \$title ?></title>
    <link href="<?= base_url('assets/sb-admin-2/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body>
    <?php \$this->load->view('layouts/sidebar'); ?>
    <div class="container mt-4">
        <?php \$this->load->view(\$content); ?>
    </div>
</body>
</html>
