<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackage");
$query->setAction("select");
$query->setPriority("");

${'package_srl5_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl5_argument'}->checkFilter('number');
${'package_srl5_argument'}->checkNotNull();
${'package_srl5_argument'}->createConditionValue();
if(!${'package_srl5_argument'}->isValid()) return ${'package_srl5_argument'}->getErrorMessage();
if(${'package_srl5_argument'} !== null) ${'package_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>