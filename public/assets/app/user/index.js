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

const editUser = () => {
    let model = $('#user_edit_form').serializeObject()
    ajaxPost('user/index.php?action=user_edit', model)
        .then((res) => {
            console.log(res)
            if (res.status) {
                alert("Atualizado com sucesso!")
                closeModal('#userEditModal')
                window.location.reload()
            }
        })
        .catch((err) => {
            console.log(err)
        })

}

const ModalEditarUser = (data) => {
    openModal('#userEditModal')
    loadUser(data)
}

const removeUser = (id) => {
    if (confirm("Deseja realmente apagar este usuario ?")) {
        ajaxGet(`user/index.php?action=user_destroy&id=${id}`)
            .then((res) => {
                if(res.status) {
                    alert("Deletado com sucesso.")
                    getAll()
                }
            }).catch((err) => {
                console.log(err)
            })
    }
}

const renderRows = (data) => {
    let rows = data.map(item => {
        let user = JSON.parse(window.localStorage.getItem('user'))
        if (user.id !== item.id) {
            let updatedButton = createButton('Editar', 'warning')
            updatedButton.click(() => ModalEditarUser(item))

            let deletedButton = createButton('Excluir', 'danger')
            deletedButton.click(() => removeUser(item.id))

            return $('<tr>')
                .append($('<td>').append(item.id))
                .append($('<td>').append(item.username))
                .append($('<td>').append(dataAtualFormatada(item.created_at)))
                .append($('<td>').append(updatedButton).append(deletedButton))
        }
    })
    $('#usuarioRows').html(rows)
}


const loadUser = (data) => {
    $('#id').val(data.id)
    $('#username').val(data.username)
    $('#password').val(data.password)
}

$(() => {
    getAll()
})