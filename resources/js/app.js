require('./bootstrap');
window.$ = window.jQuery = require('jquery');
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



require("./slick.min.js");

// Scroll Funcation
jQuery(window).scroll(function () {
    var bodyScroll = jQuery(window).scrollTop();
    if (bodyScroll > 50) {
        jQuery("#header_area").addClass("stuck");
    } else {
        jQuery("#header_area").removeClass("stuck");
    }
});

// Slick Slider

jQuery(document).ready(function ($) {
    $(".largeSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: ".thumbSlider",
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
    $(".thumbSlider").slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: true,
        centerPadding: '20px',
        asNavFor: ".largeSlider",
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
});
