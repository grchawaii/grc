<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCommentsList");
$query->setAction("delete");
$query->setPriority("");

${'document_srl16_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl16_argument'}->checkFilter('number');
${'document_srl16_argument'}->checkNotNull();
${'document_srl16_argument'}->createConditionValue();
if(!${'document_srl16_argument'}->isValid()) return ${'document_srl16_argument'}->getErrorMessage();
if(${'document_srl16_argument'} !== null) ${'document_srl16_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>