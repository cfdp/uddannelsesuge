(function ($) {
    Drupal.behaviors.YourBehaviour = {
    attach: function() {
        // Trigger radiobtn
        $('.poll.image_poll .choice').bind('touchstart mousedown', function(e){
            e.preventDefault();
            $(this).find('label').prop("checked", true).trigger("click");
        });


        // Display faktaboks if poll has been voted
        // var pollBar = $('.node-image-poll .poll-bar');

        // if( pollBar.hasClass('voted') ) {
        //     pollBar.closest('.inner-wrapper').find('.field-name-field-extra-info').show();
        //     pollBar.closest('.inner-wrapper').find('.extra-info-wrapper').show();
        // }

        // Reveal extra info field after casting the vote for first time users
        $('[id^=image_poll-form]').click(function(event){

            var mp_node = $(this).parents('.inner-wrapper');
            mp_node.children('.extra-info-wrapper').slideDown();
        });

        // When changing votes, first the vote is canceled and then
        // submit the other choice programatically
        $('[id^=image_poll-form]').ajaxComplete(function(event, xhr, settings) {
            var formid = Drupal.settings.image_poll.formid;

            $(this).find('input[value^=' + formid + ']').mousedown();

        // Reveal extra info field after changing the vote
            var mp_node = $('input[value^=' + formid + ']').parents('.inner-wrapper');
            mp_node.children('.extra-info-wrapper').slideDown();
        });
    }

    }
})(jQuery);