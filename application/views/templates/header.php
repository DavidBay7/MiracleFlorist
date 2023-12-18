<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WP 2</title>

    <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url("assets/pictures/logo.png"); ?> />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style copy.css'); ?>">


    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>


        <a href="#" class="logo">Miracle Florist<span>.</span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
            <?php
            $user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
            if (!$user) {
                ?>
                <a href=<?= base_url("autentifikasi") ?>>Login</a>
            <?php } else {
                if ($user->role_id == 1) {
                    ?>
                    <a href=<?= base_url("admin") ?>>
                        Dashboard
                    </a>
                    <a href=<?= base_url("admin/logout") ?>>
                        Logout
                    </a>
                <?php } elseif ($user->role_id == 2) { ?>
                    <a href="<?= base_url("customer/data_transaction") ?>">
                        Daftar Transaksi
                    </a>
                    <a href="<?= base_url("customer/logout") ?>">
                        Logout
                    </a>
                <?php } ?>

            <?php } ?>
        </nav>

    </header>

</head>

<body>
