(function($) {

    $.fn.ulhideshow = function() {
    
        function ukryj(indeks, element)
        {
            $(element).hide();
            $(element).children().each(ukryj);
        }

        this.children().children().each(ukryj);

        this.find('li').click(function(){
            if ($(this).children().eq(0).is(':visible')) {
                $(this).children().hide();
            } else {
                $(this).children().show();
                $(this).children().children().show();
            }
            return false;
        });

        return this;
    };
    
})(jQuery);