
$(window).scroll(function(){
    var wh = $(window).scrollTop();
    // >= $('.news-btn').offset().top && wh < $('.ticker-header-title').offset().top
    if (wh <= $('.news-content').offset().top){
            var countersUp = document.querySelectorAll('.counterInc');
            var countersDown = document.querySelectorAll('.counterDecr');
            
            countersUp.forEach(counter => {
                counter.innerText = 0;
                
                var updateCounter = () => {
                    var target = +counter.getAttribute('data-target');
                    
                    var c = +counter.innerText;
                    
                    var inc = target / 1000;
                    
                    if(c < target){
                        counter.innerText = Math.ceil(c + inc);
                        setTimeout(updateCounter, 1);
                    } else {
                        counter.innerText = target;
                    }
                }
                updateCounter();
            });
            
            countersDown.forEach(counter =>{
                counter.innerText = 100;
                
                var updateCounter = () =>{
                    var target = +counter.getAttribute('data-target'); // 1
                    
                    var c = +counter.innerText; // 100
                    if(c > target){
                        counter.innerText = c - 1;
                        setTimeout(updateCounter, 2);
                    } else {
                        counter.innerText = target;
                    };
                }
                updateCounter();
            });
        }
});