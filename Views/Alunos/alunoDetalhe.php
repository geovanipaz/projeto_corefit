<?php include_once 'partials/header.php';

?>


<section class="main-detalheAluno">
    <div class="card-detalheAluno">
        <div class="card-1">
            <div class="card-imagem">
                <img src="<?= ROOT_URL ?>/uploads/alunos/1765297628Chris_Bumstead_on_Gymshark.jpg" alt="">
            </div>
            <div class="card-nome">
                <h2>Arnold</h2>
            </div>
        </div>
        <div class="card-2">
            <div class="info-gerais">
                <h2>INFORMAÇÕES</h2>
            </div>
            <div class="info-especificas">
                <div class="info-cpf">
                    <h5>CPF</h5>
                    <p>134.255.266-98</p>
                </div>
                <div class="info-profissao">
                    <h5>PROFISSÃO</h5>
                    <p>Marombeiro</p>
                </div>
                <div class="info-nascimento">
                    <h5>DATA DE NASCIMENTO</h5>
                    <p>23/03/1998</p>
                </div>
                <div class="info-peso">
                    <h5>PESO</h5>
                    <p>98</p>
                </div>
                <div class="info-matricula">
                    <h5>DATA DE MATRICULA</h5>
                    <p>12/02/2025</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= ROOT_URL ?>src/js_alunos.js"></script>
<?php include_once 'partials/footer.php'; ?>
