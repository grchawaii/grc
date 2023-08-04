/* Show And Hide Toggle */
var cc=0
function showHide(id) {
    if (cc==0) {
        cc=1
        document.getElementById(id).style.display="block";
    } else {
        cc=0
        document.getElementById(id).style.display="none";
    }
}

/* Roll_over Menu 1 */
// Brower
var browserType=''; 
if(navigator.userAgent.indexOf("MSIE") >-1) {
   browserType = 'IE'; 
} else if(navigator.userAgent.indexOf("Firefox") >-1) {
   browserType = 'FF'; 
} else {
   browserType = 'OTHER'; 
}

function gnbinToggle(id, gnbblock) {
 if(browserType == 'FF') {
    gnbinToggleFF(id, gnbblock);
 } else if (browserType == 'OTHER' ) {
    gnbinToggleFF(id, gnbblock);
 } else {
    gnbinToggleIE(id, gnbblock);
 }
}

// Local Navigation Toggle IE
function gnbinToggleIE(id, gnbblock) {
 for(num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none';              // 2nd Menu
  document.getElementById('gnbli'+num).setAttribute('className', 'off');  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
  document.getElementById('gnb'+id).style.display = 'block';
  gnbblock.className = "on";
     
}

// Local Navigation Toggle FF
function gnbinToggleFF(id, gnbblock) {
 for(var num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none'; // 2nd Menu
  document.getElementById('gnbli'+num).className = null;  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
  document.getElementById('gnb'+id).style.display = '';
  gnbblock.className = "on";
}

function reset_menu()
{
  var sub_1 = document.getElementById('gnbli'+gnb_count_now);     // 1st Menu 
  var sub_2 = document.getElementById('gnb'+gnb_count_now);     // 2nd Menu
}

/* Roll_over Menu 2 */
// Brower
var browserType=''; 
if(navigator.userAgent.indexOf("MSIE") >-1) {
   browserType = 'IE'; 
} else if(navigator.userAgent.indexOf("Firefox") >-1) {
   browserType = 'FF'; 
} else {
   browserType = 'OTHER'; 
}

function gnbinToggle2(id, gnbblock) {
 if(browserType == 'FF') {
    gnbinToggle2FF(id, gnbblock);
 } else if (browserType == 'OTHER' ) {
    gnbinToggle2FF(id, gnbblock);
 } else {
    gnbinToggle2IE(id, gnbblock);
 }
}

// Local Navigation Toggle IE
function gnbinToggle2IE(id, gnbblock) {
 for(num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none';              // 2nd Menu
  document.getElementById('gnbli'+num).setAttribute('className', 'off');  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
 var menuWrap = document.getElementById('menuWrap');  // Contents Width
  document.getElementById('gnb'+id).style.display = 'block';
  gnbblock.className = "on";

 var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

 // 2nd Menu 크기에 따른 위치 조절
 if (sub_2_left < 0)
	 sub_2_left = 0;
 else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 82 )
	 sub_2_left=(menuWrap.offsetWidth - 82 - sub_2.offsetWidth);
	 sub_2.style.marginLeft = sub_2_left + 'px';
}

// Local Navigation Toggle FF
function gnbinToggle2FF(id, gnbblock) {
 for(var num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none'; // 2nd Menu
  document.getElementById('gnbli'+num).className = null;  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
 var menuWrap = document.getElementById('menuWrap');  // Contents Width
  document.getElementById('gnb'+id).style.display = '';
  gnbblock.className = "on";

 var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

 // 2nd Menu 크기에 따른 위치 조절
 if (sub_2_left < 0)
	 sub_2_left = 0;
 else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 82 )
	 sub_2_left=(menuWrap.offsetWidth - 82 - sub_2.offsetWidth);
	 sub_2.style.marginLeft = sub_2_left + 'px';
}

function reset_menu2()
{
  var sub_1 = document.getElementById('gnbli'+gnb_count_now);     // 1st Menu 
  var sub_2 = document.getElementById('gnb'+gnb_count_now);     // 2nd Menu
  var menuWrap = document.getElementById('menuWrap');  // Contents Width

  var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

  // 넓이가 0미만일경우 0
  if (sub_2_left < 0)
 	  sub_2_left = 0;
  else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 82 )
	  sub_2_left=(menuWrap.offsetWidth - 82 - sub_2.offsetWidth);
	  sub_2.style.marginLeft = sub_2_left + 'px';
}

/* Roll_over Menu 3 */
// Brower
var browserType=''; 
if(navigator.userAgent.indexOf("MSIE") >-1) {
   browserType = 'IE'; 
} else if(navigator.userAgent.indexOf("Firefox") >-1) {
   browserType = 'FF'; 
} else {
   browserType = 'OTHER'; 
}

function gnbinToggle3(id, gnbblock) {
 if(browserType == 'FF') {
    gnbinToggle3FF(id, gnbblock);
 } else if (browserType == 'OTHER' ) {
    gnbinToggle3FF(id, gnbblock);
 } else {
    gnbinToggle3IE(id, gnbblock);
 }
}

// Local Navigation Toggle IE
function gnbinToggle3IE(id, gnbblock) {
 for(num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none';              // 2nd Menu
  document.getElementById('gnbli'+num).setAttribute('className', 'off');  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
 var menuWrap = document.getElementById('menuWrap');  // Contents Width
  document.getElementById('gnb'+id).style.display = 'block';
  gnbblock.className = "on";

 var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

 // 2차메뉴 크기에 따른 위치 조절
 if (sub_2_left < 0)
	 sub_2_left = 0;
 else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 22 )
	 sub_2_left=(menuWrap.offsetWidth - 22 - sub_2.offsetWidth);
	 sub_2.style.marginLeft = sub_2_left + 'px';
}

// Local Navigation Toggle FF
function gnbinToggle3FF(id, gnbblock) {
 for(var num=0; num<gnb_count; num++) {
  document.getElementById('gnb'+num).style.display='none'; // 2nd Menu
  document.getElementById('gnbli'+num).className = null;  // 1st Menu
 }
 var sub_1 = document.getElementById('gnbli'+id);     // 1st Menu 
 var sub_2 = document.getElementById('gnb'+id);     // 2nd Menu
 var menuWrap = document.getElementById('menuWrap');  // Contents Width
  document.getElementById('gnb'+id).style.display = '';
  gnbblock.className = "on";

 var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

 // 2차메뉴 크기에 따른 위치 조절
 if (sub_2_left < 0)
	 sub_2_left = 0;
 else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 22 )
	 sub_2_left=(menuWrap.offsetWidth - 22 - sub_2.offsetWidth);
	 sub_2.style.marginLeft = sub_2_left + 'px';
}

function reset_menu3()
{
  var sub_1 = document.getElementById('gnbli'+gnb_count_now);     // 1st Menu 
  var sub_2 = document.getElementById('gnb'+gnb_count_now);     // 2nd Menu
  var menuWrap = document.getElementById('menuWrap');  // Contents Width

  var sub_2_left =sub_1.offsetLeft - sub_2.offsetWidth /4 ;

  // 넓이가 0미만일경우 0
  if (sub_2_left < 0)
 	  sub_2_left = 0;
  else if( (sub_2_left + sub_2.offsetWidth) > menuWrap.offsetWidth - 22 )
	  sub_2_left=(menuWrap.offsetWidth - 22 - sub_2.offsetWidth);
	  sub_2.style.marginLeft = sub_2_left + 'px';
}

jQuery(document).ready(function () {

	/*
	* 플로팅 메뉴, 페이지의 최상단과 최하단 이동을 편리하게 한다.
	* by Jowrney
	*/
	/* Slide Menu */
	var currentPosition = parseInt(jQuery("#slideMenu").css("top")); 
	jQuery(window).scroll(function() {

	var position = jQuery(window).scrollTop(); // 현재 스크롤바의 위치값을 반환합니다.
	var sum = position + currentPosition+"px";
	jQuery("#slideMenu").stop().animate({top:sum},500);
	});

	/* Slide updown */
	var currentPosition2 = parseInt(jQuery("#updown").css("top")); 
	jQuery(window).scroll(function() {

	var position2 = jQuery(window).scrollTop(); // 현재 스크롤바의 위치값을 반환합니다.
	var sum2 = position2 + currentPosition2+"px";
	jQuery("#updown").stop().animate({top:sum2},500);
	});

	/* Select Language */
	jQuery('.select_language_button button').click(function () {
			jQuery(this).css({'border-bottom':'1px'});
			jQuery('.language_line ul').slideToggle('fast');
	});

});

jQuery(function($){
	
	// GNB
	var gnb = $('div.gnb');
	var gnb_ul = gnb.find('>ul');
	var gnb_list = gnb.find('>ul>li');
	
	// Show GNB
	function show_gnb(){
		gnb_list.removeClass('active');
		$(this).parent('li').addClass('active');
	}
	gnb_list.find('>a').mouseover(show_gnb).focus(show_gnb);
	
	// Hide GNB
	function hide_gnb(){
		gnb_list.removeClass('active');
	}
	gnb.mouseleave(hide_gnb);
	$('*:not(".gnb a")').focus(hide_gnb);
		
});

/**
 * 김무건 || Elkha (elkha1914@hotmail.com)
 * http://elkha.kr
 * 2010-07-07
 **/
(function($){
	$(document).ready(function () {

		// gnb show & hide
		$('#drop_gnb ul li').hover(function () {
				$(this).children('ul:not(":animated")').show('fast');
			}, function () {	
				$('ul', this).fadeOut(100);
		}).children('a').focus(function(){
			$(this).parent('li').parent('ul').children('li').children('.sub').addClass('closed');
			$(this).removeClass('closed').addClass('opened');
			$(this).parent('li').children('ul').show('fast');
			if($(this).attr('class').match('opened')) $(this).parent('li').parent('ul').children('li').children('.closed').parent('li').children('ul').fadeOut(70);
		});
		$('*:not("#drop_gnb a")').focus(function(){
			$('#drop_gnb ul li ul').fadeOut(100);
		});

	});
})(jQuery);
