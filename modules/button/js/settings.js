(function($){

    FLBuilder._registerModuleHelper('button', {

        rules: {
            text: {
                required: true
            },
            link: {
                required: true
            },
            font_size: {
                required: false,
                number: true
            },
            padding: {
                required: false,
                number: true
            },
            border_radius: {
                required: false,
                number: true
            }
        },
        init: function() {
	        var link = $('#fl-field-link input'),
		    	pageLinkSelect = $('#fl-field-page_link select');

	        link.on('change', this._linkChanged);
	    	pageLinkSelect.on('change', this._pageLinkChanged);
	    },
	    _linkChanged: function() {
		   	var link = $('#fl-field-link input'),
		    	pageLinkSelect = $('#fl-field-page_link select');

		    pageLinkSelect[0].selectedIndex = 0;
	    },
	    _pageLinkChanged: function() {
		    var link = $('#fl-field-link input'),
		    	pageLinkSelect = $('#fl-field-page_link select');


			link.attr('value', pageLinkSelect.attr('value'));
	    }
    });

})(jQuery);
