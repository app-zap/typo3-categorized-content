(function ($) {
	$.fn.categoryNavigation = function () {
		return this.each(function () {
			var categoryNavigation = $(this);
            var categoryLinks = categoryNavigation.find('[data-target-category]');
            var targets = categoryNavigation.parent().find('[data-categories]');

            targets.hide();
            categoryLinks.on('click', function() {
                var clickedLink = $(this);
                categoryLinks.removeClass('active');
                clickedLink.addClass('active');
				var clickedCategory = ',' + clickedLink.data('targetCategory') + ',';
				targets.hide().each(function() {
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

