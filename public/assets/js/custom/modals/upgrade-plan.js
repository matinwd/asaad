"use strict";

// Class definition
var KTModalUpgradePlan = function () {
    // Private variables
    var modal;

    var handleTabs = function() {
        KTUtil.on(modal, '[data-bs-toggle="tab"]', 'click', function(e) {
            this.querySelector('[type="radio"]').checked = true;
        });
    }

    // Public methods
    return {
        init: function () {
            // Elements
            modal = document.querySelector('#kt_modal_upgrade_plan');

            if (!modal) {
				return;
			}

            // Handlers
            handleTabs();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTModalUpgradePlan.init();
});
