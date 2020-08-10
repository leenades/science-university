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

// $(window).scroll(function(){
//     var wh = $(window).scrollTop();
//     if (wh >= $('.section-ticker').offset().top){
//         var countersUp = document.querySelectorAll('.counterInc');
//         var countersDown = document.querySelectorAll('.counterDecr');

//         countersUp.forEach(counter => {
//             counter.innerText = 0;

//             var updateCounter = () => {
//                 var target = +counter.getAttribute('data-target');

//                 var c = +counter.innerText;

//                 var inc = target / 1000;

//                 if(c < target){
//                     counter.innerText = Math.ceil(c + inc);
//                     setTimeout(updateCounter, 1);
//                 } else {
//                     counter.innerText = target;
//                 }
//             }
//             updateCounter();
//         });

//         countersDown.forEach(counter =>{
//             counter.innerText = 100;
            
//             var updateCounter = () =>{
//                 var target = +counter.getAttribute('data-target'); // 1

//                 var c = +counter.innerText; // 100
//                 if(c > target){
//                     counter.innerText = c - 1;
//                     setTimeout(updateCounter, 2);
//                 } else {
//                     counter.innerText = target;
//                 };
//             }
//             updateCounter();
//         });
//     }
// });