/**
 * init
 */
var selectSkin = (function () {
    var init = function () {
        var $selects = $('.custom-select');

        // find the checked one
        var selectItem = function(i, o){
            var $item = $(o);
            var $select = $item.parents('.custom-select').first();
            var $items = $select.find('.cs-item');

            if($item.find('input').is(':checked')){
                // uncheck all
                $items.removeClass('cs-selected-item');
                var status_class = $item.attr("class").match(/status-[\w-]*\b/);
                if(status_class){
                    var container_status = $select.attr("class").match(/status-[\w-]*\b/);
                    if(container_status){
                        $select.removeClass(container_status[0]);
                    }
                    $select.addClass(status_class[0]);
                }

                $item.addClass('cs-selected-item');
                return false;
            }
        };

        $selects.each(function(){
            var $select = $(this);
            var $items = $select.find('.cs-item');
            var $radios = $items.find('input');
            var $labels = $items.find('.cs-label');

            // loop all
            $items.each(selectItem);

            // bind radios
            $radios.on('change', function(){
                $items.each(selectItem);
            });

            // bind labels
            $labels.on('click', function(){
                var is_open = $select.hasClass('is-open');


                if(!($(this).hasClass('JS_toggler') && is_open)){

                    // close all
                    $selects.removeClass('is-open');

                    // open/close my select
                    $select.toggleClass('is-open', !is_open);
                }
            });
        });
    };

    return {
        init: init
    }

})();

export default selectSkin;
