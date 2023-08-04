<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl13_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl13_argument'}->checkFilter('number');
${'package_srl13_argument'}->checkNotNull();
if(!${'package_srl13_argument'}->isValid()) return ${'package_srl13_argument'}->getErrorMessage();
if(${'package_srl13_argument'} !== null) ${'package_srl13_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl14_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl14_argument'}->checkFilter('number');
if(!${'category_srl14_argument'}->isValid()) return ${'category_srl14_argument'}->getErrorMessage();
} else
${'category_srl14_argument'} = NULL;if(${'category_srl14_argument'} !== null) ${'category_srl14_argument'}->setColumnType('number');

${'path15_argument'} = new Argument('path', $args->{'path'});
${'path15_argument'}->checkNotNull();
if(!${'path15_argument'}->isValid()) return ${'path15_argument'}->getErrorMessage();
if(${'path15_argument'} !== null) ${'path15_argument'}->setColumnType('varchar');

${'have_instance16_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance16_argument'}->checkNotNull();
if(!${'have_instance16_argument'}->isValid()) return ${'have_instance16_argument'}->getErrorMessage();
if(${'have_instance16_argument'} !== null) ${'have_instance16_argument'}->setColumnType('char');

${'updatedate17_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate17_argument'}->checkNotNull();
if(!${'updatedate17_argument'}->isValid()) return ${'updatedate17_argument'}->getErrorMessage();
if(${'updatedate17_argument'} !== null) ${'updatedate17_argument'}->setColumnType('date');

${'latest_item_srl18_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl18_argument'}->checkNotNull();
if(!${'latest_item_srl18_argument'}->isValid()) return ${'latest_item_srl18_argument'}->getErrorMessage();
if(${'latest_item_srl18_argument'} !== null) ${'latest_item_srl18_argument'}->setColumnType('number');

${'version19_argument'} = new Argument('version', $args->{'version'});
${'version19_argument'}->checkNotNull();
if(!${'version19_argument'}->isValid()) return ${'version19_argument'}->getErrorMessage();
if(${'version19_argument'} !== null) ${'version19_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl13_argument'})
,new InsertExpression('`category_srl`', ${'category_srl14_argument'})
,new InsertExpression('`path`', ${'path15_argument'})
,new InsertExpression('`have_instance`', ${'have_instance16_argument'})
,new InsertExpression('`updatedate`', ${'updatedate17_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl18_argument'})
,new InsertExpression('`version`', ${'version19_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>