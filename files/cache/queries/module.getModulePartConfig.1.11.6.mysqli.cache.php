<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module24_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module24_argument'}->checkNotNull();
${'module24_argument'}->createConditionValue();
if(!${'module24_argument'}->isValid()) return ${'module24_argument'}->getErrorMessage();
if(${'module24_argument'} !== null) ${'module24_argument'}->setColumnType('varchar');

${'module_srl25_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl25_argument'}->checkNotNull();
${'module_srl25_argument'}->createConditionValue();
if(!${'module_srl25_argument'}->isValid()) return ${'module_srl25_argument'}->getErrorMessage();
if(${'module_srl25_argument'} !== null) ${'module_srl25_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module24_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl25_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>