import '../scss/plugin.scss';

// Fire when ready
jQuery(function($){

    // Handles form label animations
    $('form .form-label-group input').each(function(e){

      const label = $(this).parents('.form-label-group').find('label');
      console.log($(this).val());
      if( $(this).val() == '' ) {
        $(label).removeClass('filled');
      } else {
        $(label).addClass('filled');
      }

    });

    /*$('form .form-label-group label').on('click', function(e){
      $(this).siblings('input').trigger('focus');
    });*/

    $('form .form-label-group input').on('animationstart', function(e){
      const animation = e.originalEvent.animationName;
      const label = $(this).parents('.form-label-group').find('label');
      if( animation == 'onAutoFillStart' ) $(label).addClass('filled');
    });

    $('form .form-label-group input').on('blur focus keydown keyup', function(e){
      const label = $(this).parents('.form-label-group').find('label');
      if( $(this).val() == '' ) {
        $(label).removeClass('filled');
      } else {
        $(label).addClass('filled');
      }
    });
});