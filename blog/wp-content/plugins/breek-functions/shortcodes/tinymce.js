(function() {
    editor = tinymce.PluginManager.add('epcl_shortcodes', function( editor, url ) {
        editor.addButton( 'epcl_shortcodes', {
            // text: 'EP Shortcodes',
            icon: 'epcl-shortcode-button',
            type: 'button',
            title: 'EstudioPatagon Shortcodes',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'EstudioPatagon Shortcodes',
                    width: ( $(window).width() < 720 ) ? $(window).width() : 850,
                    height: ( $(window).height() < 720 ) ? $(window).height() : 720,
                    url: url+'/lightbox.php',
                    onsubmit: function( e ) {

                    },
                    custom_param: 'asd=1'
                });
            }
        });
    });
})();

