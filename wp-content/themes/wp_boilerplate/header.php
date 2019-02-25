<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head() ?>
        
</head>

<body id="home" class="text-center">
    <!-- Navbar content -->
    <nav class="navbar fixed-top">
        <a href="#home">
            <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" alt="Logo" class="logo">
        </a>
        <ul class="nav nav-pills justify-content-end tindog">
            <li class="nav-item p-1">
                <a href="#home" class="nav-link active" onclick="$('body').animatescroll();">Inicio</a>
            </li>
            <li class="nav-item p-1">
                <a href="#home" class="nav-link active" onclick="$('#about').animatescroll();">Acerca de</a>
            </li>
            <li class="nav-item p-1">
                <a href="#home" class="nav-link active" onclick="$('#aprende').animatescroll();">Aprende mas</a>
            </li>
            <li class="nav-item p-1">
                <a href="#home" class="nav-link active" onclick="$('#galeria').animatescroll();">Galeria</a>
            </li>
            <li class="nav-item p-1">
                <a href="#home" class="nav-link active" onclick="$('#footer').animatescroll();">Visitanos</a>
            </li>
        </ul>
    </nav>