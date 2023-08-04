<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCounterLog");
$query->setAction("select");
$query->setPriority("");

${'site_srl19_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl19_argument'}->ensureDefaultValue('0');
${'site_srl19_argument'}->createConditionValue();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress20_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress20_argument'}->createConditionValue();
if(!${'ipaddress20_argument'}->isValid()) return ${'ipaddress20_argument'}->getErrorMessage();
} else
${'ipaddress20_argument'} = NULL;if(${'ipaddress20_argument'} !== null) ${'ipaddress20_argument'}->setColumnType('varchar');

${'regdate21_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate21_argument'}->checkNotNull();
${'regdate21_argument'}->createConditionValue();
if(!${'regdate21_argument'}->isValid()) return ${'regdate21_argument'}->getErrorMessage();
if(${'regdate21_argument'} !== null) ${'regdate21_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl19_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress20_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate21_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>