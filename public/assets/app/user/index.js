const applyFilter = () => {
    let term = $('#term').val()
    if (term) {
        ajaxGet(`user/index.php?action=user_filter&term=${term}`)
            .then((res) => {
                renderRows(res)
            }).catch((err) => {
                console.log(err)
            })
    } else {
        getAll()
    }
}

const getAll = () => {
    ajaxGet('user/index.php?action=usuarios')
        .then((res) => {
            renderRows(res)
        }).catch((err) => {
            console.log(err)
        })
}
const onSaveUser = () => {
    let model = $('#user_form').serializeObject()
    if (model.username && model.password) {
        if (!model.id) {
            insertUser(model)
        }
    } else {
        validField('.form-control', "Por preencha os campos em vermelhos")
    }

}

const insertUser = (model) => {
    ajaxPost('user/index.php?action=user_register', model)
        .then((res) => {
            if (res.status) {
                alert("Cadastrado com sucesso")
                window.location.href = "/user_view_all"
            } else if (!res.status && res.validator) {
                validField('#username', "Este username já existe")
            }
        }).catch((err) => {
            console.log(err)
        })
}

const renderRows = (data) => {
    let rows = data.map(item => {
        let updatedButton = createButton('Editar', 'warning')
        let deletedButton = createButton('Excluir', 'danger')
        return $('<tr>')
            .append($('<td>').append(item.id))
            .append($('<td>').append(item.username))
            .append($('<td>').append(dataAtualFormatada(item.created_at)))
            .append($('<td>').append(updatedButton).append(deletedButton))
    })
    $('#usuarioRows').html(rows)
}



$(() => {
    getAll()
})