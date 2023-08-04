<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl30_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl30_argument'}->createConditionValue();
if(!${'module_srl30_argument'}->isValid()) return ${'module_srl30_argument'}->getErrorMessage();
} else
${'module_srl30_argument'} = NULL;if(${'module_srl30_argument'} !== null) ${'module_srl30_argument'}->setColumnType('number');
if(isset($args->module_srls)) {
${'module_srls31_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls31_argument'}->createConditionValue();
if(!${'module_srls31_argument'}->isValid()) return ${'module_srls31_argument'}->getErrorMessage();
} else
${'module_srls31_argument'} = NULL;if(${'module_srls31_argument'} !== null) ${'module_srls31_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl32_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl32_argument'}->createConditionValue();
if(!${'site_srl32_argument'}->isValid()) return ${'site_srl32_argument'}->getErrorMessage();
} else
${'site_srl32_argument'} = NULL;if(${'site_srl32_argument'} !== null) ${'site_srl32_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module33_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module33_argument'}->createConditionValue();
if(!${'module33_argument'}->isValid()) return ${'module33_argument'}->getErrorMessage();
} else
${'module33_argument'} = NULL;if(${'module33_argument'} !== null) ${'module33_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl34_argument'} = new ConditionArgument('module_category_srl', $args->module_category_srl, 'equal');
${'module_category_srl34_argument'}->createConditionValue();
if(!${'module_category_srl34_argument'}->isValid()) return ${'module_category_srl34_argument'}->getErrorMessage();
} else
${'module_category_srl34_argument'} = NULL;if(${'module_category_srl34_argument'} !== null) ${'module_category_srl34_argument'}->setColumnType('number');

${'sort_index35_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index35_argument'}->ensureDefaultValue('browser_title');
if(!${'sort_index35_argument'}->isValid()) return ${'sort_index35_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl30_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srls31_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl32_argument,"equal", 'and')
,new ConditionWithArgument('`module`',$module33_argument,"equal", 'and')
,new ConditionWithArgument('`module_category_srl`',$module_category_srl34_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index35_argument'}, "asc")
));
$query->setLimit();
return $query; ?>