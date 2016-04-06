$(document).ready(function () {
    $('#navigation ul li a[href^="#"]').click(function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('#navigation ul li a').each(function () {
            $(this).parent().removeClass('active');
        })
        $(this).parent().addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $(".page").removeClass("open");
        $target.addClass("open");
    });
    $('#welcome .links[href^="#"]').click(function (en) {
        en.preventDefault();
        $(document).off("scroll");
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $navTarget = $target.selector;
        
        console.log($target.selector);
        
        $('#navigation ul li a').parent().removeClass('active');
        $("#navigation ul li a[href='" + $(this).attr("href") + "']").parent().addClass("active")
        
        $(".page").removeClass("open");
        $target.addClass("open");
    });
    $('#navigation ul .bars').click(function () {
        $(this).parent().toggleClass("push");
        $(this).find(".fa-bars").toggleClass("hidden");
        $(this).find(".fa-times").toggleClass("hidden");
    });
});

$(document).ready(function() {
    var showChar = 90;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.desc').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent hidden">' + h + '</span>';
            $(this).html(html);
        }
    });
    $(".nyhet, .news").click(function(e){
        $(this).find(".morecontent").toggleClass("hidden");
        $(this).find(".moreellipses").toggleClass("hidden");
        $(this).find(".fa-plus").toggleClass("hidden");
        $(this).find(".fa-minus").toggleClass("hidden");
        $(this).toggleClass("read");
        if (!$(this).find(".morecontent").hasClass("hidden")) {
          $('html, body').animate({scrollTop:$(this).offset().top - 16}, 700);
        }
    });
});

