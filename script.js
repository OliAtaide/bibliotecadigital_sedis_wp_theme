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

    $('.btn.categoria').on('click', function () {
        // $('.carousel-' + $(this).data('type')).remove();
        var type = $(this).data('type');
        var cat = $(this).data('category');
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'filter_projects',
                category: cat,
                type: type
            },
            success: function (res) {
                $('.carousel-' + type).html(res);
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});