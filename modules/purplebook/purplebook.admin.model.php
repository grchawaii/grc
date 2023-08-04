<?php
/**
 * vi:set sw=4 ts=4 noexpandtab fileencoding=utf-8:
 * @class  purplebookAdminModel
 * @author wiley@nurigo.net
 * @brief  purplebookAdminModel
 */
class purplebookAdminModel extends purplebook
{
	function getPurplebookAdminDeleteModInst() {
		$oModuleModel = &getModel('module');

		$module_srl = Context::get('module_srl');
		$module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
		Context::set('module_info', $module_info);

		$oTemplate = &TemplateHandler::getInstance();
		$tpl = $oTemplate->compile($this->module_path.'tpl', 'form_delete_modinst');
		$this->add('tpl', str_replace("\n"," ",$tpl));
	}
}
/* End of file purplebook.admin.model.php */
/* Location: ./modules/purplebook/purplebook.admin.model.php */

