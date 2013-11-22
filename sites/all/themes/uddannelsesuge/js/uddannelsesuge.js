(function ($) {

  $(document).ready(function() {

    $('#top-menu li a').click(function() {
      // Collapse top menu on mobile when anchortags are clicked
      $('.top-bar').removeClass('expanded');
    });

 });

}(jQuery));