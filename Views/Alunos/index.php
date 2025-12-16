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
            <h3>Lista de Alunos</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Data de Matricula</th>
                        <th>CPF</th>
                        <th>Plano</th>

                    </tr>
                </thead>
                <tbody class="tabelaAlunos"></tbody>
          
            </table>
            <small> <a href="<?= ROOT_URL ?>alunos">Ver mais...</a></small>
        </section>
    </section>
    <section class="main__right">
        <article class="nextEvents">
            <header>
                <h4>Ultimas Atualizações</h4>
                <i class="uil uil-ellipsis-h"></i>
            </header>

            <ul>
                <li>

                    <div>
                        <h5>23/12/2025</h5>
                        <small> Ronnie Coleman Pagou mensalidade</small>
                    </div>
                </li>
                <li>

                    <div>
                        <h5>21/12/2025</h5>
                        <small>Ramon Dino foi matriculado</small>
                    </div>
                </li>
                <li>

                    <div>
                        <h5>20/12/2025</h5>
                        <small>Julio passou treino para Renato </small>
                    </div>
                </li>
            </ul>
            <button>Ver mais <i class="uil uil-external-link-alt"></i></button>
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
<script src="<?= ROOT_URL ?>src/js_alunos.js"></script>