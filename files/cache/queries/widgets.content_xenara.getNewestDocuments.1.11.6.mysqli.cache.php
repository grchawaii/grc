<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl50_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl50_argument'}->checkFilter('number');
${'module_srl50_argument'}->checkNotNull();
${'module_srl50_argument'}->createConditionValue();
if(!${'module_srl50_argument'}->isValid()) return ${'module_srl50_argument'}->getErrorMessage();
if(${'module_srl50_argument'} !== null) ${'module_srl50_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl51_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl51_argument'}->createConditionValue();
if(!${'category_srl51_argument'}->isValid()) return ${'category_srl51_argument'}->getErrorMessage();
} else
${'category_srl51_argument'} = NULL;if(${'category_srl51_argument'} !== null) ${'category_srl51_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList52_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList52_argument'}->createConditionValue();
if(!${'statusList52_argument'}->isValid()) return ${'statusList52_argument'}->getErrorMessage();
} else
${'statusList52_argument'} = NULL;if(${'statusList52_argument'} !== null) ${'statusList52_argument'}->setColumnType('varchar');

${'list_count55_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count55_argument'}->ensureDefaultValue('20');
if(!${'list_count55_argument'}->isValid()) return ${'list_count55_argument'}->getErrorMessage();

${'sort_index53_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index53_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index53_argument'}->isValid()) return ${'sort_index53_argument'}->getErrorMessage();

${'order_type54_argument'} = new SortArgument('order_type54', $args->order_type);
${'order_type54_argument'}->ensureDefaultValue('asc');
if(!${'order_type54_argument'}->isValid()) return ${'order_type54_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl50_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl51_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList52_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index53_argument'}, $order_type54_argument)
));
$query->setLimit(new Limit(${'list_count55_argument'}));
return $query; ?>