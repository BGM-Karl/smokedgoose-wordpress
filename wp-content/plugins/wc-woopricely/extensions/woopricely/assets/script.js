"use strict";
jQuery(document).ready(function ($) {
    
    run_pri_tips();
    run_pri_timer();
    $(document.body).on('updated_cart_totals', function () {
        run_pri_tips();
    });
    $(document.body).on('updated_checkout', function () {
        run_pri_tips();
    });

    $('form.checkout').on('change', 'input[name^="payment_method"]', function () {
        update_checkout();
    });

    function run_pri_tips() {

        $('.fee').each(function () {
            var zcpri_fee = $(this);
            var zcpri_fee_inf = zcpri_fee.find('.zc_zri_fee_rel');
            zcpri_fee.find('th').append(zcpri_fee_inf);
            zcpri_fee.find('td').find('.zc_zri_fee_rel').remove();
            zcpri_fee_inf.removeClass('zc_zri_fee_rel');
        });

        $('.zc_zri_fee').tipTip({defaultPosition: 'top'});
    }


    function run_pri_timer() {
        //data-zcpri_datetime="2020/10/10" data-zcpri_format="%D days %H:%M:%S"

        $('.zc_zri_countdown_timer_clock').each(function () {
            var clck = $(this);
            var dt = clck.attr('data-zcpri_datetime');
            var dt_days = clck.attr('data-zcpri_days');
            var dt_hours = clck.attr('data-zcpri_hours');
            var dt_minutes = clck.attr('data-zcpri_minutes');
            var dt_seconds = clck.attr('data-zcpri_seconds');


            $('.zc_zri_countdown_timer_clock').countdown(dt).on('update.countdown', function (event) {
                clck.html(event.strftime(
                        '<span class="zcpri_clk_t"><b>%D</b>' + dt_days + '</span>'
                        + '<span class="zcpri_clk_t"><b>%H</b>' + dt_hours + '</span>'
                        + '<span class="zcpri_clk_t"><b>%M</b>' + dt_minutes + '</span>'
                        + '<span class="zcpri_clk_t"><b>%S</b>' + dt_seconds + '</span>'));
            });
        });


    }

    function update_checkout() {
        $('body').trigger('update_checkout');
    }
});


