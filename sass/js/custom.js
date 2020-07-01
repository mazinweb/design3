/*global $, alert, console*/

$(function () {
    'use strict';

    //trigger nice scroll plugin-----------------------------------
    $("body").niceScroll({
       cursorcolor:'#f7600e',
        cursorwidth:5,
        cursorborder:'1px solid #f7600e'

    });

    //change header height
    $('.header').height($(window).height());


    //go to contact form when press contact me --------------------------

    $('.hire').click(function () {
        $('html, body').animate({
            scrollTop: $('.contact').offset().top
        }, 1500);
    });


    //go to my work when press portfolio --------------------------

    $('.port').click(function () {
        $('html, body').animate({
            scrollTop: $('.my-work').offset().top
        }, 1500);
    });

    //scroll to features--------------------------------------------

    $('.header .arrow svg').click(function () {
        $('html, body').animate({
            scrollTop: $('.features').offset().top
        }, 1500);
    });

    // show hidden item from my work---------------------------------------

    $('.show-more').click(function () {
        $('.my-work .hidden').fadeIn(1500);
    });


    // check testimonials----------------------------------------------

    var leftarrow = $('.testimo .fa-chevron-left'),
        rightarrow = $('.testimo .fa-chevron-right');

    function checkclient() {

        $('.client:first').hasClass('active') ? leftarrow.fadeOut() : leftarrow.fadeIn();
        $('.client:last').hasClass('active') ? rightarrow.fadeOut() : rightarrow.fadeIn();

    }

    checkclient();

    $('.testimo svg').click(function () {
        if($(this).hasClass('fa-chevron-right')){
            $('.testimo .active').fadeOut(100 , function () {
               $(this).removeClass('active').next('.client').addClass('active').fadeIn();
                checkclient();
            });
        } else {
            $('.testimo .active').fadeOut(100 , function () {
                $(this).removeClass('active').prev('.client').addClass('active').fadeIn();
                checkclient();
            });
        }
    });





});