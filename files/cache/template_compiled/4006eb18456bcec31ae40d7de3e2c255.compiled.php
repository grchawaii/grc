<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout.css--><?php $__tmp=array('layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style type="text/css">
<?php if($__Context->layout_info->header_content1_background){ ?>
#header_content1 { background:url('<?php echo $__Context->layout_info->header_content1_background ?>') center repeat-x; }
<?php } ?>
<?php if($__Context->layout_info->header_subcontent1_background){ ?>
#visual { background:url('<?php echo $__Context->layout_info->header_subcontent1_background ?>') center no-repeat #FFFFFF; }
<?php } ?>
.quick_content_wrapper { position:absolute; top:0px; left:0px; width:100%; }
.quick_content_wrapper .quick_content { position:relative; top:0px; width:990px; margin:0px auto; }
.quick_content_wrapper .quick_content .quick_left_content { position:absolute; }
.quick_content_wrapper .quick_content .quick_right_content { position:absolute; }
</style>
<div class="xenara_layout" style="background:none;">
  <div id="info">
  <?php if($__Context->header_menu1->list){ ?>
    <ul class="first_menu">
    <?php  $__Context->idx = 1 ?>
    <?php if($__Context->header_menu1->list&&count($__Context->header_menu1->list))foreach($__Context->header_menu1->list as $__Context->key => $__Context->val){ ?>
      <li class="first_list">
        <ul class="second_menu second_menu<?php echo $__Context->idx ?>">
          <li class="seond_list<?php if($__Context->val['selected']){ ?> on<?php } ?>" style="margin-bottom:5px; font-weight:bold;">
            <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
          </li>
          <?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->key2 => $__Context->val2){ ?>
          <li class="seond_list<?php if($__Context->val2['selected']){ ?> on<?php } ?>">
            <a href="<?php echo $__Context->val2['href'] ?>" <?php if($__Context->val2['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
          </li>
          <?php } ?>
        </ul>
      </li>
      <?php  $__Context->idx++ ?>
    <?php } ?>
    </ul>
  <?php } ?>
  </div>
  <?php if($__Context->layout_info->layout_type=='sub'){ ?>
  <div id="quick"<?php if($__Context->layout_info->header_subcontent1 || $__Context->layout_info->header_subcontent1_background){ ?> style="top:265px;"<?php } ?>>
    <ul class="quick_menu">
    <?php if($__Context->quick_menu1->list&&count($__Context->quick_menu1->list))foreach($__Context->quick_menu1->list as $__Context->key => $__Context->val){ ?>
      <li class="first_list first_list<?php echo $__Context->idx;
if($__Context->val['selected']){ ?> on<?php } ?>">
        <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php if($__Context->val->normal_btn){ ?><img src="<?php echo $__Context->val->normal_btn ?>" /><?php }else{;
echo $__Context->val['text'];
} ?></a>
      </li>
    <?php } ?>
    </ul>
  </div>
  <?php } ?>
<div id="global">
      <ul id="menu">
      <?php if($__Context->logged_info){ ?>
        <li><a class="loginfo logout" onfocus="blur()" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
        <li><a class="loginfo member" onfocus="blur()" href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->member_info ?></a></li>
        <?php if($__Context->logged_info->is_admin=="Y" && !$__Context->site_module_info->site_srl){ ?>
          <li><a class="loginfo admin" onfocus="blur()" href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->lang->cmd_management ?></a></li>
        <?php } ?>
      <?php }else{ ?>
        <li><a class="loginfo login" onfocus="blur()" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
        <?php if($__Context->layout_info->show_sns_login=='Y'){ ?><li><a class="loginfo snslogin" onfocus="blur()" href="<?php echo getUrl('act', 'dispSocialxeLoginForm') ?>">Social <?php echo $__Context->lang->cmd_login ?></a></li><?php } ?>
        <li><a class="loginfo signup" onfocus="blur()" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
      <?php } ?>
	
      </ul>
      <ul id="sns" style="">
 	      <li><?php if($__Context->layout_info->facebook_url){ ?><a href="<?php echo $__Context->layout_info->facebook_url ?>" target="_blank"><img src="<?php echo $__Context->tpl_path ?>images/global_facebook.png" border="0"></a><?php } ?></li>
        <li><?php if($__Context->layout_info->twitter_url){ ?><a href="<?php echo $__Context->layout_info->twitter_url ?>" target="_blank"><img src="<?php echo $__Context->tpl_path ?>images/global_twitter.png" border="0"></a><?php } ?></li>
        <li><?php if($__Context->layout_info->blog_url){ ?><a href="<?php echo $__Context->layout_info->blog_url ?>" target="_blank"><img src="<?php echo $__Context->tpl_path ?>images/global_blog.png" border="0"></a><?php } ?></li>
	<li><img class="zbxe_widget_output" widget="language_select" skin="default" colorset="white" /></li>
      </ul>
    </div>
<div id="topvisual"></div>
<div id="topmenu"></div>  
<div style="position:relative; width:980px; height:30px; margin:0px auto; margin-top:-71px;overflow:hidden;">    
    <div id="head_other">
      <table border="0" cellspacing="0" width="100%" align="center"><tbody><tr>
       
        <td width="980" align="center" valign="middle">
          <?php if($__Context->header_menu1->list){ ?>
            <ul class="header_menu_" style="margin:0px auto;">
              <?php  $__Context->idx = 1 ?>
              <?php if($__Context->header_menu1->list&&count($__Context->header_menu1->list))foreach($__Context->header_menu1->list as $__Context->key => $__Context->val){ ?>
                <?php if($__Context->val['selected']){ ?>
                  <?php  $__Context->header_menu1_1st = $__Context->val ?>
                <?php } ?>
                <?php if($__Context->idx<=6){ ?>
                  <li class="list list<?php echo $__Context->idx;
if($__Context->val['selected']){ ?> on<?php } ?>">
                    <span id="menuname"><?php echo $__Context->val['link'] ?></span>
                  </li>
                <?php } ?>
                <?php  $__Context->idx++ ?>
              <?php } ?>
            </ul>
          <?php } ?>
        </td>
      </tr></tbody></table>
    </div>
  </div>
  <?php if($__Context->layout_info->layout_type=='sub'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/layout_XENARA BIZ LAYOUT_v1.0','layout_sub.html') ?>
  <?php }else{ ?>
    <!--#Meta:layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout_main.css--><?php $__tmp=array('layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout_main.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    
    <?php if($__Context->layout_info->main_content_type=='fix_content' && !$__Context->act){ ?>
      <div id="content" class="content" style="position:relative; width:980px; padding:65px 0px 0px 0px; margin:0px auto;">
      <table border="0" cellspacing="0" width="100%" style="border:0px;"><tbody><tr>
        <td width="259" align="left" valign="top" class="main_left">         
          <?php if($__Context->layout_info->main_left_content){ ?><div class="main_left_content" style="width:240px; margin-right:19px;">
           <p class="banner"><a href="#"><img src="/xe/common/img/left_banner01.jpg" alt="설교안내 바로가기"></a></p>
           <p><a href="#"><img src="/xe/common/img/left_banner02.jpg" alt="예배안내"></a></p>
            <?php echo $__Context->layout_info->main_left_content ?>
          </div><?php } ?>
          <?php if($__Context->main_banner_menu->list){ ?><div class="main_banner_menu" style="margin-top:20px;">
            <?php  $__Context->idx = 1 ?>
		        <ul class="first_menu">
            <?php if($__Context->main_banner_menu->list&&count($__Context->main_banner_menu->list))foreach($__Context->main_banner_menu->list as $__Context->key => $__Context->val){ ?>
              <?php if($__Context->val['selected']){ ?>
                <?php  $__Context->main_banner_menu_1st = $__Context->val ?>
              <?php } ?>
              <li class="first_list first_list<?php echo $__Context->idx;
if($__Context->val['selected']){ ?> on<?php } ?>">
                <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
              </li>
              <?php  $__Context->idx++ ?>
            <?php } ?>
		        </ul>
          </div><?php } ?>
        </td>
        <td width="466" align="left" valign="top" class="main_middle">
<!-- 롤링시작 -->
<?php if($__Context->layout_info->main_header_content_widget1){ ?><div id="header_content1" class="main_header_content_widget1" style="margin-top:1px; width:466px; overflow:hidden;">
      <div >
        <img class="zbxe_widget_output" widget="content_xenara" skin="widget_content_biz_layout_v1_0_w1" colorset="default" content_type="document" module_srls="<?php echo $__Context->layout_info->main_header_content_widget1 ?>" list_type="normal" tab_type="none" markup_type="table" list_count="15" cols_list_count="15" page_count="1" subject_cut_size="30" content_cut_size="50" option_view="title,regdate,nickname,thumbnail,content" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" show_category="Y" show_icon="Y" duration_new="24" order_target="list_order" order_type="asc" thumbnail_type="crop" thumbnail_width="220" thumbnail_height="220" map_provider="naver" shopintro_extra="N" />
      </div>
    </div><?php } ?>
    <?php if(!$__Context->layout_info->main_header_content_widget1 && ($__Context->layout_info->header_content1 || $__Context->layout_info->header_content1_background)){ ?><div id="header_content1">
      <div class="preview_slide" style="width:466px; overflow:hidden;">
        <?php echo $__Context->layout_info->header_content1 ?>
      </div>
    </div><?php } ?>
<!--롤링끝-->
          <?php if($__Context->layout_info->main_middle_content_widget1){ ?><div class="main_middle_content_widget1" style="margin:0px 20px;">
            <img class="zbxe_widget_output" widget="content_xenara" skin="widget_content_biz_layout_v1_0_w2" colorset="default" content_type="document" module_srls="<?php echo $__Context->layout_info->main_middle_content_widget1 ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="30" content_cut_size="50" option_view="title,regdate,thumbnail,content" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" show_category="Y" show_icon="Y" duration_new="24" order_target="list_order" order_type="asc" thumbnail_type="crop" map_provider="naver" shopintro_extra="N" />
          </div><?php } ?>
          <?php if($__Context->layout_info->main_middle_content_widget2){ ?><div class="main_middle_content_widget2"  style="margin:30px 20px 0px 20px;">
            <img class="zbxe_widget_output" widget="content_xenara" skin="widget_content_biz_layout_v1_0_w2" colorset="default" content_type="document" module_srls="<?php echo $__Context->layout_info->main_middle_content_widget2 ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="30" content_cut_size="50" option_view="title,regdate,thumbnail,content" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" show_category="Y" show_icon="Y" duration_new="24" order_target="list_order" order_type="asc" thumbnail_type="crop" map_provider="naver" shopintro_extra="N" />
          </div><?php } ?>
          <?php if($__Context->layout_info->main_middle_content){ ?><div class="main_middle_content" style="position:relative; width:326px; height:35px; margin:0px 20px; overflow:hidden; line-height:35px; font-weight:bold; text-align:center; background:#eee;">
            <?php echo $__Context->layout_info->main_middle_content ?>
          </div><?php } ?>
        </td>
        <td width="255" align="left" valign="top" class="main_right">
          <?php if($__Context->layout_info->main_right_content_widget1){ ?><div class="main_right_content_widget1"  style="margin-left:20px;">우측컨텐츠<br>
            <img class="zbxe_widget_output" widget="content_xenara" skin="widget_content_biz_layout_v1_0_w2" colorset="default" content_type="document" module_srls="<?php echo $__Context->layout_info->main_right_content_widget1 ?>" list_type="image_title_content" tab_type="tab_top" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="30" content_cut_size="100" option_view="title,regdate,thumbnail,content" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" show_category="Y" show_icon="Y" duration_new="24" order_target="list_order" order_type="asc" thumbnail_type="crop" thumbnail_width="110" thumbnail_height="75" map_provider="naver" shopintro_extra="N" />
          </div><?php } ?>
        </td>
      </tr></tbody></table>
      </div>
    <?php }else{ ?>
      <table border="0" cellspacing="0" style="position:relative; width:100%;"><tbody><tr><td align="left" style="padding:0px; margin:0px;">
        <div id="content" class="content">
          <?php echo $__Context->content ?>
        </div>
      </td></tr></tbody></table>
    <?php } ?>
  <?php } ?>
  <?php if($__Context->footer_menu1->list){ ?>
  <div id="foot">
    <div class="footer_menu">
      <?php  $__Context->idx = 1 ?>
		  <ul class="first_menu">
      <?php if($__Context->footer_menu1->list&&count($__Context->footer_menu1->list))foreach($__Context->footer_menu1->list as $__Context->key => $__Context->val){ ?>
        <?php if($__Context->val['selected']){ ?>
          <?php  $__Context->footer_menu1_1st = $__Context->val ?>
        <?php } ?>
        <li class="first_list first_list<?php echo $__Context->idx;
if($__Context->val['selected']){ ?> on<?php } ?>">
          <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
        </li>
        <?php  $__Context->idx++ ?>
      <?php } ?>
		  </ul>
      <?php if($__Context->layout_info->footer_menu_right_content){ ?><div class="footer_menu_right_content">
        <?php echo $__Context->layout_info->footer_menu_right_content ?>
      </div><?php } ?>
    </div>
  </div>
  <?php } ?>
  <div id="copy">
	  <div class="footer_copyright">
      <?php echo $__Context->layout_info->footer_copyright ?>
	  </div>
  </div>
</div>
<?php if($__Context->layout_info->show_popcheck!='N'){ ?>
<div class="popcheck_content_wrap" style="position:absolute; width:100%; top:0px; left:0px; display:none;">
  <div class="popcheck_content_wrap2" style="position:relative; width:980px; margin:0px auto;">
    <div class="popcheck_content" style="position:absolute; top:200px; left:0px; width:300px; padding:10px 10px 45px 10px; overflow:hidden; border:2px solid #ccc; background:#fff; z-index:9999;">
      <?php if($__Context->layout_info->popcheck_image){ ?><a <?php if($__Context->layout_info->popcheck_image_url){ ?>href="<?php echo $__Context->layout_info->popcheck_image_url ?>"<?php }else{ ?>href="#" onclick="return false;"<?php } ?> style="display:block;"><img src="<?php echo $__Context->layout_info->popcheck_image ?>" style="width:300px;" /></a><?php } ?>
      <?php if($__Context->layout_info->popcheck_content){ ?><div class="content_area">
        <?php echo $__Context->layout_info->popcheck_content ?>
      </div><?php } ?>
      <form name="popcheck_content_close_form" class="close_form"style="position:absolute; bottom:10px; width:280px; padding:5px 10px; color:#fff; font-weight:bold; text-align:center; background:#000; display:block;"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /> 
        <input type=CHECKBOX name="popcheck_content_close" value="" onclick="closePopcheckContent(); return false;"> 다시 열지 않음
      </form>
    </div>
  </div>
</div>
<?php } ?>
<?php if($__Context->layout_info->quick_left_content || $__Context->layout_info->quick_right_content){ ?>
<div class="quick_content_wrapper">
  <div class="quick_content">
  <?php if($__Context->layout_info->quick_left_content){ ?>
    <?php  $__Context->qcl_width = 132 ?>
    <?php if($__Context->layout_info->quick_left_content_width){ ?>
      <?php  $__Context->qcl_width = $__Context->layout_info->quick_left_content_width ?>
    <?php } ?>
    <?php  $__Context->qcl_left = -($__Context->qcl_width+10) ?>
    <?php  $__Context->qcl_top = 80 ?>
    <?php if($__Context->layout_info->quick_left_content_ptop){ ?>
      <?php  $__Context->qcl_top = $__Context->layout_info->quick_left_content_ptop ?>
    <?php } ?>
    <div class="quick_left_content" style="top:<?php echo $__Context->qcl_top ?>px; left:<?php echo $__Context->qcl_left ?>px; width:<?php echo $__Context->qcl_width ?>px;">
      <?php echo $__Context->layout_info->quick_left_content ?>
    </div>
  <?php } ?>
  <?php if($__Context->layout_info->quick_right_content){ ?>
    <?php  $__Context->qcr_width = 132 ?>
    <?php if($__Context->layout_info->quick_right_content_width){ ?>
      <?php  $__Context->qcr_width = $__Context->layout_info->quick_right_content_width ?>
    <?php } ?>
    <?php  $__Context->qcr_top = 80 ?>
    <?php if($__Context->layout_info->quick_right_content_ptop){ ?>
      <?php  $__Context->qcr_top = $__Context->layout_info->quick_right_content_ptop ?>
    <?php } ?>
    <div class="quick_right_content" style="top:<?php echo $__Context->qcr_top ?>px; right:-<?php echo $__Context->qcr_width+10 ?>px; width:<?php echo $__Context->qcr_width ?>px;">
      <?php echo $__Context->layout_info->quick_right_content ?>
    </div>
  <?php } ?>
  </div>
</div>
<?php } ?>
<script>
//팝체크영역 설정 스크립트
<?php if($__Context->layout_info->show_popcheck!='N'){ ?>
function setCookie(c_name,value,exdays){
  var exdate=new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name){
  var i,x,y,ARRcookies=document.cookie.split(";");
  for (i=0;i<ARRcookies.length;i++){
    x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
    y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
    x=x.replace(/^\s+|\s+$/g,"");
    if (x==c_name){
      return unescape(y);
    }
  }
}
function closePopcheckContent(){
  if(document.popcheck_content_close_form.popcheck_content_close.checked){
    setCookie("biz_layout_v1_0", "done", 1);
    jQuery('.popcheck_content_wrap').fadeOut(500);
  }
}
jQuery(document).ready(function(){
  if (getCookie("biz_layout_v1_0") != "done"){
   	setTimeout(function(){
    	jQuery('.popcheck_content_wrap').fadeIn(500);
    }, 1000);
  }
});
<?php } ?>
jQuery(document).ready(function(){
  //상단 메뉴효과
  jQuery('#info').hide();
	jQuery('#head_other .header_menu').click(function(){
	  jQuery('#info').slideToggle();
	});
	jQuery('#info .button').hover(function(){
		jQuery(this).addClass('hover');
  }, function(){
		jQuery(this).removeClass('hover');
  });
  <?php if($__Context->layout_info->quick_content_scroll_type=='all'){ ?>
  // Quick Content 전체 스크롤
  var currentTop = parseInt(jQuery('.quick_content').css("top"));
	jQuery(window).scroll(function() {
    setTimeout(function(){
  		jQuery('.quick_content').stop().animate({
    	  top: jQuery(window).scrollTop()+currentTop+"px"
      }, 500);
    }, 1000);
 	});
  <?php }else if($__Context->layout_info->quick_content_scroll_type=='left'){ ?>
  // Quick Content 좌측 스크롤
  var currentTop = parseInt(jQuery('.quick_left_content').css("top"));
	jQuery(window).scroll(function() {
    setTimeout(function(){
  		jQuery('.quick_left_content').stop().animate({
	  	  top: jQuery(window).scrollTop()+currentTop+"px"
		  }, 500);
    }, 1000);
	});
  <?php }else if($__Context->layout_info->quick_content_scroll_type=='right'){ ?>
  // Quick Content 우측 스크롤
  var currentTop = parseInt(jQuery('.quick_right_content').css("top"));
	jQuery(window).scroll(function() {
    setTimeout(function(){
  		jQuery('.quick_right_content').stop().animate({
	  	  top: jQuery(window).scrollTop()+currentTop+"px"
		  }, 500);
    }, 1000);
	});
  <?php } ?>
});
</script>