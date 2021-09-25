//AOS init
AOS.init({
    once: true,
});
window.addEventListener('load', AOS.refresh); //fix for safari
//end AOS

$(document).ready(function () {
    //add smooth scroll
    if ($(window).width() > 961) {
        $("body").niceScroll({
            scrollspeed: 155,
            mousescrollstep: 70,
            cursorcolor:"#0EB5BF",
            cursorwidth:"8px"
        });
    }

    //phone input mask
    $('.phone-number').inputmask({"mask": "+38 (099) 999-99-99"})

    //mobile paralaxie stop
    if ($(window).width() > 1200) {
        $('.parallaxie').parallaxie({
            offset: -250,
            speed: 0.5,
        });
    }
    //---
    //ASIDE NAVIGATION
    //sidenav open
    $('.header__menu-btn').on('click', function () {
        $('.header__side-menu').addClass('active')
        $('.overlay').removeClass('hidden')
        $('body').addClass('lock')
    })
    //sidenav close by btn
    $('.header__side-menu').on('click', function (e) {
        if ($(e.target).is('.btn-close')) {
            e.preventDefault();
            $(this).removeClass('active')
            $('body').removeClass('lock')
            $('.overlay').addClass('hidden')
        }
    });
    //sidenav close by click outside
    $(document).mouseup(function (e) {
        let popup = $(".header__side-menu");
        if (!popup.is(e.target) && popup.has(e.target).length === 0) {
            e.stopPropagation()
            $(popup).removeClass('active')
            $('body').removeClass('lock')
            $('.overlay').addClass('hidden')
        }
    });

    $('.header__sub-menu--btn').on('click', function () {
        $('.header__sub-menu--btn span').toggleClass('btn-plus btn-minus')
        $('.header__sub-menu').toggleClass('init')
    })
    //---------------------
    //modals
    //   open
    $('.prejskurant__item button').click(function (e) {
        e.preventDefault()
        $('#modal' + $(this).attr('class')).removeClass('hidden')
        $('body').addClass('locked')
    })
    //close
    $('.modal-container').on('click', function (e) {
        e.stopPropagation()
        if ($(e.target).is('.btn-close')) {
            $('.modal-container').addClass('hidden')
            $('body').removeClass('locked')
        }
    });
    //close click outside
    $(document).mouseup(function (e) {
        let container = $(".modal-container");
        if (container.is(e.target)) {
            $('.modal-container').addClass('hidden')
            $('body').removeClass('locked')
        }
    });
    //------------------------
    //btn to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    //open popup
    $('.open-modal').on('click', function (e) {
        e.preventDefault();
        $('.modal').removeClass('hidden');
        $('body').addClass('lock');
    });
    //close popup
    $('.modal').on('click', function (e) {
        if ($(e.target).is('.modal-close') || $(e.target).is('.modal')) {
            e.preventDefault();
            $(this).addClass('hidden');
            $('body').removeClass('lock');
        }
    });
    // $('.open-modal').magnificPopup({
    //     type: 'inline',
    //     // Delay in milliseconds before popup is removed
    //     mainClass: 'mfp-fade', // this class is for CSS animation below
    //     removalDelay: 500,
    //     zoom: {
    //         enabled: true, // By default it's false, so don't forget to enable it
    //         duration: 500, // duration of the effect, in milliseconds
    //         easing: 'ease-in-out', // CSS transition easing function
    //     }
    //
    // });


})
