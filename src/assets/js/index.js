$(() => {
    $(document).on('change', '.input-rating', ({target}) => {
        $('.input-rating').triggerHandler('beforeChange', '[jQuery(this)]');
        const val2 = parseInt($(target).val());
        $(target).parent().find('.star').each((key, v) => {
            const path = $(v).attr('data-path');
            if (parseInt($(v).attr('data-value')) <= val2) {
                $(v).attr('src', `${path}/imgs/fav.svg`);
                $(v).removeClass('grey').addClass('yellow');
            } else {
                $(v).attr('src', `${path}/imgs/fav-gray.svg`);
                $(v).removeClass('yellow').addClass('grey');
            }
        });
        $('.input-rating').triggerHandler('afterChange', '[jQuery(this)]');
    });
    const inputs = $('.input-rating');
    $(inputs).each((k, v) => {
        if ($(v).val()) {
            $('.input-rating').trigger('change');
        }
    });

    $(document).on('click', '.star', ({target}) => {
        let value = $(target).attr('data-value');
        const hasYellow = $(target).hasClass('yellow');
        const oldValue = $('.rating-container .input-rating').val();
        if (value === '1' && oldValue === '1' && hasYellow) {
            value = '0';
        }
        $(target).parent().find('.input-rating').val(value).trigger('change');
    });
});