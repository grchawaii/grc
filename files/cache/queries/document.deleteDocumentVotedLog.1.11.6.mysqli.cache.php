<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentVotedLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_voted_log`', '`document_voted_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>