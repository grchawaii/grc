jQuery(function($){
	
	//메인메뉴 드롭다운
	var gnb = $('.menu>div.gnb');
	gnb.find("li").hover(function(){
		t = $(this);
		t.find(">a").siblings("ul").slideDown(250);
		t.siblings().find(">a").siblings("ul").slideUp(250);
	},function(){
		$(this).find(">a").siblings("ul").slideUp(250);
	});
	
	
	//사이드 배너 이동기능
	if(side_banner_fix == 'yes'){ //사용여부 조건문
		$(window).scroll(function(){
			x = $(this).scrollTop();
			$('.side_banner').stop().animate({top:x},700);
		});
	}
	
	//바로이동 기능
	$(window).scroll(function(){ //스크롤시 표시
		if($(this).scrollTop() > 20){
		$('.move_target').fadeIn(300);
		} else{
		$('.move_target').fadeOut(300);
		}
	});
	$('.move_target').find('a').click(function(event) { //부드럽게 이동
		var id = $(this).attr("href");
		var offset = 50;
		var target = $(id).offset().top - offset;
		$('html, body').animate({scrollTop:target}, 800);
		event.preventDefault();
	});
	
	
	//컬러셋 테스트 (패턴 테스트 & 컬러피커 연동)
	$("#preview_pattern").change(function(){
		$($(color_picker_target).val()).css('backgroundImage',$(this).val());
		if($(color_picker_target).val() == 'body'){ //배경패턴일경우 값 변환
		$('.site_pattern').css('backgroundImage',$(this).val());
		$('body').css('backgroundImage','none');
		}
	});		
	
	
	//3차메뉴 표식 움직임 효과
	$('.menu .gnb li li ul').hover(function(){
		$(this).parent().find('.view').animate({right:'3px'},200);
	},function(){
		$(this).parent().find('.view').animate({right:'5px'},200);
	});
	
	//심플메뉴
	$('.simple_menu ul').hover(function(){
		$(this).animate({width:'140px'},0,function(){
			$(this).find('a').stop().animate({left:'0'},500);
		});
	},function(){
		$(this).find('a').stop().animate({left:'-97px'},400,function(){
			$('.simple_menu ul').css('width','47px');
		});
	}); 
	
	//서브바, 위젯바 선택효과
	if(subbar_select == 'yes'){ //사용여부 조건문
		//서브메뉴
		$('.lnb').hover(function(){
			$(this).css('boxShadow','0px 0px 13px #ccc');
		},function(){
			$(this).css('boxShadow','none');
		});
		
		//서브위젯, 위젯바
		$('.left_widget_wrap, .widget_bar_wrap').find('.widget1, .widget2, .widget3, .widget4').hover(function(){
			$(this).css('boxShadow','0px 0px 13px #ccc');
		},function(){
			$(this).css('boxShadow','none');
		});
	}
	
	//패밀리 사이트
	$('div.family_site_btn').toggle(function(){
		$('.family_wrap').slideDown();
		$(this).find('img').attr('src','./layouts/xecenter/img/family_down.png');
	}, function(){
		$('.family_wrap').slideUp();
		$(this).find('img').attr('src','./layouts/xecenter/img/family_up.png');
	});
	$('div.family_wrap').hover(function(){ //미리보기 기능
		$(this).find('a').hover(function(){
			$(this).find('img').css('right', $('div.family_wrap').width()+42);
			$(this).find('img').stop().fadeTo('500',1);
		}, function(){
			$(this).find('img').stop().fadeTo('500',0);
		});
	});
	
	// 서브메뉴 이동기능
	if(sub_menu_fix == 'yes'){
		$(window).scroll(function(){
		
			x = $(this).scrollTop(); //스크롤위치
			y = $('#body').css('marginTop').replace(/[^-\d\.]/g, ''); //높이확장 여백값
			g = $('.content_top').height(); //컨텐츠 상단바 높이값 
			
			if( x > y ){ //스크롤 조건문
				
				if( $('#body').css('marginTop') == '100px' ){  //높이확장기능에 따른 조건문
					setTimeout(function(){	
					$('.lnb').stop().animate({top: x - y - g + 10}, 1100, 'easeOutBack'); 
					}, 0);
				}
				
				if( $('#body').css('marginTop') == '10px' ){  //높이확장기능에 따른 조건문
					setTimeout(function(){
					$('.lnb').stop().animate({top: x - y - g + 10}, 1100, 'easeOutBack');
					}, 0);
				}
			}else{  //스크롤 조건문
				$('.lnb').stop().animate({top: 0}, 700);
			}	
		});
	}
	
	
	//알림센터모듈과 호환성 문제 개선
	if($('#nc_container').width() > '340' ){
	$('.menu').css('top','30px');
	} 
	
	//배너 자동위치조정
	var banner_float = 0;
	$('.banner .banner_float').each(function(){
	banner_float = banner_float + $(this).find('img').width(); //이미지 크기에 따른 자동넓이
	});
	$('.banner_float').css('width',banner_float);
	
	//카운터 위젯 자동위치조정
	var counter_float = 0;
	$('.counter_float span.size').each(function(){
	counter_float = counter_float + $(this).width(); //위젯크기에 다른 자동넓이
	});
	$('.counter_float').css('width',counter_float+10);
	
	//하단메뉴 자동위치조정
	var auto_float = 0;
	$('.auto_float li').each(function(){
		auto_float = auto_float + $(this).width(); //메뉴 갯수에 따른 자동넓이
	});
	$('.auto_float').css('width',auto_float+10);
	
	//카피라이트 자동위치조정	var auto_float = 0
	var copyright_float = 0;
	$('.copyright_float a').each(function(){
		copyright_float = copyright_float + $(this).width(); //카피라이터 넓이에 따른 위치조정
	});
	$('.copyright_float').css('width',copyright_float);
		
		
	//내정보창 스크롤바 기능 (내글, 내댓글, 내쪽지)
	/*$(document).ready(function(){ //스크롤바1 플러그인
		$('#scrollbar1').perfectScrollbar(); //내글   (스크롤바1 플러그인)
		$('#scrollbar2').perfectScrollbar(); //내댓글 (스크롤바1 플러그인)
		$('#scrollbar3').perfectScrollbar(); //내쪽지 (스크롤바1 플러그인)
	});*/	
	/*$(document).ready(function(){ //스크롤바2 플러그인
		$("#scrollbar1").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	}); //내글   (스크롤바2 플러그인)
		$("#scrollbar2").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	}); //내댓글 (스크롤바2 플러그인)
		$("#scrollbar3").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	});  //내쪽지 (스크롤바2 플러그인)
	});*/	
	
	//검색바 & 내정보창 
	$('.search').click(function(){ //검색바
		if( $('.bg_info').height() == '2'){
				$('.bg_info').stop().animate({height:'104px'},500);
				$('.search_wrap').fadeIn('slow');
				$('.my_info_wrap').fadeOut('slow');
		}else if( $('.bg_info').height() == '104' && $('.my_info_wrap').css('display') == 'block'){
				$('.my_info_wrap').css('display','none');
				$('.search_wrap').fadeIn('slow');
		}else{
				$('.bg_info').stop().animate({height:'2px'},500);
				$('.search_wrap').fadeOut('slow');
		}
	});
	$('.my_info_btn').click(function(){ //내정보창
		if( $('.bg_info').height() == '2'){
				$('.bg_info').stop().animate({height:'104px'},500);
				$('.search_wrap').fadeOut('slow');
				$('.my_info_wrap').fadeIn('slow');
				if( $('#scrollbar1, #scrollbar2, #scrollbar3').hasClass('mCustomScrollbar') == false ){ //스크롤바 플러그인 조건문
					$("#scrollbar1").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	}); //내글   (스크롤바2 플러그인)
					$("#scrollbar2").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	}); //내댓글 (스크롤바2 플러그인)
					$("#scrollbar3").mCustomScrollbar({	mouseWheelPixels: "40",	autoHideScrollbar: Boolean	});  //내쪽지 (스크롤바2 플러그인)
				}	
		}else if( $('.bg_info').height() == '104' && $('.search_wrap').css('display') == 'block'){
				$('.search_wrap').slideUp();
				$('.my_info_wrap').fadeIn('slow');
		}else{
				$('.bg_info').stop().animate({height:'2px'},500);
				$('.my_info_wrap').fadeOut('slow');
		}
	}); //효과
	$('.my_info .info1').find('img').hover(function(){
		$(this).stop().fadeTo('',0.2);
		$(this).siblings('.label').css('display','block');
			},function(){
		$(this).siblings('.label').css('display','none');	
		$(this).stop().fadeTo('slow',1);
	});
	$('.my_info .info_wrap').find('a').hover(function(){  //내글,내쪽지,내댓글 바로가기 효과
		$(this).find('img').stop().animate({marginLeft:'15'},500);
			},function(){
		$(this).find('img').stop().animate({marginLeft:'2'},500);
	});
	
		
	// 로고 효과
	$('.logo').mouseenter(function(){
		$('.logo .text_strong').stop().animate({color:logo_color,fontSize:logo_size},500); //css값 layout변수로 처리
	});
	$('.logo').mouseleave(function(){
		$('.logo .text_strong').stop().animate({color:logo_color_o,fontSize:logo_size_o},250); //css값 layout변수로 처리
	});
	 
		
	//레이아웃 넓이 변경
	$('.fix_width').css('width',$.cookie('screen_width_ck')); // 크기 변환후 반환된 쿠키값 적용 (넓이)
	
	if($('.fix_width').width() == screen_width1){ /*쿠키값에 따른 조건문 (작은값)*/
		//바로이동 기능(기본값)
		$('.move_target').css('marginLeft',move_target_width);
		//기본 문구,이미지 출력
		$('.width_change').html('<img src="./layouts/xecenter/img/screen_w1.png"></img> 넓이확장');
		//기본 hover 이미지
		$('.width_change').hover(function(){
			$(this).find('img').attr('src','./layouts/xecenter/img/screen_w2.png');
				},function(){
			$(this).find('img').attr('src','./layouts/xecenter/img/screen_w1.png');		
		});
		//토글
		$('.width_change').toggle(function(){
			$('.fix_width').animate({width:screen_width2/*info변수처리*/},600);
			$('.move_target').animate({marginLeft:screen_width2},600); /* 바로이동 기능 */
			$(this).html('<img src="./layouts/xecenter/img/screen_w3.png"></img> 넓이축소');
			$.cookie('screen_width_ck',screen_width2,{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
			//이미지변경
			$('.width_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w4.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w3.png');		
			});
		},function(){
			$('.fix_width').animate({width:screen_width1/*info변수처리*/},600);
			$.cookie('screen_width_ck',screen_width1),{expries:1, path:'/'}; /*변경값 쿠키 굽기*/
			$('.move_target').animate({marginLeft:screen_width1},600); /* 바로이동 기능 */
			$(this).html('<img src="./layouts/xecenter/img/screen_w1.png"></img> 넓이확장');
			//이미지변경
			$('.width_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w2.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w1.png');		
			});
		});
	}	
	if($('.fix_width').width() == screen_width2){ /*쿠키값에 따른 조건문 (큰값)*/
		//바로이동 기능(기본값)
		$('.move_target').css('marginLeft',move_target_width2);
		//기본 문구,이미지 출력
		$('.width_change').html('<img src="./layouts/xecenter/img/screen_w3.png"></img> 넓이축소');
		//기본 hover 이미지
		$('.width_change').hover(function(){
			$(this).find('img').attr('src','./layouts/xecenter/img/screen_w4.png');
				},function(){
			$(this).find('img').attr('src','./layouts/xecenter/img/screen_w3.png');		
		});
		//토글
		$('.width_change').toggle(function(){
			$('.fix_width').animate({width:screen_width1/*info변수처리*/},600);
			$('.move_target').animate({marginLeft:screen_width1},600); /* 바로이동 기능 */
			$.cookie('screen_width_ck',screen_width1,{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
			$(this).html('<img src="./layouts/xecenter/img/screen_w1.png"></img> 넓이확장');
			//이미지변경
			$('.width_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w2.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w1.png');		
			});
		},function(){
			$('.fix_width').animate({width:screen_width2/*info변수처리*/},600);
			$('.move_target').animate({marginLeft:screen_width2},600); /* 바로이동 기능 */
			$(this).html('<img src="./layouts/xecenter/img/screen_w3.png"></img> 넓이축소');
			$.cookie('screen_width_ck',screen_width2,{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
			//이미지변경
			$('.width_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w4.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_w3.png');		
			});
		});
	}	
	
	
	//레이아웃 높이 변경
	if(screen_height_user_change == 'false'){ //높이여백 임의로 변경시 동작안함
		
		$('#body').css('marginTop',$.cookie('screen_height_ck')); // 크기 변환후 반환된 쿠키값 적용 (marginTop)
		$('#body').css('marginBottom',$.cookie('screen_height_ck')); // 크기 변환후 반환된 쿠키값 적용 (marginBottom)
		
		if($('#body').css('marginTop') == '100px'){ /* 쿠키값에 따른 조건문 (큰값) */
			//기본 문구,이미지 출력
			$('.height_change').html('<img src="./layouts/xecenter/img/screen_h1.png"></img>높이확장');
			//기본 hover 이미지	
			$('.height_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_h2.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_h1.png');		
			});		
			//토글
			$('.height_change').toggle(function(){
				$.cookie('screen_height_ck','10px',{expries:1, path:'/'}); /*변경값 쿠키 굽기 */
				$('#body').animate({marginTop:'10px',marginBottom:'10px'},600);
				$(this).html('<img src="./layouts/xecenter/img/screen_h3.png"></img>높이축소');
				//이미지변경
				$('.height_change').hover(function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h4.png');
						},function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h3.png');		
				});
			},function(){
				$.cookie('screen_height_ck','100px',{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
				$('#body').animate({marginTop:'100px',marginBottom:'100px'},600);
				$(this).html('<img src="./layouts/xecenter/img/screen_h1.png"></img>높이확장');
				//이미지변경
				$('.height_change').hover(function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h2.png');
						},function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h1.png');		
				});
			});
		}
		if($('#body').css('marginTop') == '10px'){ /* 쿠키값에 따른 조건문 (작은값) */
			//기본 문구,이미지 출력
			$('.height_change').html('<img src="./layouts/xecenter/img/screen_h3.png"></img>높이축소');
			//기본 hover 이미지	
			$('.height_change').hover(function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_h4.png');
					},function(){
				$(this).find('img').attr('src','./layouts/xecenter/img/screen_h3.png');		
			});		
			//토글
			$('.height_change').toggle(function(){
				$.cookie('screen_height_ck','100px',{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
				$('#body').animate({marginTop:'100px',marginBottom:'100px'},600);
				$(this).html('<img src="./layouts/xecenter/img/screen_h1.png"></img>높이확장');
				//이미지변경
				$('.height_change').hover(function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h2.png');
						},function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h1.png');		
				});
			},function(){
				$.cookie('screen_height_ck','10px',{expries:1, path:'/'}); /*변경값 쿠키 굽기*/
			$('#body').animate({marginTop:'10px',marginBottom:'10px'},600);
				$(this).html('<img src="./layouts/xecenter/img/screen_h3.png"></img>높이축소');
				//이미지변경
				$('.height_change').hover(function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h4.png');
						},function(){
					$(this).find('img').attr('src','./layouts/xecenter/img/screen_h3.png');		
				});
			});
		}
	}
	
	//사이트맵
	if( site_map_use == 'yes'){ //사용여부 조건문
		$('.site_map_btn').toggle(function(){
			$('.site_map_bg').slideDown(800);
			$(this).find('img').attr('src','./layouts/xecenter/img/site_map_1.png');
		},function(){
			$('.site_map_bg').slideUp(500);
			$(this).find('img').attr('src','./layouts/xecenter/img/site_map.png');
		});
		
		var sm_width = $('.fix_width').width();
		var sm_li = $('.sitemap_auto_float').children('li').size()-1;
		$('.sitemap_auto_float').children('li').css('width', sm_width / sm_li );
		$('.site_map_pipe,.site_map_pipe_final').css('height', $('.site_map_bg').height()-27);
	}
		
		
});
