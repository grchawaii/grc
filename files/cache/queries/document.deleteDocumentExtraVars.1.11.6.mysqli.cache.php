<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->checkNotNull();
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl10_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl10_argument'}->checkFilter('number');
${'document_srl10_argument'}->createConditionValue();
if(!${'document_srl10_argument'}->isValid()) return ${'document_srl10_argument'}->getErrorMessage();
} else
${'document_srl10_argument'} = NULL;if(${'document_srl10_argument'} !== null) ${'document_srl10_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx11_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx11_argument'}->checkFilter('number');
${'var_idx11_argument'}->createConditionValue();
if(!${'var_idx11_argument'}->isValid()) return ${'var_idx11_argument'}->getErrorMessage();
} else
${'var_idx11_argument'} = NULL;if(${'var_idx11_argument'} !== null) ${'var_idx11_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code12_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code12_argument'}->createConditionValue();
if(!${'lang_code12_argument'}->isValid()) return ${'lang_code12_argument'}->getErrorMessage();
} else
${'lang_code12_argument'} = NULL;if(${'lang_code12_argument'} !== null) ${'lang_code12_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid13_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid13_argument'}->createConditionValue();
if(!${'eid13_argument'}->isValid()) return ${'eid13_argument'}->getErrorMessage();
} else
${'eid13_argument'} = NULL;if(${'eid13_argument'} !== null) ${'eid13_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl10_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx11_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code12_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>