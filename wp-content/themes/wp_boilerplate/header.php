<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head() ?>
        
</head>

<body class="text-center">
    <!-- Navbar content -->
    <nav class="navbar fixed-top">
        <a href="#home">
            <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" alt="Logo" class="logo">
        </a>
        <ul class="nav nav-pills justify-content-end tindog">
            <li class="nav-item p-1">
                <a class="nav-link active" href="#home">Inicio</a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="#about">Acerca de</a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="#productos">Productos</a>
            </li>
        </ul>
    </nav>