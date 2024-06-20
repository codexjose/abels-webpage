$(document).ready(function() {
    $('a.nav-link').click(function(event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
    $('#portfolioCarousel').carousel({
        interval: 3000
    });
});
