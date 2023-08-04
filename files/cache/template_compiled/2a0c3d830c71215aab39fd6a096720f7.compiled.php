<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout_sub.css--><?php $__tmp=array('layouts/layout_XENARA BIZ LAYOUT_v1.0/css/layout_sub.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->header_subcontent1 || $__Context->layout_info->header_subcontent1_background){ ?>
<div id="visual">
  <?php echo $__Context->layout_info->header_subcontent1 ?>
</div>
<?php } ?>
<div id="content">
	<table width="980" border="0" cellpadding="0" cellspacing="0" id="center">
  <tbody><tr>
  <td align="left" valign="top" id="left">
    <?php if($__Context->layout_info->left_menu1_inherit_type=='N'){ ?>
      <?php  $__Context->idx = 1 ?>
      <?php if($__Context->left_menu1->list&&count($__Context->left_menu1->list))foreach($__Context->left_menu1->list as $__Context->key => $__Context->val){ ?>
        <?php if($__Context->val['selected']){ ?>
          <?php  $__Context->left_menu1_1st = $__Context->val ?>
        <?php } ?>
        <table><tbody><tr><td>
          <h2>
            <span class="left_selected_menu"><?php echo $__Context->val['text'] ?></span>
          </h2>
          <?php if($__Context->val['list']){ ?><div class="left_menu">
            <ul class="second_list">
              <?php  $__Context->idx2 = 1 ?>
              <?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->key2 => $__Context->val2){ ?>
                <?php if($__Context->val2['selected']){ ?>
                  <?php  $__Context->left_menu1_2nd = $__Context->val2 ?>
                <?php } ?>
                <li class="second_list second_list<?php echo $__Context->idx2;
if($__Context->val2['selected']){ ?> second_on active<?php } ?>">
                  <a href="<?php echo $__Context->val2['href'] ?>" <?php if($__Context->val2['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val2['text'] ?></a>
                </li>
                <?php if($__Context->val2['selected']){ ?>
                  <?php if($__Context->left_menu1_2nd['list']&&count($__Context->left_menu1_2nd['list']))foreach($__Context->left_menu1_2nd['list'] as $__Context->key3 => $__Context->val3){ ?>
                    <?php if($__Context->val3['selected']){ ?>
                      <?php  $__Context->left_menu1_3rd = $__Context->val3 ?>
                    <?php } ?>
                    <li class="third_list<?php if($__Context->val3['selected']){ ?> on active<?php } ?>">
                      <a href="<?php echo $__Context->val3['href'] ?>" <?php if($__Context->val3['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val3['text'] ?></a>
                    </li>
                  <?php } ?>
                <?php } ?>
                <?php  $__Context->idx2++ ?>
              <?php } ?>
            </ul>
          </div><?php } ?>
        </td></tr></tbody></table>
        <?php  $__Context->idx++ ?>
      <?php } ?>
    <?php }else{ ?>
    <table><tbody><tr><td>
    <h2>
      <span class="left_selected_menu"><?php echo $__Context->header_menu1_1st['text'] ?></span>
    </h2>
    <?php if($__Context->header_menu1_1st['list']){ ?><div class="left_menu">
      <ul class="second_list">
        <?php  $__Context->idx = 1 ?>
        <?php if($__Context->header_menu1_1st['list']&&count($__Context->header_menu1_1st['list']))foreach($__Context->header_menu1_1st['list'] as $__Context->key => $__Context->val){ ?>
          <?php if($__Context->val['selected']){ ?>
            <?php  $__Context->header_menu1_2nd = $__Context->val ?>
          <?php } ?>
          <li class="second_list second_list<?php echo $__Context->idx;
if($__Context->val['selected']){ ?> second_on active<?php } ?>">
            <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['text'] ?></a>
          </li>
          <?php if($__Context->val['selected']){ ?>
          <?php if($__Context->header_menu1_2nd['list']&&count($__Context->header_menu1_2nd['list']))foreach($__Context->header_menu1_2nd['list'] as $__Context->key2 => $__Context->val2){ ?>
            <?php if($__Context->val2['selected']){ ?>
              <?php  $__Context->header_menu1_3rd = $__Context->val2 ?>
            <?php } ?>
            <li class="third_list<?php if($__Context->val2['selected']){ ?> on active<?php } ?>">
              <a href="<?php echo $__Context->val2['href'] ?>" <?php if($__Context->val2['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val2['text'] ?></a>
            </li>
          <?php } ?>
          <?php } ?>
          <?php  $__Context->idx++ ?>
        <?php } ?>
      </ul>
    </div><?php } ?>
    </td></tr></tbody></table>
    <?php } ?>
    <?php if($__Context->layout_info->left_subcontent1){ ?>
    <table><tbody><tr><td>
    <div class="left_subcontent1">
      <?php echo $__Context->layout_info->left_subcontent1 ?>
    </div>
    </td></tr></tbody></table>
    <?php } ?>
	</td>
  <td id="doucument" align="left" valign="top">
  	<div id="title">
      <h2>
        <?php if($__Context->header_menu1_3rd['selected']){ ?>
          <span class="right_selected_menu"><?php echo $__Context->header_menu1_3rd['text'] ?></span>
        <?php }else if($__Context->header_menu1_2nd['selected']){ ?>
          <span class="right_selected_menu"><?php echo $__Context->header_menu1_2nd['text'] ?></span>
        <?php } ?>
      </h2>
      <ul id="navi">
        <li>HOME</li>
        <li><?php echo $__Context->header_menu1_1st['text'] ?></li>
        <?php if($__Context->header_menu1_2nd){ ?>
        <li><?php echo $__Context->header_menu1_2nd['text'] ?></li>
        <?php } ?>
        <?php if($__Context->header_menu1_3rd){ ?>
        <li><?php echo $__Context->header_menu1_3rd['text'] ?></li>
        <?php } ?>
      </ul>
    </div>
    <div class="blank"></div>
    <div class="content">
      <?php echo $__Context->content ?>
    </div>
  </td>
  </tr></tbody>
  </table>
</div>
