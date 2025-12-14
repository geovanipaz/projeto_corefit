const username = document.getElementById('username');
const nomeUsuario = document.getElementById('nome-usuario');
const email = document.getElementById('email');
const senha = document.getElementById('senha');
const senhaRepetida = document.getElementById('senha-repetida');

const addAlunoForm = document.querySelector('#addUsuarioForm');


loadTodosUsuarios();



addAlunoForm.addEventListener('submit', function (e) {
  e.preventDefault();
  console.log('submeteu');

  // Cria um objeto FormData a partir do formulário
  let formData = new FormData(this);

  // Configura a requisição
  fetch('../Controller/usuarios_controll_js.php', {
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
        nomeUsuario.value = "";
        username.value = "";
        email.value = "";
        senha.value = "";
        senhaRepetida.value = "";
        
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

async function loadTodosUsuarios() {
  const url = "./Controller/usuarios_controll_js.php?acao=getusuarios";

  try {
    const response = await fetch(url);
    //const data = await response.json();

const text = await response.text();
console.log(text);



    const tabela = document.querySelector(".tabelaUsuarios");
    tabela.innerHTML = data.usuariosLista.map(usuario => {
      const {
        nome, username, tipo
      } = usuario;
      console.log(data);
      return `
      <tr>
                
                <td>${nome}</td>
                <td>${username}</td>
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