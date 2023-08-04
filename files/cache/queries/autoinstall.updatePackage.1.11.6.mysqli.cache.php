<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path6_argument'} = new Argument('path', $args->{'path'});
${'path6_argument'}->checkNotNull();
if(!${'path6_argument'}->isValid()) return ${'path6_argument'}->getErrorMessage();
if(${'path6_argument'} !== null) ${'path6_argument'}->setColumnType('varchar');

${'have_instance7_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance7_argument'}->checkNotNull();
if(!${'have_instance7_argument'}->isValid()) return ${'have_instance7_argument'}->getErrorMessage();
if(${'have_instance7_argument'} !== null) ${'have_instance7_argument'}->setColumnType('char');

${'updatedate8_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate8_argument'}->checkNotNull();
if(!${'updatedate8_argument'}->isValid()) return ${'updatedate8_argument'}->getErrorMessage();
if(${'updatedate8_argument'} !== null) ${'updatedate8_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl9_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl9_argument'}->checkFilter('number');
if(!${'category_srl9_argument'}->isValid()) return ${'category_srl9_argument'}->getErrorMessage();
} else
${'category_srl9_argument'} = NULL;if(${'category_srl9_argument'} !== null) ${'category_srl9_argument'}->setColumnType('number');

${'latest_item_srl10_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl10_argument'}->checkNotNull();
if(!${'latest_item_srl10_argument'}->isValid()) return ${'latest_item_srl10_argument'}->getErrorMessage();
if(${'latest_item_srl10_argument'} !== null) ${'latest_item_srl10_argument'}->setColumnType('number');

${'version11_argument'} = new Argument('version', $args->{'version'});
${'version11_argument'}->checkNotNull();
if(!${'version11_argument'}->isValid()) return ${'version11_argument'}->getErrorMessage();
if(${'version11_argument'} !== null) ${'version11_argument'}->setColumnType('varchar');

${'package_srl12_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl12_argument'}->checkNotNull();
${'package_srl12_argument'}->createConditionValue();
if(!${'package_srl12_argument'}->isValid()) return ${'package_srl12_argument'}->getErrorMessage();
if(${'package_srl12_argument'} !== null) ${'package_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path6_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance7_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate8_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl9_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl10_argument'})
,new UpdateExpression('`version`', ${'version11_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl12_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>