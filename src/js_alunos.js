const cpf = document.getElementById('cpf');
const nome = document.getElementById('nome');
const profissao = document.getElementById('profissao');
const nascimento = document.getElementById('nascimento');
const peso = document.getElementById('peso');
const plano = document.getElementById('plano');
const pagamento = document.getElementById('pagamento');
const fotoAluno = document.getElementById('foto-aluno');

//formulário addAluno
const addAlunoForm = document.querySelector('#addAlunoForm');

//alertas
const alertError = document.querySelector("#alert__error");
const sucessoAddAluno = document.querySelector('#sucesso-addAluno');



addAlunoForm.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('submeteu');
   
    // Cria um objeto FormData a partir do formulário
    let formData = new FormData(this);

    // Configura a requisição
    fetch('../Controller/alunos_controll_js.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())  // Parseia a resposta como JSON
    .then(data => {
        //console.log(data);
        
        
        if (data.status === 501) {
            // Aqui você pode adicionar qualquer código para tratar o status 501
        } else if (data.status === 200) {
            sucessoAddAluno.classList.remove("addAluno_sucesso");
            nome.value = "";
            cpf.value = "";
            profissao.value = "";
            nascimento.value = "";
            peso.value = "";
            pagamento.value = 0;
            fotoAluno.value = '';
            //document.querySelector('.avisosucesso').textContent = data.mensagem;
            //document.querySelector("#alert").style.display = 'block';

            

            //modalAddProd.close();
            //document.querySelector('#formAddProd').reset();
            //loadTodosProdutos();
        } else if (data.status === 404) {
            //console.log(data);
            alertError.classList.remove("aviso");
            alertError.textContent = data.mensagem;
        }
            
    })
    .catch(error => {
        console.error("Erro: " + error);
    });

});



async function loadTodosAlunos() {
    const url = "../Controller/controll_produtos.php?acao=getprodutos";

    try {
        const response = await fetch(url);
        const data = await response.json();

        const tabela = document.querySelector(".tabelaProdutos");
        tabela.innerHTML = data.produtosLista.map(produto => {
            const {
                id, nome, preco, descricao, imagem, ativo, cat_nome
            } = produto;

            return `
                <tr>
                    <td>${id}</td>
                    <td>${nome}</td>
                    <td>$${preco}</td>
                    <td>${descricao}</td>
                    <td><img src="../imagens/${imagem || "sem-foto.jpg"}" alt=""></td>
                    <td>${ativo == 1 ? "Disponível" : "Indisponível"}</td>
                    <td>${cat_nome}</td>
                    <td><a data-prod-id="${id}" class="btn-edit-Prod">Editar</a></td>
                    <td><a data-prod-id="${id}" class="btn-delete-prod">Deletar</a></td>
                </tr>
            `;
        }).join("");

        // Se houver paginação:
        // atualizaPaginacao(data.totalPages, pageno);
        
    } catch (error) {
        console.error("Erro ao carregar produtos:", error);
    }
}




//mascara para cpf
cpf.addEventListener('input', function (event) {
  let inputValue = event.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
  inputValue = inputValue.substring(0, 11); // Limita a 11 caracteres (9 dígitos + 2 pontos)

  if (inputValue.length > 9) {
    inputValue = inputValue.replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3-');
  } else if (inputValue.length > 6) {
    inputValue = inputValue.replace(/(\d{3})(\d{3})/, '$1.$2.');
  } else if (inputValue.length > 3) {
    inputValue = inputValue.replace(/(\d{3})/, '$1.');
  }

  event.target.value = inputValue;
});