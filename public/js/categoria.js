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
    nomcat = $('#nomcat').val();

    if (nomcat.trim() != "") {
        $.ajax({
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == "true") {
                    $('#retorno').html('Categoria adicionada com sucasso!');
                    // history.back();

                    //redireciona usuario
                    //location.href='/categoria';
                    //
                    //Limpa o campo e retorna ao campode adicionar categoria
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                } else {
                    $('#retorno').html('falha ao adicionar categoria');
                }
            },
            error: function (argument) {
                //Açaõ de erro
                $('#retorno').html('Erro ao cadastrar categoria');
            }
        });
    }else{
        $('#retorno').html("Preecha todos os campos!");
    }
    return false;
}

