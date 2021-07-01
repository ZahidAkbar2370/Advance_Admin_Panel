$(document).ready(function () {
    // Navabar Expand
    $(".btn-collapse").click(function () {
        $(".header--inner").slideToggle(500)
    });



    $(window).resize(function () {
        var wind_width = $(window).width();
        if (wind_width > 991) {
            var box_height_box = $(".box_section--card").width();
            $(".box_section--card").css({
                height: box_height_box
            });
        }
    })

    // Form
    $(".post_btn").click(function () {
        $(".post_book--form").slideToggle(300)
    });

    // div fix height
    var maxHeight = 0;

    $(".motivation--card__desc").each(function () {
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });

    $(".motivation--card__desc").height(maxHeight);

});

