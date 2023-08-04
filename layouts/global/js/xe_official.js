jQuery(function($){

// Main Menu
	var gnb = $('div.gnb');
	var sMenu = $('ul#menu');
	var aItem = sMenu.find('>li>a');
	var sItem = sMenu.find('>li');
	var shItem = sMenu.find('>li.active');
	var sshItem = sMenu.find('>li.highlight');
	var ssItem = sMenu.find('li');
	var sshhItem = sMenu.find('>li>div');
	var aaItem = sshhItem.find('a');
	var LastLi = sMenu.find('li').last();
	var lastEvent = null;
	
	var gnbwidth = gnb.outerWidth(true);
	sshhItem.css('width', gnbwidth);
		sshItem.children('div').css('display','block');
	if (sItem.hasClass('highlight')) {
		var position = sshItem.position();
		var powidth = sshItem.children('div').children('ul').outerWidth(true);
		var wwpowidth = sshItem.outerWidth(true);
			sshItem.children('div').children('ul').css('left', position.left+(wwpowidth/2)-(powidth/2));
	}

	function sMenuSlide(){
		
		var t = $(this);
		t.next().children().find('li').removeClass('highlight');
		if (t.next().hasClass('sub1')) {
		
		sshhItem.addClass('sub1');
		sshhItem.css('display','none');
		t.next('div').removeClass('sub1');
		t.next('div').css('display','block');
		sItem.removeClass('highlight');
		t.parent('li').addClass('highlight');
		if (t.hasClass('before_')){	
			var position = t.parent('li').position();
			var powidth = t.next('div').children('ul').outerWidth(true);
			var wwpowidth = t.parent('li').outerWidth(true);
			t.next('div').children('ul').css('left', position.left+(wwpowidth/2)-(powidth/2));
			t.removeClass('before_');
			}
		
		} else if(!t.next('div').length) {
		sshhItem.addClass('sub1');
		sshhItem.css('display','none');
		sItem.removeClass('highlight');
		t.parent('li').addClass('highlight');}
	}
	aItem.mouseover(sMenuSlide).focus(sMenuSlide);

	function clear_sss(){

		if (!shItem.hasClass('highlight')) {
		sMenu.children('li').removeClass('highlight');
		shItem.addClass('highlight');
		}
		sshhItem.addClass('sub1');
		sshhItem.css('display','none');
		sMenu.children('li').removeClass('highlight');
		shItem.addClass('highlight');
		shItem.children('div').css('display','block');
		}
	sMenu.mouseleave(clear_sss);
	LastLi.focusout(clear_sss);

/* 로그인창 */
	var gLang = $('li.lang_account');
	var wLang = gLang.find('>div.wrap_languageList');
	var bItem = gLang.find('>span>a');
	var lastEvent = null;
	
    function gLangToggle(){
        var g = $(this);
            g.parent('span').next('div').removeClass('act_acc');
           
       
    };
   
    bItem.mouseover(gLangToggle).focus(gLangToggle);
	
		 gLang.mouseleave(function () {
		 wLang.addClass('act_acc');
	});


});