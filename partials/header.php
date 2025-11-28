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
    <aside class="sidebar">
        <a href="<?= ROOT_URL ?>" class="sidebar__logo">
            <!--<img src="./assets/logo.png" alt=""> -->
            <h3>Core<span>F</span>it</h3>
        </a>
        <menu class="sidebar__top">
            <a href="" class="active">
                <i class="uil uil-create-dashboard"></i>
                <h5>Dashboard</h5>
            </a>
            <a href="">
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
                    <img src="./assets/candidate1.png" alt="">
                </div>
            </menu>
       </div>

    </nav>

    <section class="main__wrapper">
        <section class="main__left">
            <h1>Visão Geral</h1>
            <menu class="cards">
                <article class="card">
                    <h5>Alunos Matriculados <span class="success"></span></h5>
                    <h2>953</h2>
                    <div>
                        <small></small>
                        <small></small>
                    </div>
                </article>
                <article class="card">
                    <h5>Alunos Adimplentes <span class="success"></span></h5>
                    <h2>780</h2>
                    <div>
                        <small></small>
                        <small></small>
                    </div>
                </article>
                <article class="card">
                    <h5>Treinos Produzidos<span class="success"></span></h5>
                    <h2>95</h2>
                    <div>
                        <small></small>
                        <small></small>
                    </div>
                </article>
               
            </menu>

            <canvas id="chart">

            </canvas>

            <section class="topProducts">
                <h3>Top Selling Products</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Sales</th>
                            <th>Earnings</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <img src="./assets/product1.jpg" alt="">
                                </div>
                                <p>Winter Jacket for females</p>
                            </td>
                            <td>932</td>
                            <td>$23.99</td>
                            <td>1,838</td>
                            <td>$802,00</td>
                            <td>+11.5%</td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <img src="./assets/product1.jpg" alt="">
                                </div>
                                <p>Winter Jacket for females</p>
                            </td>
                            <td>932</td>
                            <td>$23.99</td>
                            <td>1,838</td>
                            <td>$802,00</td>
                            <td>+11.5%</td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <img src="./assets/product1.jpg" alt="">
                                </div>
                                <p>Winter Jacket for females</p>
                            </td>
                            <td>932</td>
                            <td>$23.99</td>
                            <td>1,838</td>
                            <td>$802,00</td>
                            <td>+11.5%</td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <img src="./assets/product1.jpg" alt="">
                                </div>
                                <p>Winter Jacket for females</p>
                            </td>
                            <td>932</td>
                            <td>$23.99</td>
                            <td>1,838</td>
                            <td>$802,00</td>
                            <td>+11.5%</td>
                        </tr>
                    </tbody>
                </table>
                <small>See more...</small>
            </section>
        </section>
        <section class="main__right">
            <article class="topCategories">
                <header>
                    <h4>Top Categories</h4>
                    <i class="uil uil-ellipsis-h"></i>
                </header>
                <canvas id="categories">

                </canvas>
                <ul>
                    <li>
                        <div>
                            <span></span>
                            <h5>Fashion</h5>
                        </div>
                        <h6>80.4%</h6>
                    </li>
                    <li>
                        <div>
                            <span></span>
                            <h5>Food</h5>
                        </div>
                        <h6>73.0%</h6>
                    </li>
                    <li>
                        <div>
                            <span></span>
                            <h5>Eletronics</h5>
                        </div>
                        <h6>55.4%</h6>
                    </li>
                    <li>
                        <div>
                            <span></span>
                            <h5>Others</h5>
                        </div>
                        <h6>47.0%</h6>
                    </li>
                </ul>
                <button>View Details <i class="uil uil-external-link-alt"></i></button>
            </article>
            <article class="nextEvents">
                <header>
                    <h4>Upcoming Events</h4>
                    <i class="uil uil-ellipsis-h"></i>
                </header>
                <div class="nextEvents__image">
                    <img src="./assets/events.png" alt="">
                </div>
                <ul>
                    <li>
                        <div class="event__image">
                            <img src="./assets/event1.jpg" alt="">
                        </div>
                        <div>
                            <h5>Natal</h5>
                            <small> 20 - 25 December, 2025</small>
                        </div>
                    </li>
                    <li>
                        <div class="event__image">
                            <img src="./assets/event2.jpg" alt="">
                        </div>
                        <div>
                            <h5>Fim de Ano</h5>
                            <small> 26 - 31 December, 2025</small>
                        </div>
                    </li>
                    <li>
                        <div class="event__image">
                            <img src="./assets/event3.jpg" alt="">
                        </div>
                        <div>
                            <h5>Natal</h5>
                            <small> 20 - 25 December, 2025</small>
                        </div>
                    </li>
                </ul>
                <button>View event Calendar  <i class="uil uil-external-link-alt"></i></button>
            </article>
        </section>
    </section>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./src/main.js"></script>
    
</body>

</html>