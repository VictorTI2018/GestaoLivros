const getAll = () => {
    ajaxGet('user/index.php?action=usuarios')
    .then((res) => {
        renderRows(res)
    }).catch((err) => {

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