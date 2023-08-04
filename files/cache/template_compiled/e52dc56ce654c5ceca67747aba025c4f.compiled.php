<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/global/js/xe_official.js--><?php $__tmp=array('layouts/global/js/xe_official.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/global/css/default.css--><?php $__tmp=array('layouts/global/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>		
	<div class="xe <?php echo $__Context->layout_info->layout_style ?>">
		<div class="inner_xe">
			<div class="HeaderTop">
				<div class="inner_HeaderTop">		
					<ul class="account">
						<li class="li_account"><a class="home_account" href="<?php echo getSiteUrl() ?>">HOME</a></li>
						<?php if($__Context->is_logged){ ?>
						<?php if($__Context->logged_info->is_admin=="Y"){ ?>
						<li class="li_account"><a class="management_account" href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->lang->cmd_management ?></a></li><?php } ?>
						<li class="li_account"><a class="logout_account" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
						<li class="li_account"><a class="member_account" href="<?php echo getUrl('act','dispMemberInfo','mid', mission_member) ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
						<?php } ?>
						<?php if(!$__Context->is_logged){ ?>								
						<li class="li_account"><a class="login_account" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>				
						<li class="li_account"><a class="signup_account" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a>
						</li>
						<?php } ?>
						<li class="li_account lang_account"><span class="<?php echo $__Context->lang_type ?>_account"><a href="#"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a></span>
							<div class="wrap_languageList act_acc">
								<ul class="languageList png_bg">
									<?php if($__Context->key!= $__Context->lang_type){;
if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li><button type="button" class="<?php echo $__Context->key ?>_languageList" title="" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><span><?php echo $__Context->val ?></span></button></li><?php }} ?>
								</ul>
					
							</div>
						</li>				
					</ul>
				</div>
			</div>
			<div class="header">
				<h1 style="margin-top:-45px;">
					<a href="<?php echo getSiteUrl() ?>"><img src="/layouts/global/img/logo.jpg"  alt="글로벌 리바이벌" /></a>	
				</h1>
				
				<div class="gnb menu_X TitleFont <?php echo $__Context->lang_type ?>_gnb">
					<ul id="menu" class="main_menu">
	
						<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight first_li"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="first_li"<?php } ?>>
							<a class="first_a before_" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="wrap_span"><span class="in_span in_span<?php echo $__Context->_idx ?>"><?php echo $__Context->val1['text'] ?></span></span></a>
							<?php if($__Context->val1['list']){ ?><div  class="sub1 sub_div">
								<ul>
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li>
										<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active_a"<?php } ?> <?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
											<?php echo $__Context->val2['text'] ?>
										</a>
									</li><?php }} ?>
								</ul>
							</div><?php } ?>
						</li><?php }} ?>		
					</ul>
				</div>
			</div>
			<div class="body">
				<?php if($__Context->layout_info->layout_style=='ec'||$__Context->layout_info->layout_style=='ece'){ ?><div class="e1 lnb">
					<?php if($__Context->layout_info->layout_style=='ece'){ ?><div class="lnb_widget">
						<div class="in_lnb_widget">
							<a href="<?php echo $__Context->layout_info->preach ?>"><img src="/layouts/global/img/preach.jpg" width="240" height="227" alt="설교안내" /></a>
						</div>
						<div class="in_lnb_widget">
							<a href="<?php echo $__Context->layout_info->worship ?>"><img src="/layouts/global/img/worship.jpg" width="240" height="195" alt="예배안내" /></a>
						</div>
						<div class="in_lnb_widget">
							<a href="/xe/Praise_Worship"><img src="<?php echo $__Context->layout_info->banner_img1 ?>"  alt="<?php echo $__Context->layout_info->banner_alt1 ?>" /></a>
						</div>
						<div class="in_lnb_widget">
							<a href="<?php echo $__Context->layout_info->banner_url2 ?>"><img src="<?php echo $__Context->layout_info->banner_img2 ?>"  alt="<?php echo $__Context->layout_info->banner_alt2 ?>" /></a>
						</div>
					</div><?php } ?>
					<?php if($__Context->layout_info->layout_style=='ec'){ ?><div class="lnb_wrap">
						<div class="lnb_menu">
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h2 class="sub_title"><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></h2><?php }} ?>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul class="locNav">
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if(!$__Context->val2['selected']){ ?> class="first_lnb_li"<?php };
if($__Context->val2['selected']){ ?> class="active_li first_lnb_li"<?php } ?> ><a href="<?php echo $__Context->val2['href'] ?>" <?php if($__Context->val2['selected']){ ?> class="active active_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span><?php echo $__Context->val2['text'] ?></span></a>
									<?php if($__Context->val2['list']){ ?><ul class="lnbUl">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="onSeconLi png_bg"<?php } ?>>
											<a<?php if(!$__Context->val3['selected']){ ?> class="Ccolor"<?php };
if($__Context->val3['selected']){ ?> class="Ccolor active"<?php } ?> href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span><?php echo $__Context->val3['text'] ?></span></a>
										</li><?php } ?>
									</ul><?php } ?>
								</li><?php } ?>
							</ul><?php }} ?>
						</div>
					</div><?php } ?>
				</div><?php } ?>
				<div class="content xe_content">
					<!-- depth 1 -->
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['selected']){;
$__Context->menu_depth1 = $__Context->val;
}} ?>
					<!-- depth 2 -->
					<?php if($__Context->menu_depth1['list']&&count($__Context->menu_depth1['list']))foreach($__Context->menu_depth1['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth1){;
$__Context->menu_depth2 = $__Context->val;
}} ?>
					<!-- depth 3 -->
					<?php if($__Context->menu_depth2['list']&&count($__Context->menu_depth2['list']))foreach($__Context->menu_depth2['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth2){;
$__Context->menu_depth3 = $__Context->val;
}} ?>
					<?php if($__Context->menu_depth2){ ?>
					<?php if($__Context->layout_info->layout_style=='ec'){ ?><div class="wrap_breadclumb">
						<h2>
						<?php if($__Context->menu_depth2&&!$__Context->menu_depth3){ ?>
							<?php echo $__Context->menu_depth2['link'] ?>
						<?php } ?>
						<?php if($__Context->menu_depth3){ ?>
							<?php echo $__Context->menu_depth3['link'] ?>
						<?php } ?>
						</h2>
						
					</div><?php } ?>
					
					<?php } ?>
					
					<div class="in_content"><?php echo $__Context->content ?></div>
				</div>
				
				<?php if($__Context->layout_info->layout_style==ece){ ?><div class="e2">
					<div class="lnb_widget">
						<div class="in_lnb_widget gallery">
							<h2>행사겔러리</h2>
							<img class="zbxe_widget_output" widget="content" skin="global" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->gallery ?>" list_type="gallery" tab_type="none" markup_type="list" list_count="3" cols_list_count="1" page_count="1" subject_cut_size="25" option_view="thumbnail,title" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="200" thumbnail_height="120" />
							<a target="_blank" href="http://www.facebook.com/grchawaii"><img src="/layouts/global/img/facebook.gif" width="200" height="49" alt="글로벌리바이벌 페이스북 바로가기" /></a>
						</div>
					</div>
				</div><?php } ?>
			</div>
			<div class="footer">	
				<h2><a href="<?php echo getSiteUrl() ?>"><img src="/layouts/global/img/footer_logo.gif" width="203" height="60" alt="글로벌 리바이벌" /></a></h2>
				<p>
					99-860 Iwaena St, Suite 201, Aiea, HI 96701. &nbsp;&nbsp;&nbsp;Tel : 808-487-8252 &nbsp;&nbsp;&nbsp;E-mail :  <a href="mailto:amtc21c@yahoo.com" style="text-decoration:none; color:#000">amtc21c@yahoo.com</a><br>
					Counsel : 808-551-8461 &nbsp;&nbsp;&nbsp;Assistant Pastor : 808-391-5529 &nbsp;&nbsp;&nbsp;Facebook : <a href="http://www.facebook.com/grchawaii" target="_blank" style="text-decoration:none; color:#000">www.facebook.com/grchawaii</a>
					Copyright(C). 2013 GlobalRevival Church. all rights reserved.  &nbsp;&nbsp; powered by<a href="http://www.hosannaweb.net"><img src="/xe/common/img/hosanna-logo_s.jpg" border="0"align="absmiddle"></a>
				</p>
			</div>
		</div>
	</div>