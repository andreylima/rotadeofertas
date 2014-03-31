jQuery(function ($) {
    var $container = $('#container');
    $container.isotope({})
    $('.filter').change(function () {
     var selected = [];
    $('.filter option').filter(':selected').each(function () {
            if (this.value != "*") {
                selected.push(this.value);
            }
        });
        if (selected.length == 0) {
            selected.push("*");
        }
        selected = $(selected.join(''));
        $container.isotope({
            filter: selected
        });
    });




});