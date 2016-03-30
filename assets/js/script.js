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
 
    $(".nyhet").click(function(e){

        $(this).find(".morecontent").toggleClass("hidden");
        $(this).find(".fa-plus").toggleClass("hidden");
        $(this).find(".fa-minus").toggleClass("hidden");
    });
});