<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/css/mlang.css--><?php $__tmp=array('modules/module/tpl/css/mlang.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2>Select Your Language</h2>
	</div>
	<ul class="gn">
	<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?>
		<?php if($__Context->key != $__Context->lang_type){ ?>
		<li><a href="<?php echo escape(getUrl('act',$__Context->oldact,'l',$__Context->key), false) ?>"><?php echo escape($__Context->val, false) ?></a></li>
		<?php }else{ ?>
		<li><strong><?php echo escape($__Context->val, false) ?></strong></li>
		<?php } ?>
	<?php } ?>
	</ul>
</div>
