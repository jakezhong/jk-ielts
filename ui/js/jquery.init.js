/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){
    var header = {
        dropdown: function() {
            var $item = $('.menu-item-has-children');
            $('.menu-item-has-children').hover(function() {
                $(this).find('ul').stop().slideDown(300);
            }, function() {
                $(this).find('ul').stop().slideUp(300);
            });
        }
    }
    header.dropdown();
});
