let scripts = {
    frame: null,
    init: function () {
        this.frame = wp.media({
            title: 'Chọn hình ảnh',
            button: {
                text: 'Sử dụng hình ảnh này'
            },
            multiple: false  // Chỉ cho phép chọn 1 ảnh
        });
    },
    disableTheGrid: function () {
        jQuery('form#posts-filter').append(`<div class="gm-loader" style="position:absolute;z-index:99999999;top:0;left:0;right:0;bottom:0;display:flex;align-items:center;justify-content:center;background-color:rgba(192,192,192,0.51);color:#000000">Đang cập nhật</div>`);
    },
    enableTheGrid: function () {
        jQuery('form#posts-filter').find('.gm-loader').remove();
    },
};

jQuery(document).on('click', '[data-trigger-change-thumbnail-id]', function () {
    let postId = jQuery(this).data('post-id');
    let thisButton = jQuery(this);

    // Mở trình quản lý media của WordPress
    let frame = wp.media({
        title: 'Chọn hình ảnh',
        button: {
            text: 'Sử dụng hình ảnh này'
        },
        multiple: false  // Chỉ chọn một ảnh
    });

    // Khi ảnh được chọn
    frame.on('select', function () {
        let attachment = frame.state().get('selection').first().toJSON();
        let attachmentId = attachment.id;

        // Sử dụng ảnh gốc thay vì thumbnail
        let originalImageUrl = attachment.url;

        // Hiển thị trạng thái "đang cập nhật"
        scripts.disableTheGrid();

        // Gửi yêu cầu AJAX để cập nhật thumbnail
        jQuery.post('/wp-admin/admin-ajax.php', {
            action: 'update_post_thumbnail_id',
            post_id: postId,
            attachment_id: attachmentId
        }, function (response) {
            // Kiểm tra phản hồi từ server
            if (response.success === true) {
                // Cập nhật ảnh gốc trong giao diện
                thisButton.find('img').attr('src', originalImageUrl);
            } else {
                alert(response.data.message);
            }
            // Kích hoạt lại giao diện
            scripts.enableTheGrid();
        });
    });

    // Mở frame chọn ảnh
    frame.open();
});


// Khởi tạo script
jQuery(function () {
    scripts.init();
});
