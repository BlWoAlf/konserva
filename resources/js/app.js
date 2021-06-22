require('./bootstrap');

import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';
import SwiperCore, { Autoplay } from 'swiper/core';
SwiperCore.use([Autoplay]);

$(function(){
    var openPhotoSwipe = function(index){
        var pswpElement = document.querySelectorAll('.pswp')[0];

        var items = [];

        $('.gallary__image').each(function(i, elem){
            var src = elem.children[0].src.split('/');
            src.splice(src.indexOf('image_cache'),1);
            src.pop();
            var img = src.join('/');
            items[i] = {
                src: img,
                w: 683,
                h: 1024,
            }
        });

        var options = {
            // history & focus options are disabled on CodePen        
             history: false,
             focus: false,
     
             showAnimationDuration: 0,
             hideAnimationDuration: 0
             
        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
        gallery.goTo(index);
    }

    function initPhotoSwipe(photo) {
        var index = photo.parent().index();
        openPhotoSwipe(index);
    }

    $('.gallary__item').click(function(){
        initPhotoSwipe($(this));
    });

    
    const menu = new MmenuLight(
        document.querySelector( ".main-menu" ),
        "(max-width: 991px)"
    );

    const navigator = menu.navigation();
    const drawer = menu.offcanvas();

    $('.header__burger-button').click(function(){        
        drawer.open();
    });

    const swiper = new Swiper('.slider', {
        loop: true,
        speed: 900,
        allowTouchMove: false,
        autoplay: {
            delay: 9000,
        },
    });
});
