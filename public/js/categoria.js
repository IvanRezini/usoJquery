function eliminarCategoria(idForm, destino) {

    confirma = confirm("Deseja eliminar esta categoria?");
    if (confirma) {
        dadosForm = $('#' + idForm).serialize();
        $.ajax({
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                //Açao de sucessso
                if (data == 'true') {
                    $('#linha' + idForm).fadeOut(1000);
                } else {
                    alert('Nao foi posivel eliminar a categoria');
                }

            },
            error: function (argument) {
                //Açaõ de erro
                alert('Erro ao eliminar a categoria');
            }
        });
    }
    return false;
}

function mostraEsconderTitulo() {
    $('#titulo').slideToggle(1000);
}

//Adicionar categoria
function adicionarCategoria(destino) {

    dadosForm = $('#formAdd').serialize();
    $.ajax({
        method: 'post',
        url: destino,
        data: dadosForm,
        dataType: 'html',
        success: function (data) {
            if (data == "true") {
                alert('Categoria adicionada com sucasso!');
                history.back();
            } else {
                alert('falha ao adicionar categoria');
            }
        },
        error: function (argument) {
            //Açaõ de erro
            alert('Erro ao eliminar a categoria');
        }
    });

    return false;
}

