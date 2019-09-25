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
    //Trava o botao adicionar
    $('#btnSalvar').attr('disabled', 'true');
    if (nomcat.trim() != "") {
        $.ajax({
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == "true") {
                    msg = 'Categoria adicionada com sucesso!';
                    $('#retorno').hide();
                    $('#retorno').html("<h4 class ='sucesso'>" + msg + "</h4>");
                    $('#retorno').fadeIn(800);

                    // history.back();
                    //redireciona usuario
                    //location.href='/categoria';
                    //
                    //Limpa o campo e retorna ao campode adicionar categoria
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                    //Destrava o botao
                    $('#btnSalvar').removeAttr('disabled');
                } else {
                    $('#nomcat').val('');
                    msg = 'falha ao adicionar categoria!';
                    $('#retorno').hide();
                    $('#retorno').html("<h4 class ='erro'>" + msg + "</h4>");
                    $('#retorno').fadeIn(800);
                    $('#btnSalvar').removeAttr('disabled');

                }
            },
            error: function (argument) {
                //Açaõ de erro
                $('#nomcat').val('');
                msg = 'Erro ao cadastrar categoria!';
                $('#retorno').hide();
                $('#retorno').html("<h4 class ='erro'>" + msg + "</h4>");
                $('#retorno').fadeIn(800);
                $('#btnSalvar').removeAttr('disabled');
            }
        });
    } else {
        $('#nomcat').val('');
        msg = 'Preecha todos os campos!';
        $('#retorno').hide();
        $('#retorno').html("<h4 class ='erro'>" + msg + "</h4>");
        $('#retorno').fadeIn(800);
        $('#btnSalvar').removeAttr('disabled');
    }
    return false;
}
function editarCategoria(destino) {
    dadosForm = $('#formEdit').serialize();
    confirma = confirm("Deseja editar esta categoria?");
    if (confirma) {
        $.ajax({
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                //Açao de sucessso
                if (data == 'true') {
                    msg = 'Categoria editada com sucesso!';
                    $('#retorno').hide();
                    $('#retorno').html("<h4 class ='sucesso'>" + msg + "</h4>");
                    $('#retorno').fadeIn(800);
                } else {
                    msg = 'Erro ao editar!';
                    $('#retorno').hide();
                    $('#retorno').html("<h4 class ='erro'>" + msg + "</h4>");
                    $('#retorno').fadeIn(800);
                }
            },
             error: function (argument) {
                //Açaõ de erro
                $('#nomcat').val('');
                msg = 'Erro ao editar!!';
                $('#retorno').hide();
                $('#retorno').html("<h4 class ='erro'>" + msg + "</h4>");
                $('#retorno').fadeIn(800)}
        });

    }

    return false;
}
