<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/content_xenara/skins/widget_content_biz_layout_v1_0_w1/js/1depth_slide.js--><?php $__tmp=array('widgets/content_xenara/skins/widget_content_biz_layout_v1_0_w1/js/1depth_slide.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/content_xenara/skins/widget_content_biz_layout_v1_0_w1/css/widget.css--><?php $__tmp=array('widgets/content_xenara/skins/widget_content_biz_layout_v1_0_w1/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="widget_content_biz_layout_v1_0_w1">
    <div class="carouselWrap2">
      <div style="visibility:hidden;">
        <div class="prev2"></div>
        <div class="next2"></div>
        <?php  shuffle($__Context->widget_info->content_items) ?>
        <?php  $__Context->count = 1 ?>
        <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
          <?php if($__Context->count<=3){ ?>
          <?php if($__Context->item->getThumbnail()){ ?>
            <a class="thumb" href="#"><img class="iePngFix" src="<?php echo $__Context->item->getThumbnail() ?>" width="<?php echo $__Context->widget_info->thumbnail_width ?>" height="<?php echo $__Context->widget_info->thumbnail_height ?>" alt="<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?>" /></a>
          <?php }else{ ?>
            <a class="thumb" href="#"><img class="iePngFix" src="<?php echo $__Context->tpl_path ?>img/noimage.gif" width="<?php echo $__Context->widget_info->thumbnail_width ?>" height="<?php echo $__Context->widget_info->thumbnail_height ?>" alt="<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?>" /></a>
          <?php } ?>
          <?php  $__Context->count++ ?>
          <?php } ?>
        <?php } ?>
        <div class="centerTitle1">
          <div class="imageTitle2"></div>
          <div class="imageComment2"></div>
        </div>
      </div>	
    </div>
</div>
<script type="text/javascript">
        jQuery(window).load(function(){
            jQuery(".widget_content_biz_layout_v1_0_w1 .carouselWrap2").rotationCarousel( { 
                //반사 깊이
                refH: 0,
                //반사 이미지와의 여백
                refG:0,
                 //대제목
                imageT: jQuery('.widget_content_biz_layout_v1_0_w1 .imageTitle2'),
                //소제목
                imageC: jQuery('.widget_content_biz_layout_v1_0_w1 .imageComment2'),
                //가로폭 (강제조정시 #carouselWrap 넓이값보다 작게 입력해야함, default는 0)
                xRadius:300,
                //시점변경(값이 작으면 시점이 낮아집니다)
                yRadius:-20, 
                //x위치 지정(#carouselWrap 넓이값의 1/2 정도가 적당합니다. 원형중앙부터 좌표)	
                xPos: 220,
                //y위치 지정(#carouselWrap 높이값의 1/3 정도가 적당합니다. 이미지 맨 위쪽 기준)	
                yPos: 60,
                //회전속도 조정 (값이 작으면 느려지고 0이면 회전하지 않습니다)
                speed:0.10,
                //마우스휠 작동 여부(true=작동)
                mouseWheel:true,
                //버튼 여백(양쪽 끝에서부터 여백값)
                bothspace:0,
                titlespace:0,
                // no : 자동회전않음 , right : 오른쪽회전, left : 왼쪽회전
                autoRotate: 'left',
                // 회전딜레이값(1500=1.5초)
                autoRotateDelay:10000,            
                // 원근감(숫자가 작을수록 축소된이미지 작아짐)
                minScale:.7,                    
                //뒷쪽 이미지 원근감을 위해 약간 반투명처리 할려면 true
                //익스에서는 png투명 파일이 약간 번져 보일 수 있습니다.
                opacity:false,            
                //true=뒷쪽의 이미지를 클릭하면 앞으로 나옴
                bringToFront: false,            
                //왼쪽,오른쪽 버튼 변수 지정(수정하지 마세요)
                btnLeft: jQuery('.widget_content_biz_layout_v1_0_w1 .prev2'),
                btnRight: jQuery('.widget_content_biz_layout_v1_0_w1 .next2')            
            });
        });
</script>
