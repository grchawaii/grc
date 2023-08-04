<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_get_schedule.html') ?>
<!--<?php echo $__Context->var_version ?>-->
<!--#Meta:modules/board/skins/xe_official_planner123/js/plannerXE123_skin.js--><?php $__tmp=array('modules/board/skins/xe_official_planner123/js/plannerXE123_skin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id='planner123' class="planner123">
<?php  $__Context->adjust_title_color = $__Context->module_info->adjust_title_color; ?>
<?php  $__Context->theme_name = $__Context->module_info->user_colorset; ?>
<?php if($__Context->theme_name && file_exists($__Context->tpl_path.'colorset/'.$__Context->theme_name.'.html')){ ?>
<?php  $__Context->oTemplate = &TemplateHandler::getInstance(); ?>
<?php  print $__Context->oTemplate->compile($__Context->tpl_path.'colorset/', $__Context->theme_name.'.html'); ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_header_planner.html') ?>
<?php } ?>
<?php if($__Context->ind_use_category == "Y" && count($__Context->category_list) && $__Context->module_info->display_category_button != "N"){ ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
<?php if($__Context->val->module_srl == $__Context->module_srl){ ?>
<?php  $__Context->tmp_cartegory[$__Context->val->title] = array('title' => $__Context->val->title, 'category_srl' => $__Context->val->category_srl, 'color' => $__Context->val->color, 'grant' => $__Context->val->grant, 'selected' => $__Context->val->selected, 'document_count' => $__Context->val->document_count, 'depth' => $__Context->val->depth) ?>
<?php } ?>
<?php } ?>
<?php  ksort($__Context->tmp_cartegory) ?>
<div class="category_navigation">
<?php  $__Context->label_cat_all=$__Context->lang->pln_cat_all ?>
<button title="<?php echo $__Context->label_cat_all ?>" type="button" id="btn_all" onclick="doChgCategory(); return FALSE;" class="button2"><?php if(!$__Context->category){ ?><span class="strong"><?php }else{ ?><span><?php };
echo $__Context->label_cat_all ?></span></button>
<?php if($__Context->tmp_cartegory&&count($__Context->tmp_cartegory))foreach($__Context->tmp_cartegory as $__Context->val){ ?>
<button title="<?php echo $__Context->val['title'] ?>" type="button" id=<?php echo $__Context->val['title'] ?> onclick="doChgCategory(<?php echo $__Context->val['category_srl'] ?>); return FALSE;" class="button2" style="<?php if($__Context->val['color'] != transparent){ ?>color:<?php echo $__Context->val['color'] ?>;<?php } ?>" > <?php if($__Context->category == $__Context->val['category_srl']){ ?><span class="strong" ><?php }else{ ?><span><?php };
echo $__Context->val['title'] ?></span></button>
<?php } ?>
</div>
<?php } ?>
<?php  $__Context->weekDayTitle_arr = explode(",",$__Context->lang->pln_calendar_header);// 요일 이름(V500)  ?>
<?php if($__Context->module_info->column_width == null){ ?>
<?php  $__Context->th_width_arr = array('14%', '14%', '14%', '14%', '14%', '14%', '14%');//디폴트:14%(일,월,화....토)  ?>
<?php }else{ ?>
<?php  $__Context->th_width_arr= explode(",",$__Context->module_info->column_width);//입력 값  ?>
<?php } ?>
<?php 
$__Context->tbl_html .=  "<table class='planner_calendar' summary='PlannerXE123'>";// 달력
$__Context->tbl_html .=  "<thead>";
$__Context->tbl_html .=  "<tr>";
 ?>
<?php for($__Context->x=0; $__Context->x<7; $__Context->x++){ ?>
<?php  $__Context->WDay_seq = ($__Context->firstDayOfWeek + $__Context->x) % 7; ?>
<?php if($__Context->WDay_seq == 0){ ?>
<?php  $__Context->tbl_html .=  "<th scope='col' width='".$__Context->th_width_arr[$__Context->WDay_seq]."'><div class='wd_border holiday'><div class='wd_title'>".$__Context->weekDayTitle_arr[$__Context->WDay_seq]."</div></div></th>";  ?>
<?php }elseif($__Context->WDay_seq == 6){ ?>
<?php  $__Context->tbl_html .=  "<th scope='col' width='".$__Context->th_width_arr[$__Context->WDay_seq]."'><div class='wd_border saturday'><div class='wd_title'>".$__Context->weekDayTitle_arr[$__Context->WDay_seq]."</div></div></th>";  ?>
<?php }else{ ?>
<?php  $__Context->tbl_html .=  "<th scope='col' width='".$__Context->th_width_arr[$__Context->WDay_seq]."'><div class='wd_border'><div class='wd_title'>".$__Context->weekDayTitle_arr[$__Context->WDay_seq]."</div></div></th>";  ?>
<?php } ?>
<?php } ?>
<?php 
$__Context->tbl_html .=  "</tr>";
$__Context->tbl_html .=  "</thead>";
$__Context->tbl_html .=  "<tbody>";
$__Context->schedule_html = null;
$__Context->holiday_html = null;
$__Context->memday_html = null;
$__Context->count_seg = 0;
$__Context->weekcount = count($__Context->Calmain);
 ?>
<?php for($__Context->i=0; $__Context->i<$__Context->weekcount; $__Context->i++){ ?>
<?php  $__Context->tbl_html .= "<tr id='planner_week".$__Context->i."'>"; ?>
<?php for($__Context->j=0; $__Context->j<7; $__Context->j++){ ?>
<?php 
$__Context->wrk_tmp_arr= explode("-",$__Context->Calmain[$__Context->i][$__Context->j]);
$__Context->Calmain_YY = $__Context->wrk_tmp_arr[0];
$__Context->Calmain_MM = $__Context->wrk_tmp_arr[1];
$__Context->Calmain_DD = $__Context->wrk_tmp_arr[2];
 ?>
<?php if($__Context->Calmain_YY == $__Context->todayYY && $__Context->Calmain_MM == $__Context->todayMM && $__Context->Calmain_DD == $__Context->todayDD){ ?>
<?php  $__Context->tbl_html .= "<td class='today_bg drop'>"; ?>
<?php }else{ ?>
<?php if($__Context->Calmain[$__Context->i][$__Context->j]== "*"){ ?>
<?php  $__Context->tbl_html .= "<td bgcolor=".$__Context->day_bgcolor.">"; ?>
<?php }else{ ?>
<?php  $__Context->tbl_html .= "<td class='drop' bgcolor=".$__Context->day_bgcolor.">"; ?>
<?php } ?>
<?php } ?>
<?php 
$__Context->tbl_html .= " <div class='planner_calendar_inner'>";
$__Context->tmpfld_1 = null;
$__Context->outtext = null;
 ?>
<?php if($__Context->Calmain[$__Context->i][$__Context->j] == "*"){ ?>
<?php  $__Context->Calmain_DD=null; ?>
<?php if($__Context->i==0 && $__Context->j==0){ ?>
<?php 
$__Context->tbl_html .= "<div style='margin:0; height:18px;'>&nbsp;</div>";// 빈 날자 레이블 출력
$__Context->tbl_html .= "<div id='week_schedule_".$__Context->i."' style='position:relative;'></div>";// 첫주 장기일정 콘테이너
 ?>
<?php } ?>
<?php }else{ ?>
<?php 
$__Context->tempday=$__Context->Calmain_DD;
$__Context->tmparr_lunar=explode(",",$__Context->Lunarday[$__Context->Calmain_MM][$__Context->Calmain_DD]);//음력날자(2014-07-01 "-"를 ","로변경)
 ?>
<?php if($__Context->tmparr_lunar[3] == "윤달"){;
$__Context->youndal = "윤";
}else{;
$__Context->youndal = null;
} ?>
<?php 
$__Context->tmpfld_lunar ="(".$__Context->youndal.$__Context->tmparr_lunar[1]."-".$__Context->tmparr_lunar[2].")";
$__Context->tmparr4=explode("-",$__Context->Holiday[$__Context->Calmain_MM][$__Context->Calmain_DD]);// 공휴일
$__Context->tmparr5=explode("-",$__Context->Memday[$__Context->Calmain_MM][$__Context->Calmain_DD]);// 기념일
$__Context->tmparr6=explode("|#&Oslash;#|",$__Context->arr_plan[$__Context->Calmain_MM][$__Context->Calmain_DD]);// 일정/플랜  1차 "|#&Oslash;#|",로 분리
 ?>
<?php if(($__Context->j==0 || $__Context->Calmain_DD==1) && ($__Context->pOption == 'W1' || $__Context->pOption == 'W2' || $__Context->ind_weekly_base > 0)){ ?>
<?php  $__Context->tmp_dsp_mmdd = $__Context->Calmain_MM."/".$__Context->Calmain_DD; ?>
<?php }else{ ?>
<?php  $__Context->tmp_dsp_mmdd = $__Context->Calmain_DD; ?>
<?php } ?>
<?php  $__Context->WDay_seq = ($__Context->firstDayOfWeek + $__Context->j) % 7; ?>
<?php if($__Context->WDay_seq==1 && $__Context->module_info->display_week_number =='Y'){ ?>
<?php  $__Context->tmp_weekNo = "(".date("W", strtotime($__Context->Calmain[$__Context->i][$__Context->j])).")"; //몇주차  ?>
<?php  $__Context->wrkfld_weekNo = "<span class='week_no'>".$__Context->tmp_weekNo."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_weekNo = ""; ?>
<?php } ?>
<?php if($__Context->WDay_seq==0 || $__Context->tmparr4[0] != null){ ?>
<?php  $__Context->wrkfld_dt = "<span class='date_label holiday font_big'>".$__Context->tmp_dsp_mmdd."</span>"; ?>
<?php }elseif($__Context->WDay_seq==6){ ?>
<?php  $__Context->wrkfld_dt = "<span class='date_label saturday font_big'>".$__Context->tmp_dsp_mmdd."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_dt = "<span class='date_label weekday font_big'>".$__Context->tmp_dsp_mmdd."</span>"; ?>
<?php } ?>
<?php if($__Context->ind_lunar_all == 'Y' && $__Context->Calmain_DD != null){ ?>
<?php  $__Context->wrkfld_lunar = "<span class='lunar'>".$__Context->tmpfld_lunar."</span>"; ?>
<?php }elseif($__Context->ind_lunar == 'Y' && ($__Context->tmparr_lunar[2] == 1 || $__Context->tmparr_lunar[2] == 10 || $__Context->tmparr_lunar[2] == 15 || $__Context->tmparr_lunar[2] == 20)){ ?>
<?php  $__Context->wrkfld_lunar = "<span class='lunar'>".$__Context->tmpfld_lunar."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_lunar = ''; ?>
<?php } ?>
<?php if($__Context->ind_holiday == 'Y' && $__Context->tmparr4[0] != ""){ ?>
<?php  $__Context->wrkfld_holiday_top = "<span class='holiday strong holiday_topline'>".$__Context->tmparr4[0]."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_holiday_top = ''; ?>
<?php } ?>
<?php if($__Context->ind_memday == 'Y' && $__Context->tmparr5[0] !=""){ ?>
<?php  $__Context->wrkfld_memday_top =  "<span class ='memorial memday_topline'>".$__Context->tmparr5[0]."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_memday_top = ''; ?>
<?php } ?>
<?php  $__Context->is_offday = FALSE; // clear ?>
<?php if($__Context->ind_offday_naNew || $__Context->ind_offday_Label){ ?>
<?php  $__Context->is_offday = in_array(strval($__Context->WDay_seq), $__Context->dft_offday); // $__Context->j(순서)를 $__Context->WDay_seq(요일)로 변경(V500)  ?>
<?php if(!$__Context->is_offday && $__Context->ind_holiday_off){ ?>
<?php  if($__Context->dft_holiday[$__Context->Calmain_MM][$__Context->Calmain_DD] != "") $__Context->is_offday = TRUE; //default holiday  ?>
<?php } ?>
<?php if($__Context->is_offday && $__Context->ind_holiday_work){ ?>
<?php  if($__Context->dft_holiday[$__Context->Calmain_MM][$__Context->Calmain_DD] != "") $__Context->is_offday = FALSE;  ?>
<?php } ?>
<?php } ?>
<?php  $__Context->procDayStamp = mktime(0,0,0,$__Context->Calmain_MM,$__Context->Calmain_DD,$__Context->Calmain_YY); ?>
<?php if($__Context->resv_status_arr[$__Context->Calmain_MM][$__Context->Calmain_DD] == 'full'){ ?>
<?php  $__Context->is_resv_full = TRUE; //모두예약완료(V530) ?>
<?php }else{ ?>
<?php  $__Context->is_resv_full = FALSE; ?>
<?php } ?>
<?php if($__Context->minStamp && $__Context->procDayStamp < $__Context->minStamp){ ?>
<?php  $__Context->over_min_period = TRUE; //입력허용기간 초과(V540) ?>
<?php }else{ ?>
<?php if($__Context->ind_reservation != 'N' && $__Context->procDayStamp < $__Context->today_stamp){ ?>
<?php  $__Context->over_min_period = TRUE; //예약일정시 과거일자는 최소기간 범위외로...(V540) ?>
<?php }else{ ?>
<?php  $__Context->over_min_period = FALSE; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->maxStamp && $__Context->procDayStamp > $__Context->maxStamp){ ?>
<?php  $__Context->over_max_period = TRUE; //입력허용기간 초과(V540) ?>
<?php }else{ ?>
<?php  $__Context->over_max_period = FALSE; ?>
<?php } ?>
<?php  $__Context->wrkfld_btn = ''; ?>
<?php if($__Context->ind_offday_naNew && $__Context->is_offday){ ?>
<?php  $__Context->date_tooltip = ' title='.$__Context->lang->pln_off_day.' '; ?>
<?php }elseif($__Context->over_min_period || $__Context->over_max_period){ ?>
<?php  $__Context->date_tooltip = ' title='.$__Context->lang->pln_input_not_allow.' '; ?>
<?php }else{ ?>
<?php if($__Context->ind_reservation != 'N' && $__Context->module_info->display_resv_btn != 'N'){ ?>
<?php if($__Context->is_resv_full){ ?>
<?php  $__Context->wrkfld_btn = ' '.$__Context->lang->pln_closed_resv2; ?>
<?php  $__Context->date_tooltip = ' title='.$__Context->lang->pln_closed_resv2.' '; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_btn = ' <button title="'.$__Context->lang->pln_resv2.'" type="button" class="button3"> <span>'.$__Context->lang->pln_resv.'</span></button>'; ?>
<?php  $__Context->date_tooltip = ' title='.$__Context->lang->pln_resv2.' '; ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->date_tooltip = ' title='.$__Context->lang->pln_write.' '; ?>
<?php } ?>
<?php } ?>
<?php  $__Context->wrkfld_link = ''; ?>
<?php if($__Context->over_min_period || $__Context->over_max_period || $__Context->is_resv_full || $__Context->is_offday && $__Context->ind_offday_naNew){ ?>
<?php  $__Context->wrkfld_link = "<a href='#' class='strong past_day'>".$__Context->wrkfld_weekNo.$__Context->wrkfld_dt.$__Context->wrkfld_btn.$__Context->wrkfld_lunar.$__Context->wrkfld_memday_top.$__Context->wrkfld_holiday_top."</a>"; ?>
<?php }else{ ?>
<?php 
$__Context->write_ymd = $__Context->Calmain_YY.substr('0'.$__Context->Calmain_MM,-2).substr('0'.$__Context->Calmain_DD,-2);// '-' 제거 일정시작 확장변수 값
$__Context->wrkfld_url = getUrl('act','dispBoardWrite','document_srl','','extra_vars1',$__Context->write_ymd);// 일자 클릭시 쓰기로
 ?>
<?php if($__Context->Calmain_MM != $__Context->pMonth && $__Context->ind_fill == 'Y' && $__Context->pOption == 'M' && $__Context->ind_weekly_base <= 6){ ?>
<?php  $__Context->wrkfld_class = ' diff_month'; ?>
<?php }else{ ?>
<?php  $__Context->wrkfld_class = ''; ?>
<?php } ?>
<?php  $__Context->wrkfld_link = "<a href=".$__Context->wrkfld_url." class='strong link_allow " .$__Context->wrkfld_class."'>" .$__Context->wrkfld_weekNo.$__Context->wrkfld_dt.$__Context->wrkfld_btn.$__Context->wrkfld_lunar.$__Context->wrkfld_memday_top.$__Context->wrkfld_holiday_top."</a>"; ?>
<?php } ?>
<?php if($__Context->Calmain_YY == $__Context->todayYY && $__Context->Calmain_MM == $__Context->todayMM && $__Context->Calmain_DD == $__Context->todayDD ){ ?>
<?php  $__Context->outtext = "<div class='date_div today_date_bg' style='height:18px;' ".$__Context->date_tooltip. ">".$__Context->wrkfld_link."</div>"; ?>
<?php }else{ ?>
<?php  $__Context->outtext = "<div class='date_div' style='margin:0; height:18px;' ".$__Context->date_tooltip. ">".$__Context->wrkfld_link."</div>"; ?>
<?php } ?>
<?php  $__Context->tbl_html .= $__Context->outtext; //날자영역 출력 ?>
<?php if($__Context->j == 0){ ?>
<?php  $__Context->tbl_html .= "<div id='week_schedule_".$__Context->i."' style='position:relative;'></div>"; ?>
<?php } ?>
<?php  $__Context->tbl_html .= "<div id='day_schedule_container_".$__Context->Calmain[$__Context->i][$__Context->j]."'><div id='day_space_".$__Context->Calmain[$__Context->i][$__Context->j]."' ></div>"; ?>
<?php if(!empty($__Context->tmparr6[0])){ ?>
<?php if($__Context->tmparr6&&count($__Context->tmparr6))foreach($__Context->tmparr6 as $__Context->val){ ?>
<?php if(trim($__Context->val)){ ?>
<?php  $__Context->tmparr7=explode("|&Oslash;|",$__Context->val); ?>
<?php if(!empty($__Context->tmparr7[0])){ ?>
<?php  $__Context->_doc_status = $__Context->tmparr7[17];  // 일정 상태표시 (V541)  ?>
<?php if($__Context->ind_use_category == 'Y' && $__Context->module_info->display_category_name != 'N'){ ?>
<?php if($__Context->ind_bgcolor_option == "category_bg"){ ?>
<?php  $__Context->tmp_color_chr = ''; ?>
<?php }else{ ?>
<?php  //$__Context->tmp_color_chr = $__Context->tmparr7[6]; //분류명에 분류색적용 불필요할듯... ?>
<?php  $__Context->tmp_color_chr = ''; ?>
<?php } ?>
<?php if(!empty($__Context->tmparr7[5])){ ?>
<?php if($__Context->_doc_status == "F" && ($__Context->ind_complete_doc == "L" || $__Context->ind_complete_doc == "C")){ ?>
<?php  $__Context->lplan_cat = "<span class='complete' style='color:".$__Context->tmp_color_chr.";'>[".$__Context->tmparr7[5]."] </span>"; ?>
<?php }else{ ?>
<?php  $__Context->lplan_cat = "[".$__Context->tmparr7[5]."]"; ?>
<?php } ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->lplan_cat = ""; ?>
<?php } ?>
<?php  $__Context->ind_shared_plan = array_key_exists($__Context->tmparr7[12] , $__Context->shared_doc_srl);// V530:공유일정 ?>
<?php  $__Context->lplan_state = null; ?>
<?php if(!empty($__Context->tmparr7[4])){ ?>
<?php  $__Context->arr_icon = explode(",",$__Context->tmparr7[4]); ?>
<?php if($__Context->arr_icon&&count($__Context->arr_icon))foreach($__Context->arr_icon as $__Context->icon){ ?>
<?php if($__Context->icon = trim($__Context->icon)){ ?>
<?php if(file_exists($__Context->skinpath."images/icon/".$__Context->icon)){ ?>
<?php  $__Context->icon_folder = ""; ?>
<?php }elseif(file_exists($__Context->skinpath."images/icon/client/".$__Context->icon)){ ?>
<?php  $__Context->icon_folder = "client/"; ?>
<?php }elseif(file_exists($__Context->skinpath."images/icon/manager/".$__Context->icon)){ ?>
<?php  $__Context->icon_folder = "manager/"; ?>
<?php } ?>
<?php  $__Context->lplan_state .= "<img src='".$__Context->skinpath."images/icon/".$__Context->icon_folder.$__Context->icon."'/>"; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if(!$__Context->tmparr7[8]){ ?>
<?php 
$__Context->title_time = null;// 제목에표시할 시간값
$__Context->time_start =null;// 일정 시작시간
$__Context->time_end = null;// 일정 종료시간
$__Context->time_disply_fld = null;// 툴팁에표시할 시간값
$__Context->tmp_time = null;
 ?>
<?php }else{ ?>
<?php  $__Context->tmp_time = explode(",",$__Context->tmparr7[8]); ?>
<?php if($__Context->ind_reservation == "T"){ ?>
<?php 
$__Context->title_time = $__Context->tmp_time[0]." ";
$__Context->time_start = $__Context->tmp_time[0];
$__Context->time_end = trim($__Context->tmp_time[count($__Context->tmp_time)-1]);
$__Context->tmp_etime_arr = explode(':',$__Context->time_end);
$__Context->ind_interval = $__Context->module_info->time_interval;//시간간격
$__Context->time_end = date('H:i', mktime($__Context->tmp_etime_arr[0],$__Context->tmp_etime_arr[1]+$__Context->ind_interval,-1,1,1,2011));
$__Context->time_disply_fld = "[".$__Context->tmparr7[8]."]&#x0A;";//선택내용 전부
 ?>
<?php }else{ ?>
<?php 
$__Context->title_time = $__Context->tmp_time[0]." ";
$__Context->time_start = $__Context->tmp_time[0];
$__Context->time_end = trim($__Context->tmp_time[count($__Context->tmp_time)-1]);
 ?>
<?php if($__Context->time_start && $__Context->time_start == $__Context->time_end){ ?>
<?php  $__Context->time_disply_fld = "[".$__Context->time_start."-"."] "; ?>
<?php }else{ ?>
<?php  $__Context->time_disply_fld = "[".$__Context->time_start."-".$__Context->time_end."] "; ?>
<?php } ?>
<?php 
$__Context->tmp_etime_arr = explode(':',$__Context->time_end);
$__Context->ind_interval = $__Context->module_info->time_interval;//시간간격
$__Context->time_end = date('H:i', mktime($__Context->tmp_etime_arr[0],$__Context->tmp_etime_arr[1],-1,1,1,2011));
 ?>
<?php } ?>
<?php if($__Context->_doc_status == "F" && ($__Context->ind_complete_doc == "L" || $__Context->ind_complete_doc == "C")){ ?>
<?php  $__Context->title_time = "<span class='complete'>".$__Context->title_time."</span>"; ?>
<?php } ?>
<?php } ?>
<?php if($__Context->module_info->display_selected_time == "N"){ ?>
<?php  $__Context->title_time = null;// 제목에 표시할 선택 시간값  ?>
<?php } ?>
<?php if($__Context->module_info->display_tooltip == "all" || $__Context->module_info->display_tooltip == ""){ ?>
<?php  $__Context->tooltip_desc = $__Context->time_disply_fld.$__Context->tmparr7[2]; ?>
<?php }elseif($__Context->module_info->display_tooltip == "log" && $__Context->is_logged){ ?>
<?php  $__Context->tooltip_desc = $__Context->time_disply_fld.$__Context->tmparr7[2]; ?>
<?php }elseif($__Context->module_info->display_tooltip == "adm" && $__Context->grant->is_admin){ ?>
<?php  $__Context->tooltip_desc = $__Context->time_disply_fld.$__Context->tmparr7[2]; ?>
<?php } ?>
<?php  $__Context->title_disp = $__Context->tmparr7[0]; ?>
<?php if($__Context->tmparr7[11] > 1){ ?>
<?php  $__Context->id_overflow = "overflow:hidden; height:14px;"; ?>
<?php }else{ ?>
<?php  $__Context->id_overflow = ""; ?>
<?php } ?>
<?php if($__Context->tmparr7[3] =="" && $__Context->tmparr7[6] ==""){ ?>
<?php  $__Context->tmparr7[3] = $__Context->tmparr7[6] = "#77CC00"; ?>
<?php } ?>
<?php if($__Context->ind_bgcolor_option == "picker_bg"){ ?>
<?php if($__Context->_doc_status == "F" && $__Context->ind_complete_doc == "C"){ ?>
<?php  $__Context->tmparr7[3] = "transparent"; ?>
<?php } ?>
<?php 
$__Context->tmp_style = "style='clear:both; background-color:".$__Context->tmparr7[3]."; ".$__Context->id_overflow."'";
$__Context->tmp_style1_0 = "style='background-color:".$__Context->tmparr7[3]."; '";
$__Context->tmp_style1_1 = "style='padding:2px 0 0 2px; background-color:".$__Context->tmparr7[3]."; border:medium double  #FFFFFF;'";
$__Context->tmp_style2 = "style='vertical-align:top; background-color:".$__Context->tmparr7[3].";'";
 ?>
<?php }elseif($__Context->ind_bgcolor_option == "picker_text"){ ?>
<?php 
$__Context->tmp_style = "style='clear:both; color:".$__Context->tmparr7[3]."; ".$__Context->id_overflow."'";
$__Context->tmp_style1_0 = "style='color:".$__Context->tmparr7[3]."; '";
$__Context->tmp_style1_1 = "style='padding:2px 0 0 2px; color:".$__Context->tmparr7[3]."; border:medium double ".$__Context->tmparr7[3].";'";
$__Context->tmp_style2 = "style='vertical-align:top; color:".$__Context->tmparr7[3].";'";
 ?>
<?php }elseif($__Context->ind_bgcolor_option == "category_bg" && $__Context->ind_use_category == "Y" && !$__Context->ind_shared_plan){ ?>
<?php if($__Context->_doc_status == "F" && $__Context->ind_complete_doc == "C"){ ?>
<?php  $__Context->tmparr7[6] = "transparent"; ?>
<?php } ?>
<?php 
$__Context->color_chr = ''; //(V540에서 whitesmoke 제거)
$__Context->tmp_style = "style='clear:both; color:".$__Context->color_chr."; background-color:".$__Context->tmparr7[6]."; ".$__Context->id_overflow."'";
$__Context->tmp_style1_0 = "style='color:".$__Context->color_chr."; background-color:".$__Context->tmparr7[6]."; '";
$__Context->tmp_style1_1 = "style='padding:2px 0 0 2px; color:".$__Context->color_chr."; background-color:".$__Context->tmparr7[6]."; border:medium double #FFFFFF;'";
$__Context->tmp_style2 = "style='vertical-align:top; color:".$__Context->color_chr."; background-color:".$__Context->tmparr7[6].";'";
 ?>
<?php }elseif($__Context->ind_bgcolor_option == "category_text" && $__Context->ind_use_category == "Y" && !$__Context->ind_shared_plan){ ?>
<?php 
$__Context->tmp_style = "style='clear:both; color:".$__Context->tmparr7[6]."; ".$__Context->id_overflow."'";
$__Context->tmp_style1_0 = "style='color:".$__Context->tmparr7[6]."; '";
$__Context->tmp_style1_1 = "style='padding:2px 0 0 2px; color:".$__Context->tmparr7[6]."; border:medium double ".$__Context->tmparr7[6].";'";
$__Context->tmp_style2 = "style='vertical-align:top; color:".$__Context->tmparr7[6].";'";
 ?>
<?php }else{ ?>
<?php if($__Context->_doc_status == "F" && $__Context->ind_complete_doc == "C"){ ?>
<?php  $__Context->tmparr7[3] = "transparent"; ?>
<?php } ?>
<?php 
$__Context->tmp_style = "style='clear:both; background-color:".$__Context->tmparr7[3]."; ".$__Context->id_overflow."'";
$__Context->tmp_style1_0 = "style='background-color:".$__Context->tmparr7[3]."; '";
$__Context->tmp_style1_1 = "style='padding:2px 0 0 2px; background-color:".$__Context->tmparr7[3]."; border:medium double  #FFFFFF;'";
$__Context->tmp_style2 = "style='vertical-align:top; background-color:".$__Context->tmparr7[3].";'";
 ?>
<?php } ?>
<?php if($__Context->document_srl == $__Context->tmparr7[12]){ ?>
<?php  $__Context->blink_class = 'blink_me'; ?>
<?php }else{ ?>
<?php  $__Context->blink_class = ''; ?>
<?php } ?>
<?php if(!empty($__Context->tmparr7[10]) && $__Context->tmparr7[11] == 1 && !$__Context->ind_mobile){ ?>
<?php if($__Context->ind_image_diary == "Y"){ ?>
<?php  $__Context->temp_html = "<a ".$__Context->tmp_style2." href=".$__Context->tmparr7[1].">"."<span class='schedule_view schedule_bottom $__Context->blink_class' ".$__Context->tmp_style1_0." title='".$__Context->tooltip_desc."'>"."<img style='vertical-align:top;' src='".$__Context->tmparr7[10]."'/>"."<span style='clear:both; display:block;'>".$__Context->lplan_cat.$__Context->title_disp.$__Context->tmparr7[9]."</span>"."</span>"."</a>"; ?>
<?php }elseif($__Context->ind_image_diary == "F"){ ?>
<?php  $__Context->temp_html = "<a ".$__Context->tmp_style2." href=".$__Context->tmparr7[1].">"."<span class='schedule_view schedule_bottom $__Context->blink_class' ".$__Context->tmp_style1_1." title='".$__Context->tooltip_desc."'>"."<img style='vertical-align:top;' src='".$__Context->tmparr7[10]."'/>"."<span style='clear:both; display:block;'>".$__Context->lplan_cat.$__Context->title_disp.$__Context->tmparr7[9]."</span>"."</span>"."</a>"; ?>
<?php }else{ ?>
<?php  $__Context->temp_html = "<a ".$__Context->tmp_style2." href=".$__Context->tmparr7[1]."> "."<span class='schedule_view schedule_bottom $__Context->blink_class' ".$__Context->tmp_style." title='".$__Context->tooltip_desc."'>".$__Context->lplan_state.$__Context->lplan_cat.$__Context->title_time.$__Context->title_disp.$__Context->tmparr7[9]."</span>"."</a>"; ?>
<?php } ?>
<?php }else{ ?>
<?php if($__Context->ind_repeat_style != "N" || $__Context->tmparr7[11] == 1){ ?>
<?php  $__Context->temp_html = "<a ".$__Context->tmp_style2." href=".$__Context->tmparr7[1]."> "."<span class='schedule_view schedule_bottom $__Context->blink_class' ".$__Context->tmp_style." title='".$__Context->tooltip_desc."'>".$__Context->lplan_state.$__Context->lplan_cat.$__Context->title_time.$__Context->title_disp.$__Context->tmparr7[9]."</span>"."</a>"; ?>
<?php }else{ ?>
<?php  $__Context->temp_html = "<a ".$__Context->tmp_style2." href=".$__Context->tmparr7[1].">"."<span class='schedule_view schedule_bottom $__Context->blink_class' ".$__Context->tmp_style." title='".$__Context->tooltip_desc."'>"."<span class='inside'>".$__Context->lplan_state.$__Context->lplan_cat.$__Context->title_time.$__Context->title_disp."</span>"; ?>
<?php for($__Context->tmp_i=1; $__Context->tmp_i < $__Context->tmparr7[11] ; $__Context->tmp_i++){ ?>
<?php if($__Context->tmp_i == $__Context->tmparr7[11]-1){ ?>
<?php  $__Context->temp_html .= "<span class='inside_end'>".$__Context->title_disp.$__Context->tmparr7[9]."</span>"; ?>
<?php }else{ ?>
<?php  $__Context->temp_html .= "<span class='inside'>".$__Context->title_disp."</span>"; ?>
<?php } ?>
<?php } ?>
<?php  $__Context->temp_html .= "</span>"."</a>"; ?>
<?php } ?>
<?php } ?>
<?php if( $__Context->tmparr7[11] == 1 && $__Context->ind_oneday_container == 'T' && $__Context->pOption != 'W1' && $__Context->pOption != 'W2' ){ ?>
<?php  $__Context->tbl_html .= "<div class='drag'>".$__Context->temp_html."</div>"; ?>
<?php }else{ ?>
<?php if($__Context->tmparr7[11] > 1 || $__Context->pOption == 'W1' || $__Context->pOption == 'W2' || $__Context->ind_oneday_container == 'J' ){ ?>
<?php 
$__Context->segtype = "a";
$__Context->schedule_html[$__Context->count_seg]['week'] = $__Context->i; //week seq
$__Context->schedule_html[$__Context->count_seg]['weekday'] = $__Context->j; //컬럼 순서
$__Context->schedule_html[$__Context->count_seg]['yymmdd'] = $__Context->Calmain[$__Context->i][$__Context->j];
$__Context->schedule_html[$__Context->count_seg]['month'] = $__Context->Calmain_MM;
$__Context->schedule_html[$__Context->count_seg]['date'] = $__Context->Calmain_DD;
$__Context->schedule_html[$__Context->count_seg]['revseq'] = 7-$__Context->tmparr7[11];
$__Context->schedule_html[$__Context->count_seg]['segtype'] = $__Context->segtype;
$__Context->schedule_html[$__Context->count_seg]['length'] = $__Context->tmparr7[11];
$__Context->schedule_html[$__Context->count_seg]['image'] = $__Context->tmparr7[10];
$__Context->schedule_html[$__Context->count_seg]['pln_srl'] = $__Context->tmparr7[12];
$__Context->schedule_html[$__Context->count_seg]['pln_start'] = $__Context->tmparr7[13];
$__Context->schedule_html[$__Context->count_seg]['pln_end'] = $__Context->tmparr7[14];
$__Context->schedule_html[$__Context->count_seg]['pln_stime'] = $__Context->time_start;
$__Context->schedule_html[$__Context->count_seg]['pln_etime'] = $__Context->time_end;
$__Context->schedule_html[$__Context->count_seg]['html'] = $__Context->temp_html;
$__Context->count_seg += 1;
 ?>
<?php }else{ ?>
<?php  $__Context->tbl_html .= "<div class='drag'>".$__Context->temp_html."</div>"; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php  $__Context->holiday_process = "js"; ?>
<?php if($__Context->ind_holiday == 'Y' && $__Context->tmparr4[0]){ ?>
<?php  $__Context->temp_html = "<div class='holiday strong holiday_bottomline'>".$__Context->tmparr4[0]."</div>"; ?>
<?php if( $__Context->pOption != 'W1' && $__Context->pOption != 'W2' ){ ?>
<?php  $__Context->tbl_html .= $__Context->temp_html; ?>
<?php }else{ ?>
<?php if($__Context->holiday_process =="js"){ ?>
<?php 
$__Context->schedule_html[$__Context->count_seg]['week'] = $__Context->i; //week seq
$__Context->schedule_html[$__Context->count_seg]['weekday'] = $__Context->j;  //컬럼 순서
$__Context->schedule_html[$__Context->count_seg]['yymmdd'] = $__Context->Calmain[$__Context->i][$__Context->j];
$__Context->schedule_html[$__Context->count_seg]['month'] = $__Context->Calmain_MM;
$__Context->schedule_html[$__Context->count_seg]['date'] = $__Context->Calmain_DD;
$__Context->schedule_html[$__Context->count_seg]['revseq'] = 6;
$__Context->schedule_html[$__Context->count_seg]['segtype'] ="b";
$__Context->schedule_html[$__Context->count_seg]['length'] = 1;
$__Context->schedule_html[$__Context->count_seg]['image'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_srl'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_start'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_end'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_stime'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_etime'] = "";
$__Context->schedule_html[$__Context->count_seg]['html'] = $__Context->temp_html;
$__Context->count_seg += 1;
 ?>
<?php }else{ ?>
<?php  $__Context->tbl_html .= $__Context->temp_html; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($__Context->ind_memday == 'Y' && !empty($__Context->tmparr5[0])){ ?>
<?php  $__Context->temp_html =  "<div class ='memorial memday_bottomline'>".$__Context->tmparr5[0]."</div>"; ?>
<?php if( $__Context->pOption != 'W1' && $__Context->pOption != 'W2' ){ ?>
<?php  $__Context->tbl_html .= $__Context->temp_html; ?>
<?php }else{ ?>
<?php if($__Context->holiday_process =="js"){ ?>
<?php 
$__Context->schedule_html[$__Context->count_seg]['week'] = $__Context->i; //week seq
$__Context->schedule_html[$__Context->count_seg]['weekday'] = $__Context->j;  //컬럼 순서
$__Context->schedule_html[$__Context->count_seg]['yymmdd'] = $__Context->Calmain[$__Context->i][$__Context->j];
$__Context->schedule_html[$__Context->count_seg]['month'] = $__Context->Calmain_MM;
$__Context->schedule_html[$__Context->count_seg]['date'] = $__Context->Calmain_DD;
$__Context->schedule_html[$__Context->count_seg]['revseq'] = 6;
$__Context->schedule_html[$__Context->count_seg]['segtype'] ="c";
$__Context->schedule_html[$__Context->count_seg]['length'] = 1;
$__Context->schedule_html[$__Context->count_seg]['image'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_srl'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_start'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_end'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_stime'] = "";
$__Context->schedule_html[$__Context->count_seg]['pln_etime'] = "";
$__Context->schedule_html[$__Context->count_seg]['html'] = $__Context->temp_html;
$__Context->count_seg += 1;
 ?>
<?php }else{ ?>
<?php  $__Context->tbl_html .= $__Context->temp_html; ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($__Context->is_offday && $__Context->ind_offday_Label){ ?>
<?php  $__Context->temp_html = "<div class='offday strong'>".$__Context->lang->pln_off_day."</div>"; ?>
<?php  $__Context->tbl_html .= $__Context->temp_html; ?>
<?php } ?>
<?php  $__Context->tbl_html .= "</div>"; ?>
<?php } ?>
<?php  $__Context->tbl_html .= "</div>"; ?>
<?php  $__Context->tbl_html .= "</td>\n"; ?>
<?php } ?>
<?php  $__Context->tbl_html .= "</tr>\n"; ?>
<?php } ?>
<?php  $__Context->tbl_html .= "</tbody>"; ?>
<?php  $__Context->tbl_html .= "</table>"; ?>
<?php  echo $__Context->tbl_html ?>
<?php if($__Context->display_offset != $__Context->offset && $__Context->offset != null && $__Context->device != printer ){ ?>
<div class="client_time">
Server time is <font color='blue'><?php echo date("l, F j, Y, g:i a", $__Context->display_timestamp) ?></font>
and your time is <font color='blue'><?php echo date("l, F j, Y, g:i a", $__Context->client_timestamp) ?></font> : <?php echo ($__Context->display_timestamp-$__Context->client_timestamp)*(-1)/3600 ?>Hrs difference.
</div>
<?php } ?>
<?php if($__Context->pOption == 'W1' && $__Context->pTimeSchedule == 'Y' || $__Context->pOption == 'W2' && $__Context->pTimeSchedule == 'Y' ){ ?>
<div class="Timetable_div" ID="Timetable_div"></div>
<?php } ?>
<div id='dummy' style='visibility:hidden; position:absolute; top:0px; left:-200px;'></div>
</div>
<?php if($__Context->grant->manager){ ?>
<?php if($__Context->module_info->display_doc_list != "N"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.list_planner.html') ?>
<?php } ?>
<?php }else{ ?>
<?php $__Context->write_ymd = date('Y',$__Context->wrk_timestamp).date('m',$__Context->wrk_timestamp).date('d',$__Context->wrk_timestamp) ?>
<div class="buttonRight" style="float:right;">
<a href="<?php echo getUrl('act','dispBoardWrite','document_srl','','extra_vars1',$__Context->write_ymd) ?>" class="buttonOfficial"><span><?php echo $__Context->lang->cmd_write ?></span></a>
</div>
<?php } ?>
<?php if($__Context->schedule_html){ ?>
<?php  $__Context->schedule_html = planner123_main::fn_array_orderby($__Context->schedule_html, 'segtype', SORT_ASC, 'date', SORT_ASC, 'revseq', SORT_ASC, 'pln_stime', SORT_ASC, 'pln_srl', SORT_DESC); ?>
<?php } ?>
<?php if(!function_exists('json_encode')){ ?>
<?php if(!class_exists("Services_JSON")){ ?>
<?php  require_once($__Context->skinpath.'function/class.services_JSON.php'); ?>
<?php } ?>
<?php 
$__Context->json = new Services_JSON;
$__Context->schedule_html_json = $__Context->json->encode($__Context->schedule_html);
 ?>
<?php }else{ ?>
<?php  $__Context->schedule_html_json = json_encode($__Context->schedule_html); ?>
<?php } ?>
<script type="text/javascript">
//<![CDATA[
/* 일정 출력 xx*/
var arrayFromPHP = <?php  echo $__Context->schedule_html_json ?>; // PHP에서 만든 일정 어레이를 받아서(V560)
var repeat_style = "<?php echo $__Context->ind_repeat_style ?>";
var ind_pOption = "<?php echo $__Context->pOption ?>";
var ind_mobile = "<?php echo $__Context->ind_mobile ?>";
var dispStart_stamp = "<?php echo $__Context->dispStart_stamp ?>";
var dispEnd_stamp = "<?php echo $__Context->dispEnd_stamp ?>";
var dispStart_date = "<?php echo $__Context->dispStart_date ?>";
var dispEnd_date = "<?php echo $__Context->dispEnd_date ?>";
var ind_Timetable = "<?php echo $__Context->pTimeSchedule ?>"; // display time-table
var lang_type = "<?php echo $__Context->lang_type ?>";
var adjust_title_color = "<?php echo $__Context->adjust_title_color ?>";
jQuery(function($){
$(document).ready(function() {
doDisplaySchedule(arrayFromPHP,repeat_style,ind_mobile);   // make schedule on the calendar table
if ((ind_pOption == 'W1' || ind_pOption == 'W2') && ind_Timetable == 'Y' ) {
fnMakeTableGrid(dispStart_date,dispEnd_date,ind_mobile,lang_type); // grid time table
fnMakeWeeklySchedule(arrayFromPHP,dispStart_stamp,dispEnd_stamp); // make schedule in the time table
fnAdjTimeTable(); // adjust time table header
}
});
/* windows resize일때 일정폭 재계산 (별의미없음)*/
$(window).resize(function() {
doResizeScheduleWidth(arrayFromPHP);
});
/* blinker*/
function blinker() {
$('.blink_me').fadeOut(300);
$('.blink_me').fadeIn(300);
}
setInterval(blinker, 1800);
});
//]]>
</script>
