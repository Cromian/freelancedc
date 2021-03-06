/*global awpcp*/
/*global __awpcp_js_data*/
/*global __awpcp_js_l10n*/
/*global ajaxurl*/

/*!
 * jQuery Tiny Pub/Sub - v0.3 - 11/4/2010
 * http://benalman.com/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($){
    var o = $({});

    $.subscribe = function() {
        o.bind.apply( o, arguments );
    };

    $.unsubscribe = function() {
        o.unbind.apply( o, arguments );
    };

    $.publish = function() {
        o.trigger.apply( o, arguments );
    };
})(jQuery);



(function($) {

    /* AWPCP Main Object */

    var AWPCP = function() {
        if (typeof __awpcp_js_data === 'object') {
            this.options = __awpcp_js_data;
        } else {
            this.options = {};
        }

        if (typeof __awpcp_js_l10n === 'object') {
            this.localization = __awpcp_js_l10n;
        } else {
            this.localization = {};
        }

        if (this.get('ajaxurl') === null) {
            if (typeof AWPCP !== 'undefined' && AWPCP.ajaxurl) {
                this.set('ajaxurl', AWPCP.ajaxurl);
            } else if ( typeof ajaxurl !== 'undefined' ) {
                this.set('ajaxurl', ajaxurl);
            } else {
                this.set('ajaxurl', '/wp-admin/admin-ajax.php');
            }
        }
    };

    $.extend(AWPCP.prototype, {
        set: function(name, value) {
            this.options[name] = value;
            return this;
        },

        get: function(name, fallback) {
            var self = this;

            // Used to allow submit listing sections to register options when a new
            // section's template is loaded.
            if ( typeof awpcp !== 'undefined' && awpcp.options && awpcp.options.length ) {
                $.each( awpcp.options, function( index, data ) {
                    self.set( data[0], data[1] );
                } );

                delete awpcp.options;
            }

            return this.options[name] ? this.options[name] : (fallback ? fallback : null);
        },

        l10n: function(context, message) {
            var self = this;

            // Used to allow submit listing sections to register localization strings
            // when a new section's template is loaded.
            if ( typeof awpcp !== 'undefined' && awpcp.localization && awpcp.localization.length ) {
                $.each( awpcp.localization, function( index, data ) {
                    self.localization[ data[0] ] = data[1];
                } );

                delete awpcp.localization;
            }

            if (this.localization.hasOwnProperty(context)) {
                if (!message) {
                    return this.localization[context];
                } else if (message && this.localization[context].hasOwnProperty(message)) {
                    return this.localization[context][message];
                }
            }
            return '';
        },

        /**
         * Common validation setup:
         *
         * - make reCAPTCHA fields required
         * - default jQuery Validate configuration
         * @return {[type]} [description]
         */
        validate: function(defaults) {
            if ( typeof $.validator === 'undefined' ) {
                return;
            }

            $.validator.setDefaults( defaults );
        }
    });

    // refers to the AWPCP "class" in the current function, not the one in awpcp.js
    $.AWPCP = new AWPCP();


    /* Widgets & Plugins */

    $.AWPCP.PaginationForm = function(form) {
        this.form = $(form);
        this.form.find('select').change(function() {
            this.form.submit();
        });
    };

    $.AWPCP.MainMenu = function(container) {
        var self = this;

        self.container = $(container);
        self.toggle = self.container.find('.awpcp-menu-toggle');

        self.toggle.click(function() {
            self.container.toggleClass('toggle-on');
        });
    };

    /* Common Operations */

    $(function() {
        $('.awpcp-pagination-form').each(function() {
            $.noop(new $.AWPCP.PaginationForm(this));
        });

        $('.awpcp-navigation').each(function() {
            $.noop(new $.AWPCP.MainMenu($(this)));
        });
    });

})(jQuery);
