$(function() {
    $(window).scroll(function(){
        if( $(window).scrollTop() > 170){
            $( ".bar-html" ).animate({
                paddingRight: "80%"
            }, 1500 );
            $( ".bar-css" ).animate({
                paddingRight: "75%"
            }, 1500 );
            $( ".bar-php" ).animate({
                paddingRight: "70%"
            }, 1500 );
            $( ".bar-js" ).animate({
                paddingRight: "50%"
            }, 1500 );
            $( ".bar-sql" ).animate({
                paddingRight: "70%"
            }, 1500 );
        }
    });
});



$(function() {
    $(window).scroll(function(){
        if (window.innerWidth >= 992) {
            if( $(window).scrollTop() > 530){
                $( ".bloc-ps" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-ai" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-id" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 800){
                $( ".bloc-wp" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-dw" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-ae" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
        } else if (window.innerWidth < 992 && window.innerWidth >=  768) {
            if( $(window).scrollTop() > 530){
                $( ".bloc-ps" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-ai" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 850){
                $( ".bloc-id" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-wp" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 1150){
                $( ".bloc-dw" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
                $( ".bloc-ae" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }  
        } else if (window.innerWidth < 768) {
            if( $(window).scrollTop() > 530){
                $( ".bloc-ps" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 850){
                $( ".bloc-ai" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 1150){
                $( ".bloc-id" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 1400){
                $( ".bloc-wp" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 1650){
                $( ".bloc-dw" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
            if( $(window).scrollTop() > 1800){
                $( ".bloc-ae" ).animate({
                    opacity: "1",
                    left: "0px"
                }, 700 );
            }
        }
    });
});




$(function() {
    $( ".champs" ).keyup(function() { 
        if($(this).val() !== '') {
            $(this).prev().animate({
                opacity : "1",
                top : "-30px"
            }, 500); 
        } else if ($(this).val() === '') {
            $(this).prev().animate({
                opacity : "0",
                top : "-15px"
            }, 250); 
        }
    });
});

$(function() {
    
    $( ".social-cv" ).mouseover(function() {
        $( ".social-cv" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 360 + "deg)"
        });
    });
    $( ".social-cv" ).mouseout(function() {
        $( ".social-cv" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 0 + "deg)"
        });
    });
    
    $( ".social-github" ).mouseover(function() {
        $( ".social-github" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 360 + "deg)"
        });
    });
    $( ".social-github" ).mouseout(function() {
        $( ".social-github" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 0 + "deg)"
        });
    });
    
    $( ".social-linkdin" ).mouseover(function() {
        $( ".social-linkdin" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 360 + "deg)"
        });
    });
    $( ".social-linkdin" ).mouseout(function() {
        $( ".social-linkdin" ).css( { 
            transition: "transform 0.5s",
            transform:  "rotate(" + 0 + "deg)"
        });
    });
});