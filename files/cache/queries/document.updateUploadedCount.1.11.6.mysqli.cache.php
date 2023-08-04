<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUploadedCount");
$query->setAction("update");
$query->setPriority("");

${'uploaded_count18_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count18_argument'}->checkFilter('number');
${'uploaded_count18_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count18_argument'}->isValid()) return ${'uploaded_count18_argument'}->getErrorMessage();
if(${'uploaded_count18_argument'} !== null) ${'uploaded_count18_argument'}->setColumnType('number');

${'document_srl19_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl19_argument'}->checkFilter('number');
${'document_srl19_argument'}->checkNotNull();
${'document_srl19_argument'}->createConditionValue();
if(!${'document_srl19_argument'}->isValid()) return ${'document_srl19_argument'}->getErrorMessage();
if(${'document_srl19_argument'} !== null) ${'document_srl19_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`uploaded_count`', ${'uploaded_count18_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>