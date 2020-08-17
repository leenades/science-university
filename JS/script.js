var element = $('#searchBox');
var navbarButton = $('.container-nav-links');
var counterUp = $('.numberOne');

$('.demo').attr('data-toggle', '');
$('.demoOne').attr('data-toggle', '');
$('.demoTwo').attr('data-toggle', '');
$('.demoThree').attr('data-toggle', '');
$('.demoFour').attr('data-toggle', '');

$('#searchIcon').click(function(event){
    event.preventDefault();
    element.toggleClass('search-box-field-new');
    $('div.search-box-transition').toggleClass('search-box-transition-after');

});
$(window).resize(function(){
    navbarButton.removeClass('mobileTransition');
    navbarButton.removeClass('transitionNavBar');
    $('#demo').removeClass('collapse');
    $('#demoOne').removeClass('collapse');
    $('#demoTwo').removeClass('collapse');
    $('#demoThree').removeClass('collapse');
    $('#demoFour').removeClass('collapse');
});

$('#btn-menu').click(function(){
    if(!navbarButton.hasClass('mobileTransition')){
        navbarButton.addClass('mobileTransition');
    }
    navbarButton.toggleClass('transitionNavBar');
});

$('#searchBox').on('click', function() {
    $('#searchBox').addClass('clicked');
    if($('#searchBox').hasClass('clicked')){
        $('#searchBox').prop('placeholder', '');
    }
});

$('body').on('click', function(e){
    var target = $(e.target);
    if(!target.is('#searchBox') && $('#searchBox').hasClass('clicked')){
        $('#searchBox').removeClass('clicked');
        $('#searchBox').prop('placeholder', 'Search...');
    }
});