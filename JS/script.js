var element = $('#searchBox');
var navbarButton = $('.container-nav-links');
var counterUp = $('.numberOne');


$('#searchIcon').click(function(event){
    event.preventDefault();
    element.toggleClass('search-box-field-new');
});
$(window).resize(function(){
    navbarButton.removeClass('mobileTransition');
    navbarButton.removeClass('transitionNavBar');
    
});

$('#btn-menu').click(function(){
    if(!navbarButton.hasClass('mobileTransition')){
        navbarButton.addClass('mobileTransition');
    }
    navbarButton.toggleClass('transitionNavBar');

    if (navbarButton.hasClass('transitionNavBar')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = 'visible';
    }
});