<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700%26display=swap" rel="stylesheet">
    <!--named entity expected. Got None -->

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

    <!-- <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css"> -->

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link rel="shortcut icon" type="images/svg" href="<?= base_url('assets/'); ?>img/home/omegaart.svg">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('home'); ?>"><span><img src="<?= base_url('assets/'); ?>img/home/omegaart.svg" width="45" alt=""></span>Omega Art</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <?php
                    // $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                            FROM `home_sub_menu`                         
                        ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                <span><?= $sm['title']; ?></span></a>
                            </li>
                        <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->