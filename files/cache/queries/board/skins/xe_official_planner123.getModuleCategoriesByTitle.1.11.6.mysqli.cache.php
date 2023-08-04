<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategoriesByTitle");
$query->setAction("select");
$query->setPriority("");

${'moduleCategoryTitle1_argument'} = new ConditionArgument('moduleCategoryTitle', $args->moduleCategoryTitle, 'equal');
${'moduleCategoryTitle1_argument'}->ensureDefaultValue('planner123-share');
${'moduleCategoryTitle1_argument'}->createConditionValue();
if(!${'moduleCategoryTitle1_argument'}->isValid()) return ${'moduleCategoryTitle1_argument'}->getErrorMessage();
if(${'moduleCategoryTitle1_argument'} !== null) ${'moduleCategoryTitle1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`modules`.`module`')
,new SelectExpression('`modules`.`mid`')
,new SelectExpression('`modules`.`browser_title`')
,new SelectExpression('`modules`.`module_srl`')
,new SelectExpression('`module_categories`.`title`', '`category`')
,new SelectExpression('`module_categories`.`module_category_srl`', '`module_category_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new JoinTable('`xe_module_categories`', '`module_categories`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module_categories`.`module_category_srl`','`modules`.`module_category_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_categories`.`title`',$moduleCategoryTitle1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>