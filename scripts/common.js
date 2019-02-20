$(document).ready(function() {
	new WOW().init();
    $('body').children().last().remove();
    var o = !0;
    $(".Icons").click(function() {
        o ? ($(".bbb").css("left", "0px"), o = !1) : 0 == o && ($(".bbb").css("left", "-240px"), o = !0)
    }), $(".colors").click(function() {
        var o = $(this).css("backgroundColor");
        $(".settings").css("color", o), $("hr").css("border-color", o), $(".chevrons").css("color", o), $(".round li").css({
            backgroundColor: o,
            borderColor: o
        }), $(".iconsJur").css({
            backgroundColor: o,
            borderColor: o
        }), $(".meet").css("outlineColor", o), $(".fourthCon a").css("backgroundColor", o), $(".icons_earth").css("color", o), $(".SUB").css("backgroundColor", o), $(".seven_con a").css("backgroundColor", o), $(".but_click").css("backgroundColor", o), $(".nav > li > a, .about1, .fourthCon a, .rightMar, .SUB, .seven_con a, .but_click").hover(function() {
            $(".nav > li > a:hover").css("backgroundColor", o), $(".about1:hover i").css("color", o), $(".about1:hover p").css("border-color", o), $(".fourthCon a:hover").css("backgroundColor", "white"), $(".rightMar:hover").css("backgroundColor", o), $(".SUB:hover").css("backgroundColor", "white"), $(".seven_con a:hover").css("backgroundColor", "white"), $(".but_click:hover").css("backgroundColor", "#333")
        }, function() {
            $(".nav > li > a").css("backgroundColor", ""), $(".about1 i").css("color", ""), $(".about1 p").css("border-color", ""), $(".fourthCon a").css("backgroundColor", o), $(".rightMar").css("backgroundColor", ""), $(".SUB").css("backgroundColor", o), $(".seven_con a").css("backgroundColor", o), $(".but_click").css("backgroundColor", o)
        })
    }), $(window).scroll(function() {
        $(document).scrollTop() > 10 ? ($(".color").css("backgroundColor", "#333"), $(".topscroll").css("opacity", "1")) : ($(".color").css("backgroundColor", ""), $(".topscroll").css("opacity", "0"))
    }), $(".topscroll").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
    }), $("#about").click(function() {
        $("html, body").animate({
            scrollTop: $(".section1").offset().top
        }, 500)
    }), $("#team").click(function() {
        $("html, body").animate({
            scrollTop: $(".section2").offset().top
        }, 500)
    }), $("#juridictions").click(function() {
        $("html, body").animate({
            scrollTop: $(".section4").offset().top
        }, 500)
    }), $("#location").click(function() {
        $("html, body").animate({
            scrollTop: $(".section5").offset().top
        }, 500)
    }), $("#contact").click(function() {
        $("html, body").animate({
            scrollTop: $(".section7").offset().top
        }, 500)
    }), $("#contact_now").click(function() {
        $("html, body").animate({
            scrollTop: $(".section7").offset().top
        }, 500)
    })
});