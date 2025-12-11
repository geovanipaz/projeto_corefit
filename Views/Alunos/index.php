<?php include_once 'partials/header.php';






?>


<section class="main__wrapper">
    <section class="main__left">
        <h1>Visão Geral</h1>
        <menu class="cards">
            <article class="card">
                <h5>Alunos Matriculados <span class="success"></span></h5>
                <h2>953</h2>
                <div>
                    <i class="uil uil-user"></i>
                    <small></small>
                    <small></small>
                </div>
            </article>
            <article class="card">
                <h5>Alunos Adimplentes <span class="success"></span></h5>
                <h2>780</h2>
                <div>
                    <i class="uil uil-user-check"></i>
                    <small></small>
                    <small></small>
                </div>
            </article>
            <article class="card">
                <h5>Treinos Produzidos<span class="success"></span></h5>
                <h2>95</h2>
                <div>
                    <i class="uil uil-dumbbell"></i>
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
            <button>View event Calendar <i class="uil uil-external-link-alt"></i></button>
        </article>
        <article class="topCategories">
            <header>
                <h4>Alunos por faixa etária</h4>
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
        
    </section>
</section>


<?php include_once 'partials/footer.php'; ?>