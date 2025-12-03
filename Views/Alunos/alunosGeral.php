<?php include_once 'partials/header.php';

?>


<div class="btn-matricular">
    <i class="uil uil-plus"></i>
    <a href="<?= ROOT_URL ?>alunos/add"><button>Matricular Aluno</button></a>
</div>
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
        <tbody>
            <tr>
                <td>
                    <div>
                        <img src="./assets/product1.jpg" alt="">
                    </div>
                    <p>Ronnie Colleman</p>
                </td>
                <td>20/02/1972</td>
                <td>30/04/2025</td>
                <td>111.111.222-78</td>
                <td>Mensal</td>
                <td><a href="">Info <i class="uil uil-info-circle"></i></a></td>
                
            </tr>
            <tr>
                <td>
                    <div>
                        <img src="./assets/product1.jpg" alt="">
                    </div>
                    <p>Ramon Dino</p>
                </td>
                <td>20/02/1972</td>
                <td>30/04/2025</td>
                <td>111.111.222-78</td>
                <td>Trimestral</td>
                <td><a href="">Info <i class="uil uil-info-circle"></i></a></td>
                
            </tr>
            <tr>
                <td>
                    <div>
                        <img src="./assets/product1.jpg" alt="">
                    </div>
                    <p>Jay Catlay</p>
                </td>
                <td>20/02/1972</td>
                <td>30/04/2025</td>
                <td>111.111.222-78</td>
                <td>Anual</td>
                <td><a href="">Info <i class="uil uil-info-circle"></i></a></td>
            </tr>
           
        </tbody>
    </table>
    
    <div class="alunos-paginacao">
        <div class="paginacao">
            <button class="btn-pag"><i class="uil uil-angle-left"></i> Anterior</button><button class="btn-pag">2</button>
            <button class="btn-pag">3</button><button class="btn-pag">4</button>
            <button class="btn-pag">Próximo <i class="uil uil-angle-right"></i></button>
        </div>
    </div>
</section>





<?php include_once 'partials/footer.php'; ?>