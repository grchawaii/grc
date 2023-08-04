<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleCategorySrl)) {
${'moduleCategorySrl6_argument'} = new ConditionArgument('moduleCategorySrl', $args->moduleCategorySrl, 'in');
${'moduleCategorySrl6_argument'}->createConditionValue();
if(!${'moduleCategorySrl6_argument'}->isValid()) return ${'moduleCategorySrl6_argument'}->getErrorMessage();
} else
${'moduleCategorySrl6_argument'} = NULL;if(${'moduleCategorySrl6_argument'} !== null) ${'moduleCategorySrl6_argument'}->setColumnType('number');

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('title');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_categories`', '`module_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$moduleCategorySrl6_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "asc")
));
$query->setLimit();
return $query; ?>