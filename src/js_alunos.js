const addAlunoForm = document.querySelector('#addAlunoForm')





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
        console.log(data);
        
        
        if (data.status === 501) {
            // Aqui você pode adicionar qualquer código para tratar o status 501
        } else if (data.status === 200) {
            document.querySelector("#alert").classList.remove("alert-sucesso");
            document.querySelector('.avisosucesso').textContent = data.mensagem;
            document.querySelector("#alert").style.display = 'block';

            setTimeout(function() {
                document.querySelector("#alert").style.display = 'none';
            }, 3000);

            modalAddProd.close();
            document.querySelector('#formAddProd').reset();
            loadTodosProdutos();
        } else if (data.status === 404) {
            document.querySelector("#alert-falha").classList.remove("alert-error");
            document.querySelector('.avisoerro').textContent = data.mensagem;
        }
            
    })
    .catch(error => {
        console.error("Erro: " + error);
    });

});