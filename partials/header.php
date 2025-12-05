<?php require_once __DIR__ . '/../constants.php';  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COREFIT</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>/src/style.css">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
</head>

<body>
    <aside class="sidebar">
        <a href="<?= ROOT_URL ?>" class="sidebar__logo">
            <!--<img src="./assets/logo.png" alt=""> -->
            <h3>Core<span>F</span>it</h3>
        </a>
        <menu class="sidebar__top">
            <a href="<?= ROOT_URL ?>" class="active">
                <i class="uil uil-create-dashboard"></i>
                <h5>Dashboard</h5>
            </a>
            <a href="<?= ROOT_URL ?>alunos">
                <i class="uil uil-th-large"></i>
                <h5>Alunos</h5>
            </a>
            <a href="">
                <i class="uil uil-tag-alt"></i>
                <h5>Treinos</h5>
            </a>
            <a href="">
                <i class="uil uil-users-alt"></i>
                <h5>Exercícios</h5>
            </a>
            <a href="">
                <i class="uil uil-chart-pie"></i>
                <h5>Financeiro</h5>
            </a>
            <a href="">
                <i class="uil uil-envelopes"></i>
                <h5>Messages</h5>
            </a>
        </menu>
        <menu class="sidebar__bottom">
            <a href="">
                <i class="uil uil-question-circle"></i>
                <h5>Support</h5>
            </a>
            <a href="">
                <i class="uil uil-setting"></i>
                <h5>Settings</h5>
            </a>
            <a href="">
                <i class="uil uil-signout"></i>
                <h5>Logout</h5>
            </a>

        </menu>
    </aside>

    <button class="sidebar__toggle-open"><i class="uil uil-bars"></i></button>
    <button class="sidebar__toggle-close"><i class="uil uil-multiply"></i></button>

    <main>
        <nav class="navbar">
            <div class="navbar__search">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="buscando...">
                <i class="uil uil-microphone"></i>
            </div>
            <menu class="navbar__items">
                <button class="navbar__theme-btn">
                    <i class="uil uil-moon"></i>
                </button>
                <button class="navbar__export-btn">
                    Export
                    <i class="uil uil-export"></i>
                </button>
                <div class="navbar__items-image">
                    <img src="<?= ROOT_URL ?>/assets/candidate1.png" alt="">
                </div>
            </menu>
            </div>

        </nav>