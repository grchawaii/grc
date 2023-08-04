<?php if(!defined("__XE__"))exit;?>
<?php  $__Context->XE_version = __ZBXE_VERSION__;
if(!$__Context->XE_version){;
$__Context->XE_version = __XE_VERSION__;
} ?>
<?php 
$__Context->var_version = "PlannerXE123 Skin V570(".$__Context->XE_version."+".phpversion().")";
 ?>
<?php 
$__Context->linkpath = getUrl('mid',$__Context->mid,'pGanjioption',1,'offset',$__Context->offset,'pOption',$__Context->pOption,'listStyle',$__Context->listStyle,'pYear','','pMonth','','pDay','');
$__Context->skinpath = $__Context->tpl_path;// 스킨 설치 경로지정
$__Context->XE_path = getUrl('');
$__Context->obj = new stdClass;// 클리어 쿼리검색 object
$__Context->arr_plan = array();// 전역변수 처럼 작용되어 위젯, 스킨 모두에서 클리어함)
 ?>
<?php if($__Context->module_info->calendar_bgcolor == null || $__Context->module_info->calendar_bgcolor == "transparent" ){ ?>
<?php  $__Context->day_bgcolor="transparent"; ?>
<?php }else{ ?>
<?php  $__Context->day_bgcolor=$__Context->module_info->calendar_bgcolor; ?>
<?php } ?>
<?php  $__Context->day_bgcolor2="#fffacd"; ?>
<?php if(!class_exists('planner123_main')){ ?>
<?php  require_once($__Context->skinpath.'function/class.planner123_main.php'); ?>
<?php } ?>
<?php if($__Context->grant->is_admin){ ?>
<?php 
$__Context->args = new stdClass;
$__Context->args->module_srl = $__Context->module_info->module_srl;
$__Context->args->var_idx = 1;
$__Context->tmp_output = executeQuery('document.getDocumentExtraKeys', $__Context->args);
 ?>
<?php if(!$__Context->tmp_output->data->module_srl){ ?>
<?php  planner123_main::fn_install_extra_keys($__Context->module_info->module_srl); ?>
<?php } ?>
<?php } ?>
<?php if($__Context->listStyle == ''){ ?>
<?php  $__Context->listStyle = $__Context->module_info->default_style; ?>
<?php } ?>
<?php  $__Context->category_list = planner123_main::fn_get_Active_CategoryList($__Context->module_info, $__Context->category_list, '') ?>
<?php 
$__Context->server_timestamp = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
$__Context->server_offset = date("Z");
$__Context->xe_timestamp = planner123_main::fn_xetimestamp();
$__Context->xe_offset = date("Z")+zgap();
$__Context->client_offset = Context::get('offset');// url 변수로 받은 client offset
$__Context->client_timestamp = mktime(date("H"), date("i"), date("s")-date("Z")+$__Context->client_offset, date("m"), date("d"), date("Y"));
 ?>
<?php  $__Context->display_timestamp = $__Context->xe_timestamp; ?>
<?php if($__Context->client_offset == null ){ ?>
<?php  $__Context->wrk_timestamp = $__Context->display_timestamp; ?>
<?php }else{ ?>
<?php  $__Context->wrk_timestamp = $__Context->client_timestamp; ?>
<?php } ?>
<?php 
$__Context->todayYY = date("Y", $__Context->wrk_timestamp);// 당일년도
$__Context->todayMM = date("n", $__Context->wrk_timestamp);// 당일월
$__Context->todayDD = date("j", $__Context->wrk_timestamp);// 당일일
$__Context->todayWeekday = date("w", $__Context->wrk_timestamp);// 당일요일
$__Context->ind_weekly_base = $__Context->module_info->weekly_base; //주단위 출력 적용여부(0=적용 않음, 기타=주 갯수)
$__Context->firstDayOfWeek = (int)$__Context->module_info->firstDayOfWeek; //한주 시작요일(V480)
$__Context->today_stamp = mktime(0, 0, 0, $__Context->todayMM, $__Context->todayDD, $__Context->todayYY);// 날자 재계산 // 당일 0시 타임스탬프
 ?>
<?php if($__Context->firstDayOfWeek == 8){ ?>
<?php if($__Context->listStyle == 'planner_list'){ ?>
<?php  $__Context->firstDayOfWeek = $__Context->todayWeekday; //당일 요일 ?>
<?php }else{ ?>
<?php  $__Context->firstDayOfWeek = 0; //일요일 ?>
<?php } ?>
<?php } ?>
<?php  $__Context->ind_fill = ''; ?>
<?php if($__Context->pMonth != '' && $__Context->pDay ==''){ ?>
<?php 
$__Context->pDay = 1;
$__Context->ind_fill = 'Y';
 ?>
<?php } ?>
<?php if($__Context->pYear == null ){ ?>
<?php  $__Context->pYear = date("Y", $__Context->wrk_timestamp); ?>
<?php } ?>
<?php if($__Context->pMonth == null ){ ?>
<?php  $__Context->pMonth = date("n", $__Context->wrk_timestamp); ?>
<?php } ?>
<?php if($__Context->pMon == null ){ ?>
<?php  $__Context->pMon = date("F", $__Context->wrk_timestamp); ?>
<?php } ?>
<?php if($__Context->pDay == null ){ ?>
<?php 
$__Context->pDay =$__Context->todayDD;
$__Context->tmp_feb_lastday = date('t', mktime(0,0,0,$__Context->pMonth,1,$__Context->pYear));
 ?>
<?php if($__Context->pDay > $__Context->tmp_feb_lastday){ ?>
<?php  $__Context->pDay = $__Context->tmp_feb_lastday; ?>
<?php } ?>
<?php } ?>
<?php 
$__Context->pTimestamp = mktime(0, 0, 0, $__Context->pMonth, $__Context->pDay, $__Context->pYear);
$__Context->pYear =date("Y", $__Context->pTimestamp);
$__Context->pMonth =date("n", $__Context->pTimestamp);
$__Context->pDay = date("j", $__Context->pTimestamp);
$__Context->pMon =date("F", $__Context->pTimestamp);// 당월 이름
 ?>
<?php if($__Context->pOption != 'W1' && $__Context->pOption != 'W2' && $__Context->pOption != 'M'){ ?>
<?php if($__Context->ind_mobile){ ?>
<?php  $__Context->pOption = $__Context->module_info->default_view_mobile; ?>
<?php }else{ ?>
<?php  $__Context->pOption = $__Context->module_info->default_view_pc; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->pOption == null){ ?>
<?php  $__Context->pOption = "M"; ?>
<?php } ?>
<?php if($__Context->module_info->display_TimeSchedule != 'N'){ ?>
<?php  $__Context->pTimeSchedule = "Y"; ?>
<?php } ?>
<?php if($__Context->listStyle == 'planner_weekly'){ ?>
<?php 
$__Context->tmp_timestamp_01 = mktime(0, 0, 0, $__Context->pMonth, $__Context->pDay, $__Context->pYear);// 주간계획으로 추가
$__Context->pMon_short =date("M", $__Context->tmp_timestamp_01);// 주간계획으로 추가
$__Context->pWeekday =date("D", $__Context->tmp_timestamp_01);// 주간계획으로 추가
$__Context->week_count = planner123_main::fn_WeekOfYear($__Context->pMonth, $__Context->pDay, $__Context->pYear);// 주간계획(주일 수)
 ?>
<?php } ?>
<?php  $__Context->tmp_lastday = date("t", $__Context->pTimestamp);//말일 ?>
<?php if(function_exists('gregoriantojd')){ ?>
<?php  $__Context->jd_dspStart = gregoriantojd($__Context->pMonth, $__Context->pDay, $__Context->pYear); // 출력시작 일자 jd  ?>
<?php  $__Context->jd_dspEnd = gregoriantojd($__Context->pMonth, $__Context->tmp_lastday, $__Context->pYear); // 출력종료 일자 jd  ?>
<?php }else{ ?>
<?php  $__Context->jd_dspStart = planner123_main::fn_calcDateToJD($__Context->pYear, $__Context->pMonth, $__Context->pDay); // 출력시작 일자 jd  ?>
<?php  $__Context->jd_dspEnd = planner123_main::fn_calcDateToJD($__Context->pYear, $__Context->pMonth, $__Context->tmp_lastday); // 출력종료 일자 jd  ?>
<?php } ?>
<?php if($__Context->pOption == "W1"){ ?>
<?php 
$__Context->jd_dspStart = $__Context->jd_dspStart - ( date("w", $__Context->pTimestamp) + 7 - $__Context->firstDayOfWeek) % 7; // 시작요일 조정(V480)
$__Context->jd_dspEnd = $__Context->jd_dspStart + 7-1;
 ?>
<?php }elseif($__Context->pOption == "W2"){ ?>
<?php 
$__Context->jd_dspStart = $__Context->jd_dspStart - ( date("w", $__Context->pTimestamp) + 7 - $__Context->firstDayOfWeek) % 7; // 시작요일 조정(V480)
$__Context->jd_dspEnd = $__Context->jd_dspStart + 14-1;
 ?>
<?php }else{ ?>
<?php if($__Context->ind_weekly_base > 0){ ?>
<?php 
$__Context->jd_dspStart = $__Context->jd_dspStart - ( date("w", $__Context->pTimestamp) + 7 - $__Context->firstDayOfWeek) % 7; // 시작요일 조정(V480)
$__Context->jd_dspEnd = $__Context->jd_dspStart + 7 * $__Context->ind_weekly_base - 1;
 ?>
<?php }elseif($__Context->module_info->firstlast_week =="alldate" ){ ?>
<?php 
$__Context->jd_dspStart = $__Context->jd_dspStart - $__Context->pDay + 1 - ( date("w", mktime(0,0,0,$__Context->pMonth,1,$__Context->pYear)) - $__Context->firstDayOfWeek + 7 ) % 7;
$__Context->jd_dspEnd = $__Context->jd_dspEnd + ( $__Context->firstDayOfWeek - date("w", mktime(0,0,0,$__Context->pMonth,$__Context->tmp_lastday,$__Context->pYear)) + 6 ) % 7;
$__Context->ind_fill = 'Y';
 ?>
<?php }else{ ?>
<?php 
$__Context->jd_dspStart = $__Context->jd_dspStart - $__Context->pDay + 1; // 출력시작 일자 jd
//$__Context->jd_dspEnd = $__Context->jd_dspEnd; // 변동없음(말일)
 ?>
<?php } ?>
<?php } ?>
<?php if(function_exists('jdtogregorian')){ ?>
<?php  $__Context->wrk_dsp_str = jdtogregorian($__Context->jd_dspStart); ?>
<?php  $__Context->wrk_dsp_end = jdtogregorian($__Context->jd_dspEnd); ?>
<?php }else{ ?>
<?php  $__Context->wrk_dsp_str = planner123_main::fn_calcJDToGregorian($__Context->jd_dspStart); ?>
<?php  $__Context->wrk_dsp_end = planner123_main::fn_calcJDToGregorian($__Context->jd_dspEnd); ?>
<?php } ?>
<?php 
$__Context->wrk_arr_dt = explode('/', $__Context->wrk_dsp_str);
$__Context->dispStart_stamp =  mktime(0, 1, 0, $__Context->wrk_arr_dt[0], $__Context->wrk_arr_dt[1], $__Context->wrk_arr_dt[2]);// 출력 시작일
$__Context->wrk_arr_dt = explode('/', $__Context->wrk_dsp_end);
$__Context->dispEnd_stamp =  mktime(23, 59, 0, $__Context->wrk_arr_dt[0], $__Context->wrk_arr_dt[1], $__Context->wrk_arr_dt[2]);// 출력 종료일
 ?>
<?php 
$__Context->dispStartYY = date("Y", $__Context->dispStart_stamp);// 출력 시작일 년도
$__Context->dispStartMM = date("m", $__Context->dispStart_stamp);
$__Context->dispStartDD = date("d", $__Context->dispStart_stamp);
$__Context->dispStartM = date("n", $__Context->dispStart_stamp);
$__Context->dispStart_date = $__Context->dispStartYY.",".$__Context->dispStartMM.",".$__Context->dispStartDD.",0,0,0";// 시간테이블을 위해
$__Context->dispEndYY = date("Y", $__Context->dispEnd_stamp);// 출력 종료일 년도
$__Context->dispEndMM = date("m", $__Context->dispEnd_stamp);
$__Context->dispEndDD = date("d", $__Context->dispEnd_stamp);
$__Context->dispEndM = date("n", $__Context->dispEnd_stamp);
$__Context->dispEnd_date = $__Context->dispEndYY.",".$__Context->dispEndMM.",".$__Context->dispEndDD.",23,59,59";// 시간테이블을 위해
 ?>
<?php  $__Context->Calmain = planner123_main::fn_CalMain($__Context->dispStart_stamp, $__Context->dispEnd_stamp, $__Context->firstDayOfWeek); ?>
<?php  $__Context->holiday_cnt_arr = array("kor" => "Korea", "usa"=> "U.S.A", "chn"=> "China", "jpn"=> "Japan", "can"=> "Canada", "vnm"=> "Vietnam", "tur"=> "Turkey", "user"=> "User", "default"=> "Default");  ?>
<?php  $__Context->dft_country_code = $__Context->module_info->holiday_country; // 기본국가 공휴일  ?>
<?php  $__Context->board_holiday = $__Context->module_info->board_holiday; // 게시판 스킨에서 지정한 휴일/기념일 추가(v530) ?>
<?php  $__Context->dft_holiday = planner123_main::fn_getHolidayByCountry($__Context->skinpath.'function/', $__Context->dft_country_code, $__Context->dispStart_stamp, $__Context->dispEnd_stamp, $__Context->board_holiday); ?>
<?php if($__Context->pHoliday_cnt != null && $__Context->pHoliday_cnt != $__Context->dft_country_code){ ?>
<?php  $__Context->board_holiday = ''; // 선택국가가 디폴트 국가가 아니면 게시판지정 휴일/기념일 적용않음(v530) ?>
<?php } ?>
<?php if($__Context->pHoliday_cnt == null ){ ?>
<?php  $__Context->holiday_country_code = $__Context->dft_country_code;  ?>
<?php  $__Context->Holiday = $__Context->dft_holiday; ?>
<?php }else{ ?>
<?php  $__Context->holiday_filename = planner123_main::fn_getHolidayFileName($__Context->skinpath.'function/', $__Context->pHoliday_cnt); ?>
<?php if($__Context->holiday_filename == 'class.planner123_holiday_default.php' ){ ?>
<?php  $__Context->holiday_country_code = 'default'; ?>
<?php }else{ ?>
<?php  $__Context->holiday_country_code = $__Context->pHoliday_cnt; ?>
<?php } ?>
<?php  $__Context->Holiday = planner123_main::fn_getHolidayByCountry($__Context->skinpath.'function/', $__Context->holiday_country_code, $__Context->dispStart_stamp, $__Context->dispEnd_stamp, $__Context->board_holiday); ?>
<?php } ?>
<?php  $__Context->holiday_country_name = $__Context->holiday_cnt_arr[$__Context->holiday_country_code]; ?>
<?php if($__Context->module_info->display_holiday == 'Y'){ ?>
<?php  $__Context->ind_holiday = "Y"; ?>
<?php } ?>
<?php if($__Context->module_info->display_memday == 'Y'){ ?>
<?php  $__Context->Memday = planner123_main::fn_getMemdayByCountry($__Context->skinpath.'function/', $__Context->holiday_country_code, $__Context->dispStart_stamp, $__Context->dispEnd_stamp, $__Context->board_holiday); ?>
<?php  $__Context->ind_memday = "Y"; ?>
<?php } ?>
<?php if($__Context->module_info->display_lunar == 'Y'){ ?>
<?php  $__Context->Lunarday = planner123_main::fn_sol2lun_kr_period($__Context->dispStart_stamp,$__Context->dispEnd_stamp); ?>
<?php  $__Context->ind_lunar = "Y"; ?>
<?php }elseif($__Context->module_info->display_lunar == 'Y_all'){ ?>
<?php  $__Context->Lunarday = planner123_main::fn_sol2lun_kr_period($__Context->dispStart_stamp,$__Context->dispEnd_stamp); ?>
<?php  $__Context->ind_lunar_all = "Y"; ?>
<?php } ?>
<?php if($__Context->module_info->default_style != 'planner_simple'){ ?>
<?php if($__Context->module_info->display_24term == 'Y' || $__Context->module_info->display_iljin == 'Y'){ ?>
<?php  $__Context->GanjiJeolki = planner123_main::fn_jeolki_ganji_ary($__Context->dispStartYY,$__Context->dispStartM,$__Context->pGanjioption); ?>
<?php if($__Context->dispStartYY != $__Context->dispEndYY){ ?>
<?php  $__Context->GanjiJeolki_2 = planner123_main::fn_jeolki_ganji_ary($__Context->dispEndYY,1,$__Context->pGanjioption); ?>
<?php } ?>
<?php } ?>
<?php if($__Context->module_info->display_24term == 'Y'){ ?>
<?php  $__Context->ind_24term = "Y"; ?>
<?php } ?>
<?php if($__Context->module_info->display_iljin == 'Y'){ ?>
<?php  $__Context->ind_iljin = "Y"; ?>
<?php } ?>
<?php if($__Context->module_info->display_islamic == 'Y'){ ?>
<?php 
$__Context->Islamicday = planner123_main::fn_getIslamic_ary($__Context->dispStart_stamp,$__Context->dispEnd_stamp);
$__Context->ind_islamic = "Y";
 ?>
<?php }elseif($__Context->module_info->display_islamic == 'Y_all'){ ?>
<?php 
$__Context->Islamicday = planner123_main::fn_getIslamic_ary($__Context->dispStart_stamp,$__Context->dispEnd_stamp);
$__Context->ind_islamic_all = "Y";
 ?>
<?php } ?>
<?php } ?>
<?php 
$__Context->ind_bgcolor_option = $__Context->module_info->use_category_bgcolor;// 일정 배경색상 옵션
$__Context->ind_image_diary = $__Context->module_info->image_diary;// 그림일기 사용여부
$__Context->ind_complete_doc = $__Context->module_info->display_complete_doc;// 완료일정 표시여부
$__Context->ind_oneday_container = $__Context->module_info->oneday_container;// 하루(비연속)일정 콘테이너 (T, J)
$__Context->dft_offday = unserialize($__Context->module_info->off_day);// 휴무일
$__Context->dft_offday_option = unserialize($__Context->module_info->off_day_option);// 휴무일 처리옵션
 ?>
<?php  if(!is_array($__Context->dft_offday)) $__Context->dft_offday = array($__Context->dft_offday); ?>
<?php  if(!is_array($__Context->dft_offday_option)) $__Context->dft_offday_option = array($__Context->dft_offday_option); ?>
<?php if(in_array("NA_DISP", $__Context->dft_offday_option)){ ?>
<?php  $__Context->ind_offday_naDisp = TRUE; ?>
<?php } ?>
<?php if(in_array("NA_NEW", $__Context->dft_offday_option)){ ?>
<?php  $__Context->ind_offday_naNew = TRUE; ?>
<?php } ?>
<?php if(in_array("LABEL", $__Context->dft_offday_option)){ ?>
<?php  $__Context->ind_offday_Label = TRUE; ?>
<?php } ?>
<?php if(in_array("H", $__Context->dft_offday)){ ?>
<?php  $__Context->ind_holiday_off = TRUE; ?>
<?php } ?>
<?php if(in_array("HW", $__Context->dft_offday)){ ?>
<?php  $__Context->ind_holiday_work = TRUE; ?>
<?php } ?>
<?php if($__Context->ind_oneday_container == '' || $__Context->ind_oneday_container == 'T'){ ?>
<?php  $__Context->ind_oneday_container = 'T'; ?>
<?php } ?>
<?php  $__Context->ind_reservation = $__Context->module_info->reservation; ?>
<?php if($__Context->ind_reservation == ''){ ?>
<?php  $__Context->ind_reservation = 'N'; ?>
<?php } ?>
<?php if($__Context->listStyle == 'planner_weekly' || $__Context->listStyle == 'planner_list'){ ?>
<?php  $__Context->ind_repeat_style = 'S'; ?>
<?php }else{ ?>
<?php  $__Context->ind_repeat_style = $__Context->module_info->repeat_style; ?>
<?php } ?>
<?php 
$__Context->tempmonth = substr("0".$__Context->pMonth, -2);// 검색년월 및 목록수 설정//월 을 "7" 에서 "07"로
$__Context->list_count = $__Context->module_info->list_count;//목록수
$__Context->page_count = $__Context->module_info->page_count;//목록수
 ?>
<?php if($__Context->search_keyword != null){ ?>
<?php  $__Context->tmp_search_keyword = str_replace(' ','%',$__Context->search_keyword); ?>
<?php if($__Context->search_target == 'title'){ ?>
<?php  $__Context->obj->var_search_title = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'content'){ ?>
<?php  $__Context->obj->var_search_content = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'title_content'){ ?>
<?php  $__Context->obj->var_search_content = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'user_name'){ ?>
<?php  $__Context->obj->var_search_user_name = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'nick_name'){ ?>
<?php  $__Context->obj->var_search_nick_name = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'user_id'){ ?>
<?php  $__Context->obj->var_search_user_id = $__Context->tmp_search_keyword; ?>
<?php }elseif($__Context->search_target == 'tag'){ ?>
<?php  $__Context->obj->var_search_tags = $__Context->tmp_search_keyword; ?>
<?php }else{ ?>
<?php if(strpos($__Context->search_target,'extra_vars')!==FALSE){ ?>
<?php  $__Context->obj->var_search_extra_idx = substr($__Context->search_target, strlen('extra_vars')); ?>
<?php  $__Context->obj->var_search_extra_value = str_replace(' ','%',$__Context->search_keyword); ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if(count($__Context->category_list) && $__Context->module_info->hide_category !="Y"){ ?>
<?php  $__Context->ind_use_category = "Y";// 분류(카테고리) 사용 ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key => $__Context->val){ ?>
<?php if($__Context->val->parent_srl > 0 && $__Context->module_info->display_category_name == "YP"){ ?>
<?php  $__Context->category_list[$__Context->key]->title = $__Context->category_list[$__Context->val->parent_srl]->title.'/'.$__Context->category_list[$__Context->key]->title; ?>
<?php } ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->ind_use_category = "N"; ?>
<?php } ?>
<?php 
$__Context->query_path = $__Context->module_info->module."/skins/".$__Context->module_info->skin;// 쿼리경로
$__Context->view_group = $__Context->module_info->default_document_group;// 스킨에서 정해준 일반사용자가 볼수있는 문서그룹
 ?>
<?php if($__Context->module_info->display_shered_schedule != "N"){ ?>
<?php 
// 공유일정 게시판용 함수추가:V530
$__Context->shared_module_srl = planner123_main::getModuleCategoriesByTitle($__Context->query_path, 'planner123_shared'); // 공유일정 모듈srl
$__Context->shared_module_category = planner123_main::getCategoriesList($__Context->shared_module_srl); // 공유일정 분류
if(!is_array($__Context->category_list)) $__Context->category_list = array(); //어레이 아니면 에러...
$__Context->category_list = $__Context->category_list + $__Context->shared_module_category; // 공유일정 분류추가
 ?>
<?php } ?>
<?php if($__Context->ind_use_category == "Y"){ ?>
<?php  $__Context->wrk_var_category_srl = "0"; ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
<?php  $__Context->wrk_var_category_srl .= ",".$__Context->val->category_srl; ?>
<?php if($__Context->val->selected){ ?>
<?php  $__Context->obj->var_category_srl = $__Context->val->category_srl; ?>
<?php if(count($__Context->val->childs)){ ?>
<?php if($__Context->val->childs&&count($__Context->val->childs))foreach($__Context->val->childs as $__Context->val2){ ?>
<?php  $__Context->obj->var_category_srl .= ",".$__Context->val2; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if(!$__Context->obj->var_category_srl){ ?>
<?php  $__Context->obj->var_category_srl = $__Context->wrk_var_category_srl; ?>
<?php } ?>
<?php } ?>
<?php 
$__Context->module_srl = $__Context->module_info->module_srl;// loged member// module srl (drag&drop 에서 사용)
$__Context->module_name = $__Context->module_info->module;// module name (drag&drop 에서 사용)
$__Context->member_temp_name = $__Context->logged_info->nick_name;// 공개그룹 user에 nick_name 이용
$__Context->member_srl = $__Context->logged_info->member_srl;
$__Context->group_list = $__Context->logged_info->group_list;
$__Context->usergroup_arr = array();
 ?>
<?php if($__Context->member_srl != null){ ?>
<?php  $__Context->obj->var_member_srl = $__Context->member_srl; ?>
<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
<?php  $__Context->group_titles .= ",".$__Context->val; ?>
<?php } ?>
<?php 
$__Context->group_titles=substr($__Context->group_titles,1);// 사용자가 소속된 그룹명칭
$__Context->usergroup_arr = explode(",",$__Context->group_titles);
 ?>
<?php } ?>
<?php if($__Context->listStyle == 'planner_weekly'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_get_weeklyplan.html') ?>
<?php } ?>
<?php if($__Context->dispEndMM >= $__Context->dispStartMM){ ?>
<?php 
$__Context->tmp_slt_s_mmdd = $__Context->dispStartMM.$__Context->dispStartDD;
$__Context->tmp_slt_e_mmdd = $__Context->dispEndMM.$__Context->dispEndDD;
$__Context->tmp_slt_s_mmdd2 = '0000';
$__Context->tmp_slt_e_mmdd2 = '0000';
 ?>
<?php }else{ ?>
<?php 
$__Context->tmp_slt_s_mmdd = $__Context->dispStartMM.$__Context->dispStartDD;
$__Context->tmp_slt_e_mmdd = '1231';
$__Context->tmp_slt_s_mmdd2 = '0101';
$__Context->tmp_slt_e_mmdd2 = $__Context->dispEndMM.$__Context->dispEndDD;
 ?>
<?php } ?>
<?php 
$__Context->obj->var_0 = '0';
$__Context->obj->site_srl = '';// 쿼리 설정/실행/list만들기// 0을 넣으면 이상해짐
//$__Context->obj->module_srl = $__Context->module_info->module_srl;
$__Context->obj->module_srl = $__Context->module_info->module_srl.$__Context->shared_module_srl;//v530 공유일정 추가
$__Context->obj->sort_index_1 = 'extra_value_end';// (일정종료 일) start를 end로(2010-08-01)
$__Context->obj->order_type_1 = 'desc';
$__Context->obj->sort_index_default_1 = 'extra_value_end';
$__Context->obj->sort_index_1_1 = 'extra_value_start';// (일정시작 일) (2010-08-01
$__Context->obj->order_type_1_1 = 'desc';
$__Context->obj->sort_index_default_1_1 = 'extra_value_start';
$__Context->obj->sort_index_2 = 'extra_value_time';// (시작종료 시간)
$__Context->obj->order_type_2 = 'asc';
$__Context->obj->sort_index_default_2 = 'extra_value_time';
$__Context->obj->sort_index = $__Context->module_info->order_target;// (게시판 문서 정렬 번호)
$__Context->obj->order_type = $__Context->module_info->order_type;
$__Context->obj->sort_index_default = 'list_order';// 게시판설정 선택값이 null 일때
$__Context->obj->list_count = $__Context->list_count*10;// 게시판 설정값 10배의 일정표시 (예:기본 20일때 200개까지)
$__Context->obj->page_count = $__Context->page_count;// 게시판 설정값
$__Context->obj->var_period_start = $__Context->dispStartYY.$__Context->dispStartMM.$__Context->dispStartDD;// 선택 범위시작
$__Context->obj->var_period_end = $__Context->dispEndYY.$__Context->dispEndMM.$__Context->dispEndDD;// 선택 범위  끝
$__Context->obj->var_start_mmdd = $__Context->tmp_slt_s_mmdd;// 년단위 반복일정만 있는경우 선택 범위시작
$__Context->obj->var_end_mmdd = $__Context->tmp_slt_e_mmdd;//  년단위 반복일정만 있는경우 선택 범위  끝
$__Context->obj->var_start_mmdd2 = $__Context->tmp_slt_s_mmdd2;// 년단위 반복일정만 있는경우 선택 범위시작 2
$__Context->obj->var_end_mmdd2 = $__Context->tmp_slt_e_mmdd2;//  년단위 반복일정만 있는경우 선택 범위  끝 2
$__Context->obj->var_fld_null = null;// 0을 null로 (0일 경우 레코드 없으면 안됨 -> 추후 값이없는 확장변수 레코드 삭제를 고려하여 null로 변경)
 ?>
<?php if(version_compare(__XE_VERSION__, '1.5.0', '<')){ ?>
<?php  $__Context->obj->var_status ="N";// Status  ?>
<?php }else{ ?>
<?php  $__Context->obj->var_status ="PUBLIC";// Status  ?>
<?php } ?>
<?php if($__Context->grant->manager){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_all', $__Context->obj); ?>
<?php }elseif($__Context->module_info->consultation == "Y"){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_own', $__Context->obj); ?>
<?php }elseif($__Context->view_group == "owner"){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_own', $__Context->obj); ?>
<?php }elseif($__Context->view_group == "usergroup"){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_group', $__Context->obj); ?>  
<?php }elseif($__Context->view_group == "nonsecured"){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_nonSec', $__Context->obj); ?>  
<?php }elseif($__Context->view_group == "alldocument"){ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_all', $__Context->obj); ?>
<?php }else{ ?>
<?php  $__Context->output = executeQueryArray($__Context->query_path.'.getDocumentsForPlanner_all', $__Context->obj); ?>
<?php } ?>
<?php if(count($__Context->output->data)){ ?>
<?php if($__Context->output->data&&count($__Context->output->data))foreach($__Context->output->data as $__Context->key => $__Context->attribute){ ?>
<?php 
$__Context->tmp_document_srl = $__Context->attribute->document_srl;
$__Context->tmp_Document = null;
$__Context->tmp_Document = new documentItem();
$__Context->tmp_Document->setAttribute($__Context->attribute, FALSE);
$__Context->tmp_Document->category_srl = $__Context->attribute->category_srl;
$__Context->tmp_opengroup_arr = explode("|@|",$__Context->attribute->extra_value_group);
 ?>
<?php if($__Context->module_info->consultation == 'Y'){ ?>
<?php if($__Context->grant->manager){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php }else{ ?>
<?php if($__Context->attribute->is_notice == "Y" || $__Context->attribute->member_srl == $__Context->member_srl){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php } ?>
<?php } ?>
<?php }elseif($__Context->attribute->status != "TEMP"){ ?>
<?php if($__Context->grant->manager){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php }elseif($__Context->view_group == "alldocument"){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php }elseif($__Context->attribute->is_notice == "Y" || $__Context->attribute->member_srl == $__Context->member_srl){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php }elseif($__Context->view_group == "nonsecured"){ ?>
<?php  $__Context->tmp_flag = null; ?>
<?php  $__Context->tmp_group_01 = $__Context->tmp_opengroup_arr[0]; ?>
<?php if($__Context->attribute->is_secret == "N" || $__Context->attribute->status == "PUBLIC"){ ?>  
<?php if($__Context->tmp_opengroup_arr == null || $__Context->tmp_group_01 == null){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php }elseif(count($__Context->tmp_opengroup_arr) == 1 && ($__Context->attribute->nick_name == $__Context->tmp_group_01 || $__Context->attribute->user_name == $__Context->tmp_group_01)){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php }else{ ?>
<?php if($__Context->usergroup_arr&&count($__Context->usergroup_arr))foreach($__Context->usergroup_arr as $__Context->tmp_key => $__Context->val_tmp){ ?>
<?php if(in_array($__Context->val_tmp, $__Context->tmp_opengroup_arr)){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->member_temp_name != null && in_array($__Context->member_temp_name, $__Context->tmp_opengroup_arr)){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->tmp_flag == "*"){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php } ?>
<?php } ?>
<?php }elseif($__Context->view_group == "usergroup"){ ?>
<?php  $__Context->tmp_flag = ""; ?>
<?php if($__Context->attribute->is_secret == "N" || $__Context->attribute->status == "PUBLIC"){ ?>  
<?php if($__Context->tmp_opengroup_arr != null){ ?>
<?php if($__Context->usergroup_arr&&count($__Context->usergroup_arr))foreach($__Context->usergroup_arr as $__Context->tmp_key => $__Context->val_tmp){ ?>
<?php if(in_array($__Context->val_tmp, $__Context->tmp_opengroup_arr)){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->member_temp_name != null && in_array($__Context->member_temp_name, $__Context->tmp_opengroup_arr)){ ?>
<?php  $__Context->tmp_flag = "*"; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->tmp_flag == "*"){ ?>
<?php  $__Context->tmp_document_list[$__Context->key] = $__Context->tmp_Document; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->tmp_document_list = array(); ?>
<?php } ?>
<?php 
Context::set('document_list', $__Context->tmp_document_list);
$__Context->oDocumentModel = &getModel('document');
$__Context->oDocumentModel->setToAllDocumentExtraVars();
$__Context->planner_flag = "Y"
 ?>
<?php  $__Context->extra_keys = $__Context->oDocumentModel->getExtraKeys($__Context->module_srl); ?>
<?php  $__Context->ext3_default = $__Context->extra_keys[3]->default; // default color code ?>
<?php  $__Context->shared_doc_srl = array(); ?>
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
<?php  $__Context->category_srl = $__Context->document->get('category_srl'); ?>
<?php if($__Context->ind_use_category == "Y"){ ?>
<?php if($__Context->category_srl){ ?>
<?php  $__Context->category_title = $__Context->category_list[$__Context->category_srl]->title; ?>
<?php  $__Context->category_color = $__Context->category_list[$__Context->category_srl]->color; ?>
<?php if($__Context->category_color == ''){ ?>
<?php  $__Context->category_color = $__Context->ext3_default; ?>
<?php } ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->category_title = null; ?>
<?php  $__Context->category_color = null; ?>
<?php } ?>
<?php  $__Context->pln_module_srl = $__Context->document->get('module_srl'); ?>
<?php if($__Context->pln_module_srl != $__Context->module_srl){ ?>
<?php  $__Context->shared_doc_srl[$__Context->document->document_srl] = $__Context->pln_module_srl;// v530 공유일정 문서번호 ?>
<?php } ?>
<?php if($__Context->document->getCommentCount()){ ?>
<?php  $__Context->plan_reply = $__Context->document->getCommentCount(); ?>
<?php }else{ ?>
<?php  $__Context->plan_reply = null; ?>
<?php } ?>
<?php 
$__Context->plan_NickName = "[".$__Context->document->getNickName()."]";// 닉네임
$__Context->plan_title = $__Context->document->getTitle($__Context->module_info->subject_cut_size);//일정제목
$__Context->plan_detail = $__Context->document->getContentText($__Context->module_info->content_cut_size);//일정내용
$__Context->plan_detail = str_replace("\r\n\r\n", "\r\n", $__Context->plan_detail);
$__Context->plan_detail = str_replace("\n\n", "\r\n", $__Context->plan_detail);
$__Context->plan_doc_extra_vars = $__Context->document->get('extra_vars');// 상태 - 취소일정을 위해 추가
$__Context->plan_docsrl = $__Context->document->document_srl;//문서번호
$__Context->plan_url = getUrl('document_srl',$__Context->document->document_srl,'offset',$__Context->offset);//문서url
$__Context->plan_new = $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new);// 새글표시 이미지
 ?>
<?php if($__Context->listStyle == 'planner_list' && $__Context->module_info->display_detail == "F"){ ?>
<?php  $__Context->plan_detail_all[$__Context->plan_docsrl] = $__Context->document->getContent(FALSE);  ?>
<?php } ?>
<?php if($__Context->ind_mobile){ ?>
<?php  $__Context->plan_img = null; ?>
<?php }else{ ?>
<?php  $__Context->plan_img = $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type); ?>
<?php } ?>
<?php 
$__Context->plan_start = $__Context->document->getExtraValue(1);// 일정시작일자-확장변수값 얻기
$__Context->plnstartYY = substr($__Context->plan_start,0,4);
$__Context->plnstartMM = substr($__Context->plan_start,4,2);
$__Context->plnstartDD = substr($__Context->plan_start,6,2);
$__Context->plnstartMM = ltrim( $__Context->plnstartMM, "0" );//  앞의 "0" 제거
$__Context->plnstartDD = ltrim( $__Context->plnstartDD, "0" );//  앞의 "0" 제거
 ?>
<?php  $__Context->plan_end = $__Context->document->getExtraValue(2); ?>
<?php if($__Context->plan_end == null ){;
$__Context->plan_end = $__Context->plan_start;
} ?>
<?php 
$__Context->plnendYY = substr($__Context->plan_end,0,4);
$__Context->plnendMM = substr($__Context->plan_end,4,2);
$__Context->plnendDD = substr($__Context->plan_end,6,2);
$__Context->plnendMM = ltrim( $__Context->plnendMM, "0" );// 일자 앞의 "0" 제거
$__Context->plnendDD = ltrim( $__Context->plnendDD, "0" );// 일자 앞의 "0" 제거
$__Context->plan_bgcolor = $__Context->document->getExtraValueHTML(3);// 배경색상
$__Context->plan_flagicon = $__Context->document->getExtraValueHTML(4);// 일정확인
$__Context->plan_repeat_cycle = $__Context->document->getExtraValueHTML(5);// 반복일정 cycle
$__Context->plan_repeat_unit = $__Context->document->getExtraValueHTML(6);// 반복일정 unit
$__Context->plan_time = $__Context->document->getExtraValueHTML(7);// 시작종료시간 (09:00, 09:30, 10:00,.. 형식)
 ?>
<?php if($__Context->plan_bgcolor == null ){;
$__Context->plan_bgcolor = $__Context->ext3_default;
} ?>
<?php if($__Context->plan_start != null){ ?>
<?php  $__Context->plan_detail = str_replace("'", "&#39;", $__Context->plan_detail); ?>
<?php  $__Context->plan_detail = str_replace("\"", "&quot;", $__Context->plan_detail); ?>
<?php if($__Context->plan_doc_extra_vars == 'A' || $__Context->plan_doc_extra_vars == 'F' || $__Context->plan_doc_extra_vars == 'R'){ ?>
<?php  $__Context->_doc_status = $__Context->plan_doc_extra_vars; ?>
<?php }elseif(version_compare(__XE_VERSION__, '1.7.4', '<')){ ?>
<?php  $__Context->_doc_status = unserialize($__Context->plan_doc_extra_vars); ?>
<?php }else{ ?>
<?php  $__Context->_doc_status = ''; //clear ?>
<?php } ?>
<?php if($__Context->_doc_status == "F" && ($__Context->ind_complete_doc == "L" || $__Context->ind_complete_doc == "C")){ ?>
<?php  $__Context->plan_title = "<span class='complete'>".$__Context->plan_title."</span>"; ?>
<?php } ?>
<?php if($__Context->_doc_status != "R" && ($__Context->ind_complete_doc == "N" && $__Context->_doc_status != "F" || $__Context->ind_complete_doc != "N") ){ ?>
<?php  $__Context->arr_repeat = planner123_main::fn_repeat_schedule($__Context->dispStart_stamp, $__Context->dispEnd_stamp, $__Context->plan_start, $__Context->plan_end, $__Context->plan_repeat_cycle, $__Context->plan_repeat_unit, $__Context->dft_holiday); // V430에서 $__Context->dft_holiday 추가 ?>
<?php if($__Context->arr_repeat&&count($__Context->arr_repeat))foreach($__Context->arr_repeat as $__Context->i => $__Context->val_1){ ?>
<?php if($__Context->val_1&&count($__Context->val_1))foreach($__Context->val_1 as $__Context->j => $__Context->val_2){ ?>
<?php if($__Context->arr_repeat[$__Context->i][$__Context->j]){ ?>
<?php  $__Context->ind_weekday = date('w', mktime(0, 0, 0, $__Context->i, $__Context->j, $__Context->arr_repeat[$__Context->i][$__Context->j])); // 당일요일 ?>
<?php if($__Context->ind_offday_naDisp){ ?>
<?php  $__Context->tmp_offday = in_array(strval($__Context->ind_weekday), $__Context->dft_offday); // 당일 휴뮤 요일여부 ?>
<?php if(!$__Context->tmp_offday && $__Context->ind_holiday_off){ ?>
<?php  if($__Context->dft_holiday[$__Context->i][$__Context->j] != null) $__Context->tmp_offday = TRUE; // 당일 기본 공휴일여부 ?>
<?php } ?>
<?php  $__Context->ind_weekday_2 = $__Context->ind_weekday + 1; // 다음날 요일 ?>
<?php if($__Context->ind_weekday_2 > 6){ ?>
<?php  $__Context->ind_weekday_2 = 0; ?>
<?php } ?>
<?php  $__Context->i_next = date('n', mktime(0, 0, 0, $__Context->i, $__Context->j+1, $__Context->arr_repeat[$__Context->i][$__Context->j])); // 다음날월 ?>
<?php  $__Context->j_next = date('j', mktime(0, 0, 0, $__Context->i, $__Context->j+1, $__Context->arr_repeat[$__Context->i][$__Context->j])); // 다음날일 ?>
<?php  $__Context->tmp_offday_2 = in_array(strval($__Context->ind_weekday_2), $__Context->dft_offday); // 다음날 휴뮤 요일여부 ?>
<?php if(!$__Context->tmp_offday_2 && $__Context->ind_holiday_off){ ?>
<?php  if($__Context->dft_holiday[$__Context->i_next][$__Context->j_next] != null) $__Context->tmp_offday_2 = TRUE; // 다음날 기본 공휴일여부 ?>
<?php } ?>
<?php } ?>
<?php if($__Context->ind_repeat_style != "S"){ ?>
<?php if((!$__Context->arr_repeat[$__Context->i][$__Context->j-1] || !$__Context->j_temp) && !$__Context->tmp_offday){ ?>
<?php  $__Context->j_temp = $__Context->j; ?>
<?php } ?>
<?php  $__Context->WDay_position = ($__Context->ind_weekday - $__Context->firstDayOfWeek + 7) % 7; // 시작요일 위치 변경을 위해 조정(V480)  ?>
<?php if(!$__Context->arr_repeat[$__Context->i][$__Context->j+1] || $__Context->WDay_position == 6 || $__Context->tmp_offday_2){ ?>
<?php  $__Context->plan_length = $__Context->j-$__Context->j_temp+1; ?>
<?php if($__Context->arr_plan[$__Context->i][$__Context->j_temp]){ ?>
<?php  $__Context->arr_plan[$__Context->i][$__Context->j_temp] .="|#&Oslash;#|" ?>
<?php } ?>
<?php  $__Context->arr_plan[$__Context->i][$__Context->j_temp] .= $__Context->plan_title."|&Oslash;|".$__Context->plan_url."|&Oslash;|".$__Context->plan_detail."|&Oslash;|".$__Context->plan_bgcolor."|&Oslash;|".$__Context->plan_flagicon."|&Oslash;|".$__Context->category_title."|&Oslash;|".$__Context->category_color."|&Oslash;|".$__Context->plan_reply."|&Oslash;|".$__Context->plan_time."|&Oslash;|".$__Context->plan_new."|&Oslash;|".$__Context->plan_img."|&Oslash;|".$__Context->plan_length."|&Oslash;|".$__Context->plan_docsrl."|&Oslash;|".$__Context->plan_start."|&Oslash;|".$__Context->plan_end."|&Oslash;|".$__Context->plan_NickName."|&Oslash;|".$__Context->category_srl."|&Oslash;|".$__Context->_doc_status; ?>
<?php  $__Context->j_temp = ""; // 일정 시작일 지움 ?>
<?php } ?>
<?php }else{ ?>
<?php if(!$__Context->tmp_offday){ ?>
<?php  $__Context->plan_length = 1; ?>
<?php if($__Context->arr_plan[$__Context->i][$__Context->j]){ ?>
<?php  $__Context->arr_plan[$__Context->i][$__Context->j] .="|#&Oslash;#|" ?>
<?php } ?>
<?php  $__Context->arr_plan[$__Context->i][$__Context->j] .= $__Context->plan_title."|&Oslash;|".$__Context->plan_url."|&Oslash;|".$__Context->plan_detail."|&Oslash;|".$__Context->plan_bgcolor."|&Oslash;|".$__Context->plan_flagicon."|&Oslash;|".$__Context->category_title."|&Oslash;|".$__Context->category_color."|&Oslash;|".$__Context->plan_reply."|&Oslash;|".$__Context->plan_time."|&Oslash;|".$__Context->plan_new."|&Oslash;|".$__Context->plan_img."|&Oslash;|".$__Context->plan_length."|&Oslash;|".$__Context->plan_docsrl."|&Oslash;|".$__Context->plan_start."|&Oslash;|".$__Context->plan_end."|&Oslash;|".$__Context->plan_NickName."|&Oslash;|".$__Context->category_srl."|&Oslash;|".$__Context->_doc_status; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($__Context->ind_reservation == 'T'){ ?>
<?php  $__Context->resv_status_arr = planner123_main::fn_get_reservation_status($__Context->arr_plan, $__Context->module_info, $__Context->category_list, $__Context->pYear.'-'.$__Context->pMonth.'-'.'01'); ?>
<?php } ?>
<?php if($__Context->module_info->min_period || $__Context->module_info->max_period){ ?>
<?php  $__Context->minStamp = planner123_main::fn_getMinMaxPeriod($__Context->module_info->min_period); ?>
<?php  $__Context->maxStamp = planner123_main::fn_getMinMaxPeriod($__Context->module_info->max_period); ?>
<?php } ?>
