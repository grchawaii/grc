<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->member_info ?></h1>
</div>
<table class="x_table x_table-striped x_table-hover">
	<tr>
		<th style="width:120px"><?php echo $__Context->lang->signup_date ?></th>
		<td><?php echo escape(zdate($__Context->memberInfo[regdate],"Y-m-d"), false) ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->last_login ?></th>
		<td><?php echo escape(zdate($__Context->memberInfo[last_login],"Y-m-d H:i:s"), false) ?></td>
	</tr>
	<?php if($__Context->displayDatas&&count($__Context->displayDatas))foreach($__Context->displayDatas as $__Context->item){ ?><tr>
		<th scope="row" ><?php if($__Context->item->required || $__Context->item->mustRequired){ ?><em style="color:red">*</em><?php } ?> <?php echo escape($__Context->item->title, false) ?></th>
		<td class="text"><?php echo escape($__Context->item->value, false) ?></td>
	</tr><?php } ?>
	<tr>
		<th scope="row"><?php echo $__Context->lang->member_group ?></th>
		<td class="text"><?php echo escape(implode(', ', $__Context->memberInfo['group_list']), false) ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->allow_mailing ?></th>
		<td class="text"><?php if($__Context->memberInfo['allow_mailing'] == 'Y'){;
echo $__Context->lang->cmd_yes;
}else{;
echo $__Context->lang->cmd_no;
} ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->allow_message ?></th>
		<td class="text"><?php echo $__Context->lang->allow_message_type[$__Context->memberInfo['allow_message']] ?></td>
	</tr>
	<?php if($__Context->memberInfo['is_admin'] == 'Y'){ ?><tr>
		<th scope="row"><?php echo $__Context->lang->is_admin ?></th>
		<td class="text"><?php echo $__Context->lang->cmd_yes ?></td>
	</tr><?php } ?>
	<tr>
		<th scope="row"><?php echo $__Context->lang->member_group ?></th>
		<td class="text"><?php echo escape(implode(', ', $__Context->memberInfo['group_list']), false) ?></td>
	</tr>
	<?php if($__Context->memberInfo['description']){ ?><tr>
		<th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
		<td><?php echo escape($__Context->memberInfo['description'], false) ?>&nbsp;</td>
	</tr><?php } ?>
<style scoped>
.x_table th{text-align:right}
</style>
</table>
<div class="x_clearfix">
	<?php if($__Context->member_srl){ ?><span class="x_pull-left"><button class="x_btn" type="button" onclick="history.go(-1)"><?php echo $__Context->lang->cmd_back ?></button></span><?php } ?>
	<span class="x_pull-right"><a class="x_btn x_btn-primary" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert', 'member_srl', $__Context->member_srl), false) ?>"><?php echo $__Context->lang->cmd_modify ?></a></span>
</div>
