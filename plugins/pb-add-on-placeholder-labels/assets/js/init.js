/*
 * Function that adds placeholders to Login Forms and Widget fields
 *
 * @since v.2.1
 *
 */
jQuery( document ).ready( function() {
    var wppb_login_form = [
        '.login-username',
        '.login-password'
    ];

    wppb_login_form.forEach( function ( field ) {
        jQuery( field + ' :input' ).each( function( index, elem ) {
            var element_id = jQuery( elem ).attr( 'id' );
            var label = null;

            if( jQuery( elem ).is( 'input' ) ) {
                if( element_id && ( label = jQuery( elem ).parents( '#wppb-login-wrap' ).find( 'label[for=' + element_id + ']' ) ).length === 1 ) {
                    jQuery( elem ).attr( 'placeholder', jQuery( label ).text() );
                }
            }
        });
    });
});