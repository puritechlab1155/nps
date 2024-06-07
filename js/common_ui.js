$(document).ready(function(){

    $(window).on('load resize scroll',function() {
        if($(this).scrollTop() == 0){
            $('#header').removeClass('current');
        } else {
            $('#header').addClass('current');
        }            
    });

	//nav mobile
	function showSidebar() {
        sidebar.css('margin-right', '0').addClass('active');
        overlay.show(0, function() {
            overlay.fadeTo('300', 0.5);
        });
    }
    function hideSidebar() {
        sidebar.css('margin-right', sidebar.width() * -1 + '%').removeClass('active');
        overlay.fadeTo('300', 0, function() {
            overlay.hide(0);
        });
    }
    var sidebar = $('.aside_nav');
    var button = $('.btn_menu');
    var overlay = $('.page_overlay');

    overlay.parent().css('min-height', 'inherit');
    sidebar.css('margin-right', sidebar.width() * -1 + '%');
    sidebar.show(0, function() {
        //sidebar.css('transition', 'all 0.1s ease');
    });
    button.click(function() {
        if (overlay.is(':visible')) {
            hideSidebar();
        } else {
            showSidebar();
        }
        return false;
    });
    overlay.click(function() {
        hideSidebar();
    });

    $('.last_vol a').click(function(){
        if (!$(this).hasClass('on'))
        {
            $(".vol_view").animate({height: "toggle"},300);
            $(this).addClass('on');
        }else{
            $(".vol_view").animate({height: "toggle"},300);
            $(this).removeClass('on');
        }
        return false;
    });

    //page top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
        $('.page_ctrl').fadeIn();
            } else {
        $('.page_ctrl').fadeOut();
            }
    });
    $('.top').click(function() {
      $('html, body').animate({ scrollTop : 0 }, 400);
      return false;
    });
    $(window).scroll(function() {        
        if($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            $(".page_ctrl_mobile").addClass("on");
        } else {
            $(".page_ctrl_mobile").removeClass("on");
        }
    });

    //layer popup
    $(document).on('click', '.modal_popup', function (event) {
        event.stopPropagation();
        event.preventDefault();
        var popup = $(this).attr('href');
        $(popup).bPopup({
            follow: [true, false],
            opacity: 0
        });
    });   

    //sns    
    $('.share_group .share').click(function(){
        if (!$(this).hasClass('on'))
        {
            $(".share_group .sns_share").animate({height: "toggle"},100);
            $(this).addClass('on');
        }else{
            $(".share_group .sns_share").animate({height: "toggle"},100);
            $(this).removeClass('on');
        }
        return false;
    });    
    $('.share').click(function(){
        if (!$(this).hasClass('on'))
        {
            $(this).next(".sns_share").addClass('opened');
            $(this).addClass('on');
        }else{
            $(this).next(".sns_share").removeClass('opened');
            $(this).removeClass('on');
        }
        return false;
    });

	$(function() {  
      $('.cover')
        .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
                $(this).find('i').css({top:relY, left:relX})
        })
        .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('i').css({top:relY, left:relX})
        });
    });

	$('.news_top a[href*="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 300, 'linear');
    });

	$('.day_tab a[href*="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 300, 'linear');
    });

	//tab
	/*
    var $tabsNav    = $('.tabs'),
        $tabsNavLis = $tabsNav.children('li'),
        $tabContent = $('.tab-cont');
    $tabsNav.each(function() {
        var $this = $(this);
        $this.next().children('.tab-cont').stop(true,true).hide().first().show();
        $this.children('li').first().addClass('on').stop(true,true).show();
    });
    $tabsNavLis.on('click', function(e) {
        var $this = $(this);
        $this.siblings().removeClass('on').end().addClass('on');
        $this.parent().next().children('.tab-cont').stop(true,true).hide().siblings( $this.find('a').attr('href') ).fadeIn(600);
        e.preventDefault();
    });
	*/

	//tab - kruddo modify
    var $tabsNav    = $('.tabs'),
        $tabsNavLis = $tabsNav.children('li'),
        $tabContent = $('.tab-cont');
    $tabsNav.each(function() {
        var $this = $(this);
        $this.next().children('.tab-cont').stop(true,true).hide().first().show();
        $this.children('li').first().addClass('on').stop(true,true).show();
    });

	var $tabsNav_new    = $('.tabs_new'),
        $tabsNavLis_new = $tabsNav_new.children('li'),
        $tabContent_new = $('.tab-cont');
    $tabsNav_new.each(function() {
        var $this = $(this);
        $this.next().children('.tab-cont').stop(true,true).hide().first().show();
        $this.children('li').first().addClass('on').stop(true,true).show();
    });

    $tabsNavLis.on('click', function(e) {
        var $this = $(this);
        $this.siblings().removeClass('on').end().addClass('on');
		for(var i=1; i<=4; i++){
			$("#tabs_on_"+i+"_new").removeClass('on');
		}
		$("#"+$this.attr('name')+"_new").addClass('on');
        $this.parent().next().children('.tab-cont').stop(true,true).hide().siblings( $this.find('a').attr('href') ).fadeIn(600);
        e.preventDefault();
    });

    $tabsNavLis_new.on('click', function(e) {
        var $this = $(this);
        $this.siblings().removeClass('on').end().addClass('on');
		for(var i=1; i<=4; i++){
			$("#tabs_on_"+i).removeClass('on');
		}
		$("#"+$this.attr('name')).addClass('on');
        $this.parent().prev().children('.tab-cont').stop(true,true).hide().siblings( $this.find('a').attr('href') ).fadeIn(600);
        e.preventDefault();
    });
	//tab - kruddo modify

	//hidden keyword
    $('.hidden_keyword').on('click', function(){
        $(this).addClass('on');
    });
    $('.hidden_keyword .close').on('click', function(){
        $(this).parent('.hidden_keyword').fadeOut(100);
    });

	//Vol
	$('#header .vol .vol_tit').click(function(e){
		e.preventDefault();
		if (!$(this).hasClass('on'))
		{
			$('#header .vol_list').slideDown(200);
			$(this).addClass('on');
		}else{
			$('#header .vol_list').slideUp(200);
			$(this).removeClass('on');
		}
	});
	$('html').click(function(e) { if( !$('#header .vol').has(e.target).length ) {
		$('#header .vol_list').slideUp(200);
		$('#header .vol_tit').removeClass('on');
	}});

    wow = new WOW(
      {
        animateClass: 'animated',
        offset: 1
      }
    );
    wow.init();

});

function copy(trb)
{
    var IE=(document.all)?true:false;
    if (IE) {
    if(confirm("이 글의 주소를 클립보드에 복사하시겠습니까?"))
    window.clipboardData.setData("Text", trb);
    } else {
    temp = prompt("이 글의 주소입니다. Ctrl+C를 눌러 클립보드로 복사하세요", trb);
    }
}