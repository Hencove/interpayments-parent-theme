(function (document, window, $) {
	//
	// 		jQuery is ready as $
	//

	let WindowWidth = $(window).innerWidth();
	if (WindowWidth <= 1200) {
		$(".wp-block-navigation-item.has-child > a").on("click", (event) => {
			$(event.delegateTarget).next("button").trigger("click");
		});
	}

	let Nav_SubMenu_Labels = $(
		'.wp-block-navigation__container .has-child > .wp-block-navigation-item__content[href="#"]'
	);
	$(Nav_SubMenu_Labels).attr("tabindex", "-1");

	document.addEventListener("DOMContentLoaded", function () {
		var accordions = document.querySelectorAll(".wp-block-ub-content-toggle");

		accordions.forEach(function (accordion) {
			var panel = accordion.querySelector(
				".wp-block-ub-content-toggle-accordion-content-wrap"
			);

			// Initial setup
			accordion.classList.toggle(
				"is-open",
				panel.getAttribute("aria-expanded") === "true"
			);

			// Watch for changes in aria-expanded attribute
			var observer = new MutationObserver(function (mutationsList, observer) {
				for (var mutation of mutationsList) {
					if (
						mutation.type === "attributes" &&
						mutation.attributeName === "aria-expanded"
					) {
						accordion.classList.toggle(
							"is-open",
							panel.getAttribute("aria-expanded") === "true"
						);
					}
				}
			});

			observer.observe(panel, { attributes: true });
		});
	});

	if ($("#wpforms-form-270").length > 0) {
		let $likeToField = $("#wpforms-form-270").find("#wpforms-270-field_1");

		if ($likeToField[0].value == "Connect with an Expert") {
			$(".is-the-expert-form").show();
			$(".is-the-partner-form").hide();
		} else {
			$(".is-the-expert-form").hide();
			$(".is-the-partner-form").show();
		}

		$likeToField.on("change", function (e) {
			if (e.target.value == "Connect with an Expert") {
				$(".is-the-expert-form").show();
				$(".is-the-partner-form").hide();
			} else {
				$(".is-the-expert-form").hide();
				$(".is-the-partner-form").show();
			}
		});
	}

	//
	//
	//
})(document, window, jQuery);
