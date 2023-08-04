<?php if(!defined("__XE__"))exit;?><ul class="widgetGalleryA" style="width:<?php echo $__Context->widget_info->cols_list_count*($__Context->widget_info->thumbnail_width) ?>px;">
<?php $__Context->_idx=0 ?>
    <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
    <li<?php if($__Context->_idx>0 && $__Context->_idx % $__Context->widget_info->cols_list_count==0){ ?> class="clearLeft"<?php } ?> style="<?php if($__Context->_idx >= $__Context->widget_info->list_count){ ?>display:none;<?php } ?>width:<?php echo $__Context->widget_info->thumbnail_width ?>px;">
        <?php if($__Context->widget_info->option_view_arr&&count($__Context->widget_info->option_view_arr))foreach($__Context->widget_info->option_view_arr as $__Context->k => $__Context->v){ ?>
            <?php if($__Context->v=='thumbnail'){ ?>
                <a href="<?php echo $__Context->item->getLink() ?>" class="thumb" style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;height:<?php echo $__Context->widget_info->thumbnail_height ?>px"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>>
                    <?php if($__Context->item->getThumbnail()){ ?>
                        <img src="<?php echo $__Context->item->getThumbnail() ?>" style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;height:<?php echo $__Context->widget_info->thumbnail_height ?>px"/>
                    <?php }else{ ?>
                        <span class="imgNone"><?php echo $__Context->lang->none_image ?></span>
                    <?php } ?>
                <?php if($__Context->widget_info->show_browser_title=='Y' && $__Context->item->getBrowserTitle()){ ?>
                    <strong class="board"><?php echo $__Context->item->getBrowserTitle() ?></strong>
                <?php } ?>
                <?php if($__Context->widget_info->show_category=='Y' && $__Context->item->getCategory()){ ?>
                    <strong class="category"><?php echo $__Context->item->getCategory() ?></strong>
                <?php } ?>
                </a>
            <?php }else if($__Context->v=='title'){ ?>
                <a href="<?php echo $__Context->item->getLink() ?>" class="title"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
                <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
                    <em class="replyNum" title="Replies"><a href="<?php echo $__Context->item->getLink() ?>#comment"><?php echo $__Context->item->getCommentCount() ?></a></em>
                <?php } ?>
                <?php if($__Context->widget_info->show_trackback_count=='Y' && $__Context->item->getTrackbackCount()){ ?>
                    <em class="trackbackNum" title="Trackbacks"><a href="<?php echo $__Context->item->getLink() ?>#trackback"><?php echo $__Context->item->getTrackbackCount() ?></a></em>
                <?php } ?>
                <?php if($__Context->widget_info->show_icon=='Y'){ ?>
                    <span class="icon"><?php echo $__Context->item->printExtraImages() ?></span>
                <?php } ?>
        <?php }else if($__Context->v=='nickname'){ ?>
            <a href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"><?php echo $__Context->item->getNickName() ?></a>
        <?php }else if($__Context->v=='regdate'){ ?>
            <span class="date"><?php echo $__Context->item->getRegdate("Y-m-d") ?></span> <span class="hour"><?php echo $__Context->item->getRegdate("H:i") ?></span>
        <?php } ?>
    <?php } ?>
    </li>
    <?php $__Context->_idx++ ?>
    <?php } ?>
</ul>
<?php if($__Context->widget_info->page_count > 1 && $__Context->widget_info->list_count<$__Context->_idx){ ?>
<ul class="widgetNavigator">
    <li><button type="button" class="prev" title="<?php echo $__Context->lang->cmd_prev ?>" onclick="content_widget_prev(jQuery(this).parents('ul.widgetNavigator').prev('ul.widgetGalleryA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_prev ?></span></button></li>
    <li><button type="button" class="next" title="<?php echo $__Context->lang->cmd_next ?>" onclick="content_widget_next(jQuery(this).parents('ul.widgetNavigator').prev('ul.widgetGalleryA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_next ?></span></button></li>
</ul>
<?php } ?>
