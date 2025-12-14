<?php include_once 'partials/header.php';

?>


<div class="btn-matricular-div">
    <button class="btn-matricular">
        <i class="uil uil-plus"></i>
        <a href="<?= ROOT_URL ?>usuarios/add">Cadastrar Usuário</a>
    </button>
</div>
<section class="topProducts">
    <h3>Lista de Usuários</h3>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Username</th>
                <th>Tipo</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody class="tabelaUsuarios"></tbody>
        
    </table>
    
    <div class="alunos-paginacao">
        <div class="paginacao">
            <!--
            <button class="btn-pag"><i class="uil uil-angle-left"></i> Anterior</button><button class="btn-pag">2</button>
            <button class="btn-pag">3</button><button class="btn-pag">4</button>
            <button class="btn-pag">Próximo <i class="uil uil-angle-right"></i></button>
            -->
        </div>
    </div>
</section>





<?php include_once 'partials/footer.php'; ?>
<script src="<?= ROOT_URL ?>src/js_usuarios.js"></script>