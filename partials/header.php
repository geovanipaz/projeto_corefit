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
            <img src="./assets/logo.png" alt="">
            <h3>SH<span>O</span>P</h3>
        </a>
        <menu class="sidebar__top">
            <a href="" class="active">
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
            <h1>Overview</h1>
            <menu class="cards">
                <article class="card">
                    <h5>Products viwed <span class="success">+5.0%</span></h5>
                    <h2>953.4k</h2>
                    <div>
                        <small>Vs Last Month</small>
                        <small>477.2%</small>
                    </div>
                </article>
                <article class="card">
                    <h5>Products viwed <span class="success">+5.0%</span></h5>
                    <h2>953.4k</h2>
                    <div>
                        <small>Vs Last Month</small>
                        <small>477.2%</small>
                    </div>
                </article>
                <article class="card">
                    <h5>Products viwed <span class="success">+5.0%</span></h5>
                    <h2>953.4k</h2>
                    <div>
                        <small>Vs Last Month</small>
                        <small>477.2%</small>
                    </div>
                </article>
                <article class="card">
                    <h5>Products viwed <span class="success">+5.0%</span></h5>
                    <h2>953.4k</h2>
                    <div>
                        <small>Vs Last Month</small>
                        <small>477.2%</small>
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
   
</body>

</html>