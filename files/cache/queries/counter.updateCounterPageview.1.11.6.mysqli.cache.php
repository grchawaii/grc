<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview22_argument'} = new Argument('pageview', NULL);
${'pageview22_argument'}->setColumnOperation('+');
${'pageview22_argument'}->ensureDefaultValue(1);
if(!${'pageview22_argument'}->isValid()) return ${'pageview22_argument'}->getErrorMessage();
if(${'pageview22_argument'} !== null) ${'pageview22_argument'}->setColumnType('number');

${'regdate23_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate23_argument'}->checkNotNull();
${'regdate23_argument'}->createConditionValue();
if(!${'regdate23_argument'}->isValid()) return ${'regdate23_argument'}->getErrorMessage();
if(${'regdate23_argument'} !== null) ${'regdate23_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview22_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate23_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>