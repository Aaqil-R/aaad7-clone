(function($) {
    Drupal.behaviors.thermo_custom = {
        attach: function(context, settings) {

            var collectedamount = parseInt(Drupal.settings.thermo_custom.supporter_count);
            var definedamount = parseInt(Drupal.settings.thermo_custom.definedamount);

            $('#donation_goal').goalProgress({
                goalAmount: definedamount,
                currentAmount: collectedamount,
                textBefore: '£',
                textAfter: ' Raised so far'
            });

            $('#donation_goal_landscape').goalProgress_landscape({
                goalAmount: definedamount,
                currentAmount: collectedamount,
                textBefore: '£',
                // textAfter: 'Raised '
            });
        }
    };

    function meter_width() {
        $("#block-views-donation-block").css({
            'left': ($(".node-donations form").width() + 84 + 'px')
        });

        $("#block-views-donation-block").css({
            'top': ($('.node-donations form').position().top + 'px')
        });

        $('.view-id-donation .goal-counter').height($(".node-donations form").height() - 75);

        if ($(window).width() >= 768) {
            $(".node-donations .field-name-body").addClass("body-width");

            var body_width = ($(".node-donations form").width() + $("#block-views-donation-block").width() + 58);

            $('.view-id-donation .body-width').width($(".node-donations form").width() + $("#block-views-donation-block").width() + 58);

            // $('.webform-component--thermometer .goal-amount').append($('.goal-counter_landscape'));

        } else {
            $('.webform-component--thermometer .goal-counter').height($(".node-donations form").width() - 45);

            $('.webform-component--thermometer .target-amount').insertBefore($('.goal-counter_landscape'));

            $('.view-id-donation .body-width').attr('style', function(i, style) {
                return style.replace(/width[^;]+;?/g, '');
            });
        }

        // Handling the disabled thermometer.

        if ($('.gained-amount').length > 0) {
            var oldhtml = $('.gained-amount').html();
            var newhtml = oldhtml.replace(/NaN/g, " 0");
            $('.gained-amount').html(newhtml);
        }
        // isNaN(jQuery('.gained-amount').html()) ? 0 : jQuery('.gained-amount').html();        
    }

    $(window).load(function() {
        meter_width();
    });

    $(document).ajaxComplete(function(event) {
        meter_width();
    });

    $(window).resize(function() {
        meter_width();
    });

}(jQuery));