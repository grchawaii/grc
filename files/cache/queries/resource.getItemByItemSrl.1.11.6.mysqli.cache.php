<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemByItemSrl");
$query->setAction("select");
$query->setPriority("");

${'item_srl3_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'in');
${'item_srl3_argument'}->checkFilter('numbers');
${'item_srl3_argument'}->checkNotNull();
${'item_srl3_argument'}->createConditionValue();
if(!${'item_srl3_argument'}->isValid()) return ${'item_srl3_argument'}->getErrorMessage();
if(${'item_srl3_argument'} !== null) ${'item_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_resource_items`', '`resource_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module_srl`','0',"more")
,new ConditionWithoutArgument('`package_srl`','0',"more", 'and')
,new ConditionWithArgument('`item_srl`',$item_srl3_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>