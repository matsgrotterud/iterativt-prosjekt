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

$(document).ready(function() {
    var showChar = 100;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.desc').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".fa-plus").click(function(e){
        $target = $(e.target);
        if($(".morelink").hasClass("less")) {
            $(".morelink").removeClass("less");
            $(".morelink").html(moretext);
        } else {
            $(".morelink").addClass("less");
            $(".morelink").html(lesstext);
        }
        $(".morelink").parent().prev().toggle();
        $(".morelink").prev().toggle();
        return false;
    });
});