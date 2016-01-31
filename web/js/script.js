$(function(){

    $('.portfolio_a').hover(function(){
        if ($(".child-portfolio").css('display')=='none'){
            $(".childs").hide();
            $(".child-portfolio").fadeIn('slow');
        }
    },function(){
    });

    $('.gp_a').hover(function(){
        if ($(".child-gp").css('display')=='none'){
            $(".childs").hide();
            $(".child-gp").fadeIn('slow');
        }
    },function(){
    });



});