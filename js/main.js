"use strict"; // Start of use strict

function owlCarouselActivation() {

// slider-1 (main-slider)
if($('.slider-1').length) {
    $('.slider-1').owlCarousel({
        autoplay: false,
        autoplayTimeout: 4000,
        loop: true,
        autoplayHoverPause: true,
        pagination: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1000,
        // touchDrag: false, //only if you don't wanna drag it
        // mouseDrag: false, //only if you don't wanna drag it
        nav: true,
        navElement: "span",
        navText: ["<span class='f1 c-c'>prev</span>","<span class='f1 c-c'>next</span>"],
        items: 1
    });
};

}


function backToTop() {

// back2top button will take to top by clicking on by this function
if($('.back2Top').length) {
    $('.back2Top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500)
    });
};

}

function wowActivation() {
// Activation of WOW
    if ($('.wow').length) {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    };
}


function backToTopVisible() {

// back to top button will be visible
     if ($('.back2Top').length) {
        if ($(window).scrollTop() > 300) {
            $(".back2Top").addClass("totop");
        } else {
            $(".back2Top").removeClass("totop");
        }
    };
}


function stickyHeader () {

// header will be sticky    
    if ($('.stricky').length) {
        var strickyScrollPos = 100;
        if($(window).scrollTop() > strickyScrollPos) {
            $('.stricky').removeClass('slideIn animated');
            $('.stricky').addClass('stricky-fixed fadeInDown animated');
            $('.scroll-to-top').fadeIn(500);
        }
        else if($(this).scrollTop() <= strickyScrollPos) {
            $('.stricky').removeClass('stricky-fixed fadeInDown animated');
            $('.stricky').addClass('slideIn animated');
            $('.scroll-to-top').fadeOut(500);
        }
    };
}


function preLoaderActivation() {

// preloader will be activation    
    if($('.pre-wrapper').length) {
        $(".pre-wrapper").fadeOut("slow");
        $(".main-wrapper").fadeIn("slow")
};
}


function mainMenu() {

// main menu activation
if($('#nav-main, #nav-right, #flatmenu').length) {    
        $("#nav-main a,#nav-right a,#doc-menu a,#flatmenu a,a[href='#top'],a[rel='m_PageScroll2id'],a.scroll-btn").mPageScroll2id({
            highlightSelector:"#nav-main a, #nav-right a, #doc-menu a, #flatmenu a"
    });
};
}

function menuTrigger() {
    document.getElementById("nav-main").classList.toggle("show-menu")
}

function menuTriggerRight() {
    document.getElementById("nav-right").classList.toggle("show-menu")
}

window.onclick = function(f) {
    if (!f.target.matches(".menu-btn")) {
        var e = document.getElementsByClassName("main-menu");
        var g;
        for (g = 0; g < e.length; g++) {
            var h = e[g];
            if (h.classList.contains("show-menu")) {
                h.classList.remove("show-menu")
            }
        }
    }
}


// instance of fuction while Document ready event   
jQuery(document).on('ready', function() {
    (function($) {
        owlCarouselActivation();
        backToTop();
        
        wowActivation();
    })(jQuery);
});


// instance of fuction while Window Scroll event
jQuery(window).on('scroll', function () {   
    (function ($) {
        backToTopVisible();
        stickyHeader();
    })(jQuery);
});


// instance of fuction while Window Load event
jQuery(window).on('load', function() {
    (function($) {
        preLoaderActivation();
        mainMenu();
    })(jQuery);
});



/*========================================================================== 
======================== Custom script for BlackPort end ===================
============================================================================*/