<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl37_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl37_argument'}->checkFilter('number');
${'module_srl37_argument'}->checkNotNull();
${'module_srl37_argument'}->createConditionValue();
if(!${'module_srl37_argument'}->isValid()) return ${'module_srl37_argument'}->getErrorMessage();
if(${'module_srl37_argument'} !== null) ${'module_srl37_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl38_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl38_argument'}->createConditionValue();
if(!${'category_srl38_argument'}->isValid()) return ${'category_srl38_argument'}->getErrorMessage();
} else
${'category_srl38_argument'} = NULL;if(${'category_srl38_argument'} !== null) ${'category_srl38_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList39_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList39_argument'}->createConditionValue();
if(!${'statusList39_argument'}->isValid()) return ${'statusList39_argument'}->getErrorMessage();
} else
${'statusList39_argument'} = NULL;if(${'statusList39_argument'} !== null) ${'statusList39_argument'}->setColumnType('varchar');

${'list_count42_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count42_argument'}->ensureDefaultValue('20');
if(!${'list_count42_argument'}->isValid()) return ${'list_count42_argument'}->getErrorMessage();

${'sort_index40_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index40_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index40_argument'}->isValid()) return ${'sort_index40_argument'}->getErrorMessage();

${'order_type41_argument'} = new SortArgument('order_type41', $args->order_type);
${'order_type41_argument'}->ensureDefaultValue('asc');
if(!${'order_type41_argument'}->isValid()) return ${'order_type41_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl37_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl38_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList39_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index40_argument'}, $order_type41_argument)
));
$query->setLimit(new Limit(${'list_count42_argument'}));
return $query; ?>