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




loadTodosAlunosPaginao();

addAlunoForm.addEventListener('submit', function (e) {
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
        alertError.classList.add("aviso");
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
  const url = "./Controller/alunos_controll_js.php?acao=getalunos";

  try {
    const response = await fetch(url);
    const data = await response.json();





    const tabela = document.querySelector(".tabelaAlunos");
    tabela.innerHTML = data.alunosLista.map(aluno => {
      const {
        id,nome, nascimento, data_matricula, cpf, foto_aluno, tipo
      } = aluno;
      console.log(data);
      return `
      <tr>
                <td>
                    <div>
                        <img src="./uploads/alunos/${foto_aluno}" alt="">
                    </div>
                    <p>${nome}</p>
                </td>
                <td>${nascimento}</td>
                <td>${data_matricula}</td>
                <td>${cpf}</td>
                <td>${tipo}</td>
                <td><a href="">Info <i class="uil uil-info-circle"></i></a></td>
                
            </tr>
                
            `;
    }).join("");

    // Se houver paginação:


  } catch (error) {
    console.error("Erro ao carregar alunos:", error);
  }
}


async function loadTodosAlunosPaginao(paginaAtual = 1, limite = 3) {
  const url = `./Controller/alunos_controll_js.php?acao=getalunos&pagina=${paginaAtual}&limite=${limite}`;

  try {
    const response = await fetch(url);
    const data = await response.json();


    const tabela = document.querySelector(".tabelaAlunos");
    tabela.innerHTML = data.alunosLista.map(aluno => {
      const {
        id,nome, nascimento, data_matricula, cpf, foto_aluno, tipo
      } = aluno;
      //console.log(data);
      return `
      <tr>
                <td>
                    <div>
                        <img src="./uploads/alunos/${foto_aluno}" alt="">
                    </div>
                    <p>${nome}</p>
                </td>
                <td>${nascimento}</td>
                <td>${data_matricula}</td>
                <td>${cpf}</td>
                <td>${tipo}</td>
                <td><a href="alunos/aluno/${id}">Info <i class="uil uil-info-circle"></i></a></td>
                
            </tr>
                
            `;
    }).join("");

    // Se houver paginação:
    const totalPaginas = data.totalPages;
    renderizaPaginacao(paginaAtual, totalPaginas);

  } catch (error) {
    console.error("Erro ao carregar alunos:", error);
  }
}

function renderizaPaginacao(currentPage, totalPages) {
  const paginationContainer = document.querySelector(".paginacao");
  paginationContainer.innerHTML = ""; // Limpar paginação anterior

  // Adicionar botão "Previous"
  if (currentPage > 1) {
    paginationContainer.innerHTML += `<button class="btn-pag" data-page="${currentPage - 1}">Anterior</button>`;
  }

  // Adicionar os números das páginas
  for (let i = 1; i <= totalPages; i++) {
    paginationContainer.innerHTML += `
    
    
     <button class="btn-pag${i === currentPage ? ' pagina-ativa' : ''}" data-page="${i}">
        ${i}
      </button>`;
  }

  // Adicionar botão "Next"
  if (currentPage < totalPages) {
    paginationContainer.innerHTML += `<button class="btn-pag" data-page="${currentPage + 1}">Próxima</button>`;
  }

  // Adicionar eventos aos botões
  document.querySelectorAll('.btn-pag').forEach(btn => {
    btn.addEventListener('click', () => {
      paginaAtual = Number(btn.dataset.page);
      loadTodosAlunosPaginao(paginaAtual);
    });
  });
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