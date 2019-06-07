import '../scss/plugin.scss';

// Fire when ready
jQuery(function($){
    

    const inputs = $('form .form-label-group input');

    // Handles form label animations
    inputs.each(function(e){
      const label = $(this).parents('.form-label-group').find('label');
      $(label).toggleClass( 'filled', ($(this).val()!='') );

      if( $(this).attr('type') == 'date' ) $(label).addClass('filled');

    });

    inputs.on('animationstart', function(e){
      const animation = e.originalEvent.animationName;
      const label = $(this).parents('.form-label-group').find('label');
      if( animation == 'onAutoFillStart' ) $(label).addClass('filled');
    });

    inputs.on('blur focus keydown keyup', function(e){
      const label = $(this).parents('.form-label-group').find('label');
      $(label).toggleClass( 'filled', ($(this).val()!='') );
      if( $(this).attr('type') == 'date' ) $(label).addClass('filled');
    });

    if( $('table.table-schedule').length )
    {

      $(window).scroll(function(e){
        let pos = $(window).scrollTop();
        let wh  = $(window).height();
        let off = pos+80;

        $('table.table-schedule').each(function(i,table){
          let thead = $(table).find('thead').get(0);
          let th    = $(thead).outerHeight();
          let tp    = $(table).offset().top;
          let tbh   = $(table).outerHeight();
          let tbr   = -(off-(tbh+tp-th));

          let offset = off > tp ? ( tbr > 0 ? ( off-tp ) : tbh-th ) : 0;

          $(thead).css({ 'transform' : 'translate3D(0,'+offset+'px,0)'});
          
          //  $(thead).css({ top : offset + 'px'});
/*
          if( off > tp ){
            let hoff = tbr > 0 ? ( off-tp ) : tbh-th;
            $(thead).css({ 'transform' : 'translateY('+hoff+'px)'});
          } else {

          }*/
        });
      });
      
    }

});