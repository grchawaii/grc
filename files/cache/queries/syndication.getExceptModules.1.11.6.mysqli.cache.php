<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModules");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`syndication_except_modules`.*')
,new SelectExpression('`modules`.`mid`', '`mid`')
,new SelectExpression('`modules`.`browser_title`', '`browser_title`')
));
$query->setTables(array(
new Table('`xe_syndication_except_modules`', '`syndication_except_modules`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`syndication_except_modules`.`module_srl`','`modules`.`module_srl`',"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>