const logar = () => {
    let model = $('#login_form').serializeObject()
    if (model.username && model.password) {
        ajaxPost('login/index.php?action=logar', model)
            .then((res) => {
               if(res.status) {
                alert("Logado com sucesso")
               } else if(!res.status && res.validator) {
                   let erro = "";
                   for(let error of res.message) {
                       erro += error + " ";
                   }
                   alert(erro)
               }
            }).catch((err) => {
                console.log(err)
            })
    } else {
        alert("Por favor preencha todos os dados!")
    }
}