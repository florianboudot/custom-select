// import files
var custom_select = require("../libs/custom-select");

// on document ready
$(document).on('ready', function () {
    if (pm.debug) {
        console.log('jquery:document ready');
    }

    // init functions
    custom_select.init();
});
