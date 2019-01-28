/**
 * File navigation.js.
 *
 */

( function( $ ) {
    var pull   = $('#pull'),
        toggle = $( '#toggle' ),
        menu   = $('.menu-menu-1-container');
 
    pull.on('click', function( e ) {
        e.preventDefault();
        menu.slideToggle();
        toggle.toggleClass( 'on' );
    });

    $( window ).resize( function() {
        var w = $( window ).width();
        if( w > 991 && menu.is( ':hidden' ) ) {
            menu.removeAttr('style');
        }
    });
})( jQuery );


/*Modal search*/

(function modal() {
    var modal    = document.querySelector( '.modal' ),
        btn      = document.querySelector( '.demo-btn' ),
        closeBtn = document.querySelectorAll( '.modal-close' ),
        saveBtn  = document.querySelector( '.modal-save' );
 
    btn.addEventListener( 'click', function( e ) {
        e.preventDefault();

        document.body.classList.add( 'modal-open' );
    } );

    closeBtn.forEach( function( ele ) {
        ele.addEventListener( 'click', function() {
            document.body.classList.remove( 'modal-open' );

            if ( ele.classList.contains( 'modal-save' ) ) {
                var url = btn.href;
                window.location = url;
            }
        } );
    });
})();