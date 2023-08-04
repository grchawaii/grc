<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl14_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl14_argument'}->checkFilter('number');
${'package_srl14_argument'}->checkNotNull();
if(!${'package_srl14_argument'}->isValid()) return ${'package_srl14_argument'}->getErrorMessage();
if(${'package_srl14_argument'} !== null) ${'package_srl14_argument'}->setColumnType('number');

${'version15_argument'} = new Argument('version', $args->{'version'});
${'version15_argument'}->checkNotNull();
if(!${'version15_argument'}->isValid()) return ${'version15_argument'}->getErrorMessage();
if(${'version15_argument'} !== null) ${'version15_argument'}->setColumnType('varchar');

${'current_version16_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version16_argument'}->checkNotNull();
if(!${'current_version16_argument'}->isValid()) return ${'current_version16_argument'}->getErrorMessage();
if(${'current_version16_argument'} !== null) ${'current_version16_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update17_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update17_argument'}->isValid()) return ${'need_update17_argument'}->getErrorMessage();
} else
${'need_update17_argument'} = NULL;if(${'need_update17_argument'} !== null) ${'need_update17_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl14_argument'})
,new InsertExpression('`version`', ${'version15_argument'})
,new InsertExpression('`current_version`', ${'current_version16_argument'})
,new InsertExpression('`need_update`', ${'need_update17_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>