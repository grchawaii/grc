<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMids");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl28_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl28_argument'}->createConditionValue();
if(!${'site_srl28_argument'}->isValid()) return ${'site_srl28_argument'}->getErrorMessage();
} else
${'site_srl28_argument'} = NULL;if(${'site_srl28_argument'} !== null) ${'site_srl28_argument'}->setColumnType('number');
if(isset($args->module_srls)) {
${'module_srls29_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls29_argument'}->createConditionValue();
if(!${'module_srls29_argument'}->isValid()) return ${'module_srls29_argument'}->getErrorMessage();
} else
${'module_srls29_argument'} = NULL;if(${'module_srls29_argument'} !== null) ${'module_srls29_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`site_srl`')
,new SelectExpression('`modules`.`module_srl`')
,new SelectExpression('`modules`.`mid`')
,new SelectExpression('`modules`.`browser_title`')
,new SelectExpression('`sites`.`domain`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new JoinTable('`xe_sites`', '`sites`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`site_srl`',$site_srl28_argument,"equal", 'and')
,new ConditionWithArgument('`modules`.`module_srl`',$module_srls29_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>