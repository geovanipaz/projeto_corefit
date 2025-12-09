<?php include_once 'partials/header.php';

?>


<section class="main-AddAluno">
    <div class="card-AddAluno">
        <div id="sucesso-addAluno" class="addAluno_sucesso">
            <h4>Aluno Cadastrado com Sucesso!</h4>

            <div class="sucesso-links">
                <a href="">Página Principal</a>
                <a href="">Acessar Aluno</a>
            </div>
        </div>
        <h2>Matricular Aluno</h2>
        <div id="alert__error" class="aviso">
            <!--<div class="avisoerro text-center"></div>-->
        </div>
        <form action="" class="formAddAluno" id="addAlunoForm">
            <div class="form-control">
                <label for="">Nome</label>
                <input type="text" class="aluno-input" name="nome" id="nome">
            </div>
            <div class="form-control-small">
                <div>
                    <label for="">Data de Nascimento</label>
                    <input type="date" class="aluno-input-small" name="nascimento" id="nascimento">
                </div>
                <div>
                    <label for="">Peso</label>
                    <input type="number" class="aluno-input-small" name="peso" id="peso">
                </div>
            </div>
            <div class="form-control">

            </div>
            <div class="form-control">
                <label for="">Profissão</label>
                <input type="text" class="aluno-input" name="profissao" id="profissao">
            </div>
            <div class="form-control">
                <label for="">CPF</label>
                <input type="text" class="aluno-input" name="cpf" id="cpf">
            </div>
            <div class="form-control-small">
                <div>
                    <label for="">Plano</label>
                    <select name="plano" id="" class="aluno-input-small">
                        <option selected value="mensal">Mensal</option>
                        <option value="trimestral">Trimestral</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>
                <div>
                    <label for="">Valor Pago</label>
                    <input type="number" class="aluno-input-small" name="pagamento" id="pagamento">
                </div>
            </div>

            <div class="form-control">
                <label for="">Selecione uma foto</label>
                <input type="file" name="foto-aluno" id="foto-aluno">
            </div>

            <input type="hidden" name="acao" value="addaluno">
            <button type="submit" name="submit" class="btn-confirmarMatricula">Cadastrar</button>
        </form>
    </div>
</section>


<?php include_once 'partials/footer.php'; ?>
<script src="../src/js_alunos.js"></script>