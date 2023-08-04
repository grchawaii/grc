<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLang");
$query->setAction("select");
$query->setPriority("");

${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->checkFilter('number');
${'site_srl11_argument'}->checkNotNull();
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name12_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name12_argument'}->createConditionValue();
if(!${'name12_argument'}->isValid()) return ${'name12_argument'}->getErrorMessage();
} else
${'name12_argument'} = NULL;if(${'name12_argument'} !== null) ${'name12_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_lang`', '`lang`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal")
,new ConditionWithArgument('`name`',$name12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>