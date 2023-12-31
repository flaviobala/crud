
function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    if (confirm('Deseja Excluir o Registro?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: { 
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Aguarde um momento..',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
                alert('Arquivo Excluido com sucesso!');
            } else {
                alert('nao foi possivel excluir');
            }
        }).fail(function (data) {
            $.unblockUI();
            alert('Nao foi possivel buscar os dados');
        });
    }
}
$('#mascara_valor').mask('#.##0,00', { reverse: true})