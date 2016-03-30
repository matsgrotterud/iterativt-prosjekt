$(document).ready(function () {
    $('#navigation ul li a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('#navigation ul li a').each(function () {
            $(this).parent().removeClass('active');
        })
        $(this).parent().addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $("div.page").removeClass("open");
        $target.addClass("open");
        $('html, body').animate({
            scrollTop: $("#navigation").offset().top - 52
        }, 0);
    });
});