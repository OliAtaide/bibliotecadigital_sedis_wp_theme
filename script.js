jQuery(document).ready(function ($) {
    // Javascript to enable link to tab
    var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash
    if (hash) {
        $('.nav-tabs a[href="#' + hash + '"]').tab('show');
    }

    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });

    $('.modal').on('hide.bs.modal', function (e) {
        $('video').trigger('pause');
    });

    $('.imp-voltar').hide();

    $('.btn-categoria').on('click', function () {
        $('.imp-voltar').show();

        $('.categorias-titulo').hide();

        $('.btn-categoria').not($(this)).parent().hide();

        $('.imp-input').val($(this).data('category')).change();
    });

    $('.imp-voltar').on('click', function () {
        $('.imp-voltar').hide();

        $('.categorias-titulo').show();

        $('.btn-categoria').parent().show();

        $('.imp-input').val($(this).data('')).change();
    });

    function filter(t, c, s) {
        var type = t;
        var cat = c;
        var search = s;
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'filter_projects',
                category: cat,
                type: type,
                search: search
            },
            success: function (res) {
                $('.carousel-' + type).html(res);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    $('.imp-input').change(function () {
        filter('impressos', $(this).val(), $('imp-busca').val());
    })

    $('.imp-busca').change(function () {
        filter('impressos', $('.imp-input').val(), $(this).val());
    })
});