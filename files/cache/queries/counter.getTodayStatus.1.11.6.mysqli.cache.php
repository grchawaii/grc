<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTodayStatus");
$query->setAction("select");
$query->setPriority("");

${'regdate18_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate18_argument'}->checkNotNull();
${'regdate18_argument'}->createConditionValue();
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>