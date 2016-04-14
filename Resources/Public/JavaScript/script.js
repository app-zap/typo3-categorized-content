(function ($) {
	$.fn.categoryNavigation = function () {
		return this.each(function () {
			var categoryNavigation = $(this);
            categoryNavigation.parent().find('[data-categories]').hide();
			categoryNavigation.find('[data-target-category]').on('click', function() {
				var clickedCategory = ',' + $(this).data('targetCategory') + ',';
				categoryNavigation.parent().find('[data-categories]').hide().each(function() {
					var targetElement = $(this);
					var categories = ',' + targetElement.data('categories');
					if (categories.indexOf(clickedCategory) > -1) {
						targetElement.show();
					}
				});
			}).first().click();
		})
	};

	$(function() {
		$('[data-category-navigation]').categoryNavigation();
	});

}(jQuery));

