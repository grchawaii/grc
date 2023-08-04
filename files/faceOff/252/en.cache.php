<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'layout_XENARA BIZ LAYOUT_v1.0';
$layout_info->type = NULL;
$layout_info->path = './layouts/layout_XENARA BIZ LAYOUT_v1.0/';
$layout_info->title = 'Biz Layout Skin v1.0';
$layout_info->description = '만든이 : XENARA(Kim Ki Seok)';
$layout_info->version = '1.0';
$layout_info->date = '20111200';
$layout_info->homepage = 'http://xenara.co.cc';
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'XENARA';
$layout_info->author[0]->email_address = 'kolaskks@naver.com';
$layout_info->author[0]->homepage = 'http://xenara.co.cc';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->layout_type = new stdClass;
$layout_info->extra_var->layout_type->group = '레이아웃 공통부분';
$layout_info->extra_var->layout_type->title = 'layout_type';
$layout_info->extra_var->layout_type->type = 'select';
$layout_info->extra_var->layout_type->value = $vars->layout_type;
$layout_info->extra_var->layout_type->description = 'layout_type을 선택해주세요.';
$layout_info->extra_var->layout_type->options = array();
$layout_info->extra_var->layout_type->options['main'] = new stdClass;
$layout_info->extra_var->layout_type->options['main']->val = '메인 레이아웃';
$layout_info->extra_var->layout_type->options['sub'] = new stdClass;
$layout_info->extra_var->layout_type->options['sub']->val = '서브 레이아웃';
$layout_info->extra_var->show_sns_login = new stdClass;
$layout_info->extra_var->show_sns_login->group = '레이아웃 공통부분';
$layout_info->extra_var->show_sns_login->title = 'show_sns_login';
$layout_info->extra_var->show_sns_login->type = 'select';
$layout_info->extra_var->show_sns_login->value = $vars->show_sns_login;
$layout_info->extra_var->show_sns_login->description = '소셜로그인 출력유무를 선택해주세요. socialXE 관련 자료가 설치되어 있어야 합니다.';
$layout_info->extra_var->show_sns_login->options = array();
$layout_info->extra_var->show_sns_login->options['Y'] = new stdClass;
$layout_info->extra_var->show_sns_login->options['Y']->val = '출력';
$layout_info->extra_var->show_sns_login->options['N'] = new stdClass;
$layout_info->extra_var->show_sns_login->options['N']->val = '출력안함';
$layout_info->extra_var->homepage_url = new stdClass;
$layout_info->extra_var->homepage_url->group = '레이아웃 공통부분';
$layout_info->extra_var->homepage_url->title = 'homepage_url';
$layout_info->extra_var->homepage_url->type = 'text';
$layout_info->extra_var->homepage_url->value = $vars->homepage_url;
$layout_info->extra_var->homepage_url->description = 'homepage_url을 입력해 주세요.';
$layout_info->extra_var->header_logo = new stdClass;
$layout_info->extra_var->header_logo->group = '레이아웃 공통부분';
$layout_info->extra_var->header_logo->title = 'header_logo';
$layout_info->extra_var->header_logo->type = 'image';
$layout_info->extra_var->header_logo->value = $vars->header_logo;
$layout_info->extra_var->header_logo->description = 'header_logo 이미지를 입력하세요.(181 x 56)';
$layout_info->extra_var->facebook_url = new stdClass;
$layout_info->extra_var->facebook_url->group = '레이아웃 공통부분';
$layout_info->extra_var->facebook_url->title = 'facebook_url';
$layout_info->extra_var->facebook_url->type = 'text';
$layout_info->extra_var->facebook_url->value = $vars->facebook_url;
$layout_info->extra_var->facebook_url->description = 'facebook_url을 입력해 주세요.';
$layout_info->extra_var->facebook_url = new stdClass;
$layout_info->extra_var->facebook_url->group = '레이아웃 공통부분';
$layout_info->extra_var->facebook_url->title = 'facebook_url';
$layout_info->extra_var->facebook_url->type = 'text';
$layout_info->extra_var->facebook_url->value = $vars->facebook_url;
$layout_info->extra_var->facebook_url->description = 'facebook_url을 입력해 주세요.';
$layout_info->extra_var->twitter_url = new stdClass;
$layout_info->extra_var->twitter_url->group = '레이아웃 공통부분';
$layout_info->extra_var->twitter_url->title = 'twitter_url';
$layout_info->extra_var->twitter_url->type = 'text';
$layout_info->extra_var->twitter_url->value = $vars->twitter_url;
$layout_info->extra_var->twitter_url->description = 'twitter_url을 입력해 주세요.';
$layout_info->extra_var->blog_url = new stdClass;
$layout_info->extra_var->blog_url->group = '레이아웃 공통부분';
$layout_info->extra_var->blog_url->title = 'blog_url';
$layout_info->extra_var->blog_url->type = 'text';
$layout_info->extra_var->blog_url->value = $vars->blog_url;
$layout_info->extra_var->blog_url->description = 'blog_url을 입력해 주세요.';
$layout_info->extra_var->footer_menu_right_content = new stdClass;
$layout_info->extra_var->footer_menu_right_content->group = '레이아웃 공통부분';
$layout_info->extra_var->footer_menu_right_content->title = 'footer_menu_right_content';
$layout_info->extra_var->footer_menu_right_content->type = 'text';
$layout_info->extra_var->footer_menu_right_content->value = $vars->footer_menu_right_content;
$layout_info->extra_var->footer_menu_right_content->description = 'footer_menu_right_content를 입력해 주세요.';
$layout_info->extra_var->footer_copyright = new stdClass;
$layout_info->extra_var->footer_copyright->group = '레이아웃 공통부분';
$layout_info->extra_var->footer_copyright->title = 'footer_copyright';
$layout_info->extra_var->footer_copyright->type = 'textarea';
$layout_info->extra_var->footer_copyright->value = $vars->footer_copyright;
$layout_info->extra_var->footer_copyright->description = 'footer_copyright 내용을 입력해 주세요. XHTML,JS,CSS 등 입력이 가능합니다.';
$layout_info->extra_var->show_popcheck = new stdClass;
$layout_info->extra_var->show_popcheck->group = '레이아웃 공통부분';
$layout_info->extra_var->show_popcheck->title = 'show_popcheck';
$layout_info->extra_var->show_popcheck->type = 'select';
$layout_info->extra_var->show_popcheck->value = $vars->show_popcheck;
$layout_info->extra_var->show_popcheck->description = 'popcheck 출력유무를 선택해주세요.';
$layout_info->extra_var->show_popcheck->options = array();
$layout_info->extra_var->show_popcheck->options['Y'] = new stdClass;
$layout_info->extra_var->show_popcheck->options['Y']->val = '출력';
$layout_info->extra_var->show_popcheck->options['N'] = new stdClass;
$layout_info->extra_var->show_popcheck->options['N']->val = '출력안함';
$layout_info->extra_var->popcheck_image = new stdClass;
$layout_info->extra_var->popcheck_image->group = '레이아웃 공통부분';
$layout_info->extra_var->popcheck_image->title = 'popcheck_image';
$layout_info->extra_var->popcheck_image->type = 'image';
$layout_info->extra_var->popcheck_image->value = $vars->popcheck_image;
$layout_info->extra_var->popcheck_image->description = 'popcheck_image 이미지를 입력하세요.(가로크기 300)';
$layout_info->extra_var->popcheck_image_url = new stdClass;
$layout_info->extra_var->popcheck_image_url->group = '레이아웃 공통부분';
$layout_info->extra_var->popcheck_image_url->title = 'popcheck_image_url';
$layout_info->extra_var->popcheck_image_url->type = 'text';
$layout_info->extra_var->popcheck_image_url->value = $vars->popcheck_image_url;
$layout_info->extra_var->popcheck_image_url->description = 'popcheck_image_url을 입력하세요.';
$layout_info->extra_var->popcheck_content = new stdClass;
$layout_info->extra_var->popcheck_content->group = '레이아웃 공통부분';
$layout_info->extra_var->popcheck_content->title = 'popcheck_content';
$layout_info->extra_var->popcheck_content->type = 'textarea';
$layout_info->extra_var->popcheck_content->value = $vars->popcheck_content;
$layout_info->extra_var->popcheck_content->description = 'popcheck_content 내용을 입력하세요. WIDGETCODE,HTML,JS,CSS 등 입력이 가능합니다.';
$layout_info->extra_var->main_content_type = new stdClass;
$layout_info->extra_var->main_content_type->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_content_type->title = 'main_content_type';
$layout_info->extra_var->main_content_type->type = 'select';
$layout_info->extra_var->main_content_type->value = $vars->main_content_type;
$layout_info->extra_var->main_content_type->description = 'main_content_type 을 선택하세요. 고정페이지형일 경우, 게시판번호등을 입력하여 정해진 페이지를 출력할 수 있습니다.';
$layout_info->extra_var->main_content_type->options = array();
$layout_info->extra_var->main_content_type->options['fix_content'] = new stdClass;
$layout_info->extra_var->main_content_type->options['fix_content']->val = '고정페이지형';
$layout_info->extra_var->main_content_type->options['content'] = new stdClass;
$layout_info->extra_var->main_content_type->options['content']->val = '페이지설정형';
$layout_info->extra_var->main_header_content_widget1 = new stdClass;
$layout_info->extra_var->main_header_content_widget1->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_header_content_widget1->title = 'main_header_content_widget1(content_skin1)(고정페이지형)';
$layout_info->extra_var->main_header_content_widget1->type = 'text';
$layout_info->extra_var->main_header_content_widget1->value = $vars->main_header_content_widget1;
$layout_info->extra_var->main_header_content_widget1->description = 'main_header_content_widget1에 출력될 게시판번호(module_srl)을 입력하세요. 여러개일경우 콤마(,)로 구분하여 입력하세요.';
$layout_info->extra_var->main_left_content = new stdClass;
$layout_info->extra_var->main_left_content->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_left_content->title = 'main_left_content(고정페이지형)';
$layout_info->extra_var->main_left_content->type = 'textarea';
$layout_info->extra_var->main_left_content->value = $vars->main_left_content;
$layout_info->extra_var->main_left_content->description = 'main_left_content 내용을 입력해 주세요.';
$layout_info->extra_var->main_middle_content_widget1 = new stdClass;
$layout_info->extra_var->main_middle_content_widget1->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_middle_content_widget1->title = 'main_middle_content_widget1(content_skin2)(고정페이지형)';
$layout_info->extra_var->main_middle_content_widget1->type = 'text';
$layout_info->extra_var->main_middle_content_widget1->value = $vars->main_middle_content_widget1;
$layout_info->extra_var->main_middle_content_widget1->description = 'main_middle_content_widget1에 출력될 게시판번호(module_srl)을 입력하세요. 여러개일경우 콤마(,)로 구분하여 입력하세요.';
$layout_info->extra_var->main_middle_content_widget2 = new stdClass;
$layout_info->extra_var->main_middle_content_widget2->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_middle_content_widget2->title = 'main_middle_content_widget2(content_skin2)(고정페이지형)';
$layout_info->extra_var->main_middle_content_widget2->type = 'text';
$layout_info->extra_var->main_middle_content_widget2->value = $vars->main_middle_content_widget2;
$layout_info->extra_var->main_middle_content_widget2->description = 'main_middle_content_widget2에 출력될 게시판번호(module_srl)을 입력하세요. 여러개일경우 콤마(,)로 구분하여 입력하세요.';
$layout_info->extra_var->main_middle_content = new stdClass;
$layout_info->extra_var->main_middle_content->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_middle_content->title = 'main_middle_content(고정페이지형)';
$layout_info->extra_var->main_middle_content->type = 'textarea';
$layout_info->extra_var->main_middle_content->value = $vars->main_middle_content;
$layout_info->extra_var->main_middle_content->description = 'main_middle_content 내용을 입력해 주세요.';
$layout_info->extra_var->main_right_content_widget1 = new stdClass;
$layout_info->extra_var->main_right_content_widget1->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->main_right_content_widget1->title = 'main_right_content_widget1(content_skin2)(고정페이지형)';
$layout_info->extra_var->main_right_content_widget1->type = 'text';
$layout_info->extra_var->main_right_content_widget1->value = $vars->main_right_content_widget1;
$layout_info->extra_var->main_right_content_widget1->description = 'main_right_content_widget1에 출력될 게시판번호(module_srl)을 입력하세요. 여러개일경우 콤마(,)로 구분하여 입력하세요.';
$layout_info->extra_var->header_content1 = new stdClass;
$layout_info->extra_var->header_content1->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->header_content1->title = 'header_content1(페이지설정형)';
$layout_info->extra_var->header_content1->type = 'textarea';
$layout_info->extra_var->header_content1->value = $vars->header_content1;
$layout_info->extra_var->header_content1->description = 'header_content1 내용을 입력해 주세요.';
$layout_info->extra_var->header_content1_background = new stdClass;
$layout_info->extra_var->header_content1_background->group = '메인 레이아웃 설정부분';
$layout_info->extra_var->header_content1_background->title = 'header_content1_background(페이지설정형)';
$layout_info->extra_var->header_content1_background->type = 'image';
$layout_info->extra_var->header_content1_background->value = $vars->header_content1_background;
$layout_info->extra_var->header_content1_background->description = 'header_content1_background 이미지를 입력하세요.(2000 x 330)';
$layout_info->extra_var->header_subcontent1 = new stdClass;
$layout_info->extra_var->header_subcontent1->group = '서브 레이아웃 설정부분';
$layout_info->extra_var->header_subcontent1->title = 'header_subcontent1';
$layout_info->extra_var->header_subcontent1->type = 'textarea';
$layout_info->extra_var->header_subcontent1->value = $vars->header_subcontent1;
$layout_info->extra_var->header_subcontent1->description = 'header_subcontent1 내용을 입력해 주세요.';
$layout_info->extra_var->header_subcontent1_background = new stdClass;
$layout_info->extra_var->header_subcontent1_background->group = '서브 레이아웃 설정부분';
$layout_info->extra_var->header_subcontent1_background->title = 'header_subcontent1_background';
$layout_info->extra_var->header_subcontent1_background->type = 'image';
$layout_info->extra_var->header_subcontent1_background->value = $vars->header_subcontent1_background;
$layout_info->extra_var->header_subcontent1_background->description = 'header_subcontent1_background 이미지를 입력하세요.(1400 x 175)';
$layout_info->extra_var->left_subcontent1 = new stdClass;
$layout_info->extra_var->left_subcontent1->group = '서브 레이아웃 설정부분';
$layout_info->extra_var->left_subcontent1->title = 'left_subcontent1';
$layout_info->extra_var->left_subcontent1->type = 'textarea';
$layout_info->extra_var->left_subcontent1->value = $vars->left_subcontent1;
$layout_info->extra_var->left_subcontent1->description = 'left_subcontent1 내용을 입력해 주세요.';
$layout_info->extra_var->left_menu1_inherit_type = new stdClass;
$layout_info->extra_var->left_menu1_inherit_type->group = '서브 레이아웃 설정부분';
$layout_info->extra_var->left_menu1_inherit_type->title = 'left_menu1_inherit_type';
$layout_info->extra_var->left_menu1_inherit_type->type = 'select';
$layout_info->extra_var->left_menu1_inherit_type->value = $vars->left_menu1_inherit_type;
$layout_info->extra_var->left_menu1_inherit_type->description = 'left_menu1 상속유무를 선택해주세요. \'상속\' 선택시 header_menu1를 상속받습니다.';
$layout_info->extra_var->left_menu1_inherit_type->options = array();
$layout_info->extra_var->left_menu1_inherit_type->options['Y'] = new stdClass;
$layout_info->extra_var->left_menu1_inherit_type->options['Y']->val = '상속';
$layout_info->extra_var->left_menu1_inherit_type->options['N'] = new stdClass;
$layout_info->extra_var->left_menu1_inherit_type->options['N']->val = '상속안함';
$layout_info->extra_var->quick_left_content = new stdClass;
$layout_info->extra_var->quick_left_content->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_left_content->title = 'quick_left_content';
$layout_info->extra_var->quick_left_content->type = 'textarea';
$layout_info->extra_var->quick_left_content->value = $vars->quick_left_content;
$layout_info->extra_var->quick_left_content->description = 'quick_left_content 내용을 입력하세요. WIDGETCODE,HTML,JS,CSS 등 입력이 가능합니다.';
$layout_info->extra_var->quick_left_content_width = new stdClass;
$layout_info->extra_var->quick_left_content_width->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_left_content_width->title = 'quick_left_content_width';
$layout_info->extra_var->quick_left_content_width->type = 'text';
$layout_info->extra_var->quick_left_content_width->value = $vars->quick_left_content_width;
$layout_info->extra_var->quick_left_content_width->description = 'quick_left_content의 가로크기를 입력하세요. 숫자만 입력하세요. (기본 132)';
$layout_info->extra_var->quick_left_content_ptop = new stdClass;
$layout_info->extra_var->quick_left_content_ptop->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_left_content_ptop->title = 'quick_left_content_ptop';
$layout_info->extra_var->quick_left_content_ptop->type = 'text';
$layout_info->extra_var->quick_left_content_ptop->value = $vars->quick_left_content_ptop;
$layout_info->extra_var->quick_left_content_ptop->description = 'quick_left_content의 상단위치를 입력하세요. 숫자만 입력하세요. (기본 80)';
$layout_info->extra_var->quick_right_content = new stdClass;
$layout_info->extra_var->quick_right_content->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_right_content->title = 'quick_right_content';
$layout_info->extra_var->quick_right_content->type = 'textarea';
$layout_info->extra_var->quick_right_content->value = $vars->quick_right_content;
$layout_info->extra_var->quick_right_content->description = 'quick_right_content 내용을 입력하세요. WIDGETCODE,HTML,JS,CSS 등 입력이 가능합니다.';
$layout_info->extra_var->quick_right_content_width = new stdClass;
$layout_info->extra_var->quick_right_content_width->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_right_content_width->title = 'quick_right_content_width';
$layout_info->extra_var->quick_right_content_width->type = 'text';
$layout_info->extra_var->quick_right_content_width->value = $vars->quick_right_content_width;
$layout_info->extra_var->quick_right_content_width->description = 'quick_right_content의 가로크기를 입력하세요. 숫자만 입력하세요. (기본 132)';
$layout_info->extra_var->quick_right_content_ptop = new stdClass;
$layout_info->extra_var->quick_right_content_ptop->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_right_content_ptop->title = 'quick_right_content_ptop';
$layout_info->extra_var->quick_right_content_ptop->type = 'text';
$layout_info->extra_var->quick_right_content_ptop->value = $vars->quick_right_content_ptop;
$layout_info->extra_var->quick_right_content_ptop->description = 'quick_right_content의 상단위치를 입력하세요. 숫자만 입력하세요. (기본 80)';
$layout_info->extra_var->quick_content_scroll_type = new stdClass;
$layout_info->extra_var->quick_content_scroll_type->group = '스크롤 퀵메뉴 설정';
$layout_info->extra_var->quick_content_scroll_type->title = 'quick_content_scroll_type';
$layout_info->extra_var->quick_content_scroll_type->type = 'select';
$layout_info->extra_var->quick_content_scroll_type->value = $vars->quick_content_scroll_type;
$layout_info->extra_var->quick_content_scroll_type->description = 'quick_content_scroll_type을 선택하세요.';
$layout_info->extra_var->quick_content_scroll_type->options = array();
$layout_info->extra_var->quick_content_scroll_type->options['all'] = new stdClass;
$layout_info->extra_var->quick_content_scroll_type->options['all']->val = '전체적용';
$layout_info->extra_var->quick_content_scroll_type->options['left'] = new stdClass;
$layout_info->extra_var->quick_content_scroll_type->options['left']->val = '좌측만 적용';
$layout_info->extra_var->quick_content_scroll_type->options['right'] = new stdClass;
$layout_info->extra_var->quick_content_scroll_type->options['right']->val = '우측만 적용';
$layout_info->extra_var->quick_content_scroll_type->options['none'] = new stdClass;
$layout_info->extra_var->quick_content_scroll_type->options['none']->val = '적용하지 않음';
$layout_info->extra_var_count = 34;
$layout_info->menu_count = 5;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'header_menu1';
$layout_info->menu->header_menu1 = new stdClass;
$layout_info->menu->header_menu1->name = 'header_menu1';
$layout_info->menu->header_menu1->title = 'header_menu1';
$layout_info->menu->header_menu1->maxdepth = '3';
$layout_info->menu->header_menu1->menu_srl = $vars->header_menu1;
$layout_info->menu->header_menu1->xml_file = "./files/cache/menu/".$vars->header_menu1.".xml.php";
$layout_info->menu->header_menu1->php_file = "./files/cache/menu/".$vars->header_menu1.".php";
$layout_info->default_menu = 'left_menu1';
$layout_info->menu->left_menu1 = new stdClass;
$layout_info->menu->left_menu1->name = 'left_menu1';
$layout_info->menu->left_menu1->title = 'left_menu1';
$layout_info->menu->left_menu1->maxdepth = '3';
$layout_info->menu->left_menu1->menu_srl = $vars->left_menu1;
$layout_info->menu->left_menu1->xml_file = "./files/cache/menu/".$vars->left_menu1.".xml.php";
$layout_info->menu->left_menu1->php_file = "./files/cache/menu/".$vars->left_menu1.".php";
$layout_info->default_menu = 'footer_menu1';
$layout_info->menu->footer_menu1 = new stdClass;
$layout_info->menu->footer_menu1->name = 'footer_menu1';
$layout_info->menu->footer_menu1->title = 'footer_menu1';
$layout_info->menu->footer_menu1->maxdepth = '3';
$layout_info->menu->footer_menu1->menu_srl = $vars->footer_menu1;
$layout_info->menu->footer_menu1->xml_file = "./files/cache/menu/".$vars->footer_menu1.".xml.php";
$layout_info->menu->footer_menu1->php_file = "./files/cache/menu/".$vars->footer_menu1.".php";
$layout_info->default_menu = 'quick_menu1';
$layout_info->menu->quick_menu1 = new stdClass;
$layout_info->menu->quick_menu1->name = 'quick_menu1';
$layout_info->menu->quick_menu1->title = 'quick_menu1';
$layout_info->menu->quick_menu1->maxdepth = '3';
$layout_info->menu->quick_menu1->menu_srl = $vars->quick_menu1;
$layout_info->menu->quick_menu1->xml_file = "./files/cache/menu/".$vars->quick_menu1.".xml.php";
$layout_info->menu->quick_menu1->php_file = "./files/cache/menu/".$vars->quick_menu1.".php";
$layout_info->default_menu = 'main_banner_menu';
$layout_info->menu->main_banner_menu = new stdClass;
$layout_info->menu->main_banner_menu->name = 'main_banner_menu';
$layout_info->menu->main_banner_menu->title = 'main_banner_menu(고정페이지)';
$layout_info->menu->main_banner_menu->maxdepth = '3';
$layout_info->menu->main_banner_menu->menu_srl = $vars->main_banner_menu;
$layout_info->menu->main_banner_menu->xml_file = "./files/cache/menu/".$vars->main_banner_menu.".xml.php";
$layout_info->menu->main_banner_menu->php_file = "./files/cache/menu/".$vars->main_banner_menu.".php";