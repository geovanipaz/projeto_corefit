<?php include_once 'partials/header.php';

?>

<section class="main-AddAluno">
    <div class="card-AddAluno">
        <div id="sucesso-addAluno" class="addAluno_sucesso">
            <h4>Usuário Cadastrado com Sucesso!</h4>

            <div class="sucesso-links">
                <a href="<?= ROOT_URL ?>alunos">Página Principal</a>
                <a href="">Acessar Aluno</a>
            </div>
        </div>
        <h2>Cadastrar Usuário</h2>
        <div id="alert__error" class="aviso">
            <!--<div class="avisoerro text-center"></div>-->
        </div>
        <form action="" class="formAddAluno" id="addUsuarioForm">
            <div class="form-control">
                <label for="">Nome</label>
                <input type="text" class="aluno-input" name="nome-usuario" id="nome-usuario">
            </div>
           
            <div class="form-control">
                <div>
                    <label for="">Username</label>
                    <input type="text" class="aluno-input" name="username" id="username">
                </div>
            </div>
            <div class="form-control">
                <label for="">Email</label>
                <input type="text" class="aluno-input" name="email" id="email">
            </div>
            <div class="form-control">
                <label for="">Tipo</label>
                    <select name="tipo" id="" class="aluno-input">
                        <option selected value="root">Administrador</option>
                        <option value="instrutor">Instrutor</option>
                        
                    </select>
            </div>
            <div class="form-control">
                <label for="">Senha</label>
                <input type="password" class="aluno-input" name="senha" id="senha">
            </div>
            <div class="form-control">
                <label for="">Repita Senha</label>
                <input type="password" class="aluno-input" name="senha-repetida" id="senha-repetida">
            </div>
            
            <input type="hidden" name="acao" value="addusuario">
            <button type="submit" name="submit" class="btn-confirmarMatricula">Cadastrar</button>
        </form>
    </div>
</section>






<?php include_once 'partials/footer.php'; ?>
<script src="<?= ROOT_URL ?>src/js_usuarios.js"></script>