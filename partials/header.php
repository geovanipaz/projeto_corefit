<?php require_once __DIR__.'/../constants.php';  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COREFIT</title>
    <link rel="stylesheet" href="./src/style.css">
    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css"> 
</head>

<body>
    <aside class="sidebar" class="sidebar__logo">
        <a href="<?= ROOT_URL ?>">
            <img src="./assets/logo.png" alt="">
            <h3>SH<span>O</span>P</h3>
        </a>
        <menu class="siderbar__top">
            <a href="">
                <i class="uil uil-create-dashboard"></i>
                <h5>Dashboard</h5>
            </a>
            <a href="">
                <i class="uil uil-th-large"></i>
                <h5>Orders</h5>
            </a>
            <a href="">
                <i class="uil uil-tag-alt"></i>
                <h5>Products</h5>
            </a>
            <a href="">
                <i class="uil uil-users-alt"></i>
                <h5>Costumers</h5>
            </a>
            <a href="">
                <i class="uil uil-chart-pie"></i>
                <h5>Analytics</h5>
            </a>
            <a href="">
                <i class="uil uil-envelopes"></i>
                <h5>Messages</h5>
            </a>
        </menu>
         <menu class="siderbar__top">
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
   
</body>

</html>