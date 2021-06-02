jQuery(document).ready(function($) {

    $(document).on("click", ".upload_image_button", function(e) {

        e.preventDefault();
        var $button = $(this);

        // criar a janela de m�dia
        var file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Selecione ou envie uma nova imagem',
            library: { // retirar para exibir todas
                type: 'image' // apenas 1 imagem
            },
            button: {
                text: 'Selecionar'
            },
            multiple: false // marque verdadeiro para enviar v�rias
        });

        // roda depois que a imagem � selecionada
        file_frame.on('select', function() {
            // selecionado apenas uma imagem
            var attachment = file_frame.state().get('selection').first().toJSON();

            $button.siblings('input').val(attachment.url);
        });

        file_frame.open();
    });

});