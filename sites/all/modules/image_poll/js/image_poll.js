(function ($) {
    Drupal.behaviors.YourBehaviour = {
    attach: function() {  
        $('[id^=image_poll-form]').ajaxComplete(function(event, xhr, settings) {

            $(this).find('input[value^=' + Drupal.settings.image_poll.formid + ']').mousedown();
 //      console.log($('input[value^=' + Drupal.settings.image_poll.formid + ']'));
        });
    }
 
    }
})(jQuery);