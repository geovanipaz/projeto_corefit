<?php include_once 'partials/header.php';

?>


<section class="main-AddAluno">
    <div class="card-AddAluno">
        
        <h2>Matricular Aluno</h2>
        <div id="alert__error" class="aviso">
            
        </div>
        <form action="" class="formAddAluno" id="addAlunoForm">
            <div class="form-control">
                <label for="">Nome</label>
                <input type="text" class="aluno-input" name="nome">
            </div>
            <div class="form-control">
                <label for="">Data de Nascimento</label>
                <input type="date" class="aluno-input" name="nascimento">
            </div>
            <div class="form-control">
                <label for="">Peso</label>
                <input type="number" class="aluno-input" name="peso">
            </div>
            <div class="form-control">
                <label for="">Profissão</label>
                <input type="text" class="aluno-input" name="profissao">
            </div>
            <div class="form-control">
                <label for="">CPF</label>
                <input type="text" class="aluno-input" name="nome">
            </div>
            <div class="form-control">
                <label for="">Plano</label>
                <select name="plano" id="" class="aluno-input">
                    <option selected value="mensal">Mensal</option>
                    <option value="trimestral">Trimestral</option>
                    <option value="anual">Anual</option>
                </select>
            </div>
            <div class="form-control">
                <label for="">Selecione uma foto</label>
                <input type="file" name="foto-aluno">
            </div>
            <input type="hidden" name="acao" value="addaluno">
            <button type="submit" name="submit" class="btn-confirmarMatricula">Cadastrar</button>
        </form>
    </div>
</section>


<?php include_once 'partials/footer.php'; ?>
<script src="../src/js_alunos.js"></script>