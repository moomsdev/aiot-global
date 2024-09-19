let scripts = {
    frame: null,
    init: function () {
        this.frame = wp.media({
            title: 'Select image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        });
    },
    disableTheGrid: function () {
        jQuery('form#posts-filter').append(`<div class="gm-loader" style="position:absolute;z-index:99999999;top:0;left:0;right:0;bottom:0;display:flex;align-items:center;justify-content:center;background-color:rgba(192,192,192,0.51);color:#000000">Updating</div>`);
    },
    enableTheGrid: function () {
        jQuery('form#posts-filter').find('.gm-loader').remove();
    },
};

jQuery(document).on('click', '[data-trigger-change-thumbnail-id]', function () {
    let postId = jQuery(this).data('post-id');
    let thisButton = jQuery(this);
    let frame = wp.media({
        title: 'Select image',
        button: {
            text: 'Use this image'
        },
        multiple: false
    });

    frame.on('select', function () {
        let attachment = frame.state().get('selection').first().toJSON();
        let attachmentId = attachment.id;
        let originalImageUrl = attachment.url;
        scripts.disableTheGrid();
        jQuery.post('/wp-admin/admin-ajax.php', {
            action: 'update_post_thumbnail_id',
            post_id: postId,
            attachment_id: attachmentId
        }, function (response) {
            if (response.success === true) {
                thisButton.find('img').attr('src', originalImageUrl);
            } else {
                alert(response.data.message);
            }
            scripts.enableTheGrid();
        });
    });
    frame.open();
});

jQuery(function () {
    scripts.init();
});
