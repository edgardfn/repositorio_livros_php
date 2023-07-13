const registerForm = document.getElementById("books-register-form");
const msgRegAlertError = document.getElementById("msgRegAlertError");

registerForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    
    document.getElementById("books-register-btn").value = "Salvando...";

    if(document.getElementById("name").value === ""){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Necessário preencher o campo nome!</div>";
    }else if(document.getElementById("author_name").value === ""){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Necessário preencher o campo autor!</div>";
    }else if(document.getElementById("publisher_name").value === ""){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Necessário preencher o campo editora!</div>";
    }else if(document.getElementById("year").value === ""){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Necessário preencher o campo ano!</div>";
    }else if(document.getElementById("genre").value === ""){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Necessário selecionar o genêro!</div>";
    }else if(document.getElementById("year").value < 2000 || document.getElementById("year").value > 2023){
        msgRegAlertError.innerHTML = "<div class='alert-warning' role='alert'>Erro: Campo Ano de Lançamento aceita somente datas entre 2000 e 2023!</div>";
    }else{
        const dadosForm = new FormData(registerForm);
        
        const dados = await fetch("register.php", {
            method: "POST",
            body: dadosForm,
        });
    
        const resposta = await dados.json();
        
        if(resposta['erro']){
            msgRegAlertError.innerHTML = resposta['msg'];
        }else{
            msgRegAlertError.innerHTML = resposta['msg'];
            registerForm.reset();
        }
    }    
    
    document.getElementById("books-register-btn").value = "Cadastrar";
});