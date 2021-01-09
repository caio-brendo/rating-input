$(() => {
    $(document).on('change', '.input-rating', ({target}) => {
        $('.input-rating').triggerHandler('beforeChange', '[jQuery(this)]');
        const val2 = parseInt($(target).val());
        $(target).parent().find('.star').each((key, v) => {
            const path = $(v).attr('data-path');
            if (parseInt($(v).attr('data-value')) <= val2) {
                $(v).attr('src', `${path}/imgs/fav.svg`);
            } else {
                $(v).attr('src', `${path}/imgs/fav-gray.svg`);
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
        const value = $(target).attr('data-value');
        $(target).parent().find('.input-rating').val(value).trigger('change');
    });
});