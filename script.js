var element = $('#searchBox');
var navbarButton = $('.container-nav-links');


$('#searchIcon').click(function(event){
    event.preventDefault();
    element.toggleClass('search-box-field-new');
});
$(window).resize(function(){
    navbarButton.removeClass('mobileTransition');
});

$('#btn-menu').click(function(){
    if(!navbarButton.hasClass('mobileTransition')){
        navbarButton.addClass('mobileTransition');
    }
    navbarButton.toggleClass('transitionNavBar');
});