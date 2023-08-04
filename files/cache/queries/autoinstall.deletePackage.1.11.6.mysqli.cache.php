<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path20_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path20_argument'}->checkNotNull();
${'path20_argument'}->createConditionValue();
if(!${'path20_argument'}->isValid()) return ${'path20_argument'}->getErrorMessage();
if(${'path20_argument'} !== null) ${'path20_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path20_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>