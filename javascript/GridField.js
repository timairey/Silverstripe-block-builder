(function($){

	$.entwine('ss', function($) {
		$('.ss-gridfield .field .gridfield-dropdown').entwine({

			onchange: function() {
				var gridField = this.getGridField();
				var state = gridField.getState().GridFieldSiteTreeAddNewButton;

				state.blockType = this.val();
				gridField.setState("GridFieldSiteTreeAddNewButton", state);
			}
		});
	});

}(jQuery));