document.documentElement.className += " js";

window.addEvent('domready', function() {

    // Center pagination
    if ($('pagination'))  {
        var paginationWidth = $('pagination').getStyle('width').toInt();
        var liWidth = 0;
        $each($$('#pagination li'), function(item){
            liWidth += item.getStyle('width').toInt() + 10;
        });
        $('pagination').setStyle('padding-left', (paginationWidth - 10 - liWidth)/2);
    }

});