<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl1_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl1_argument'}->checkFilter('number');
${'category_srl1_argument'}->checkNotNull();
if(!${'category_srl1_argument'}->isValid()) return ${'category_srl1_argument'}->getErrorMessage();
if(${'category_srl1_argument'} !== null) ${'category_srl1_argument'}->setColumnType('number');

${'parent_srl2_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl2_argument'}->checkFilter('number');
${'parent_srl2_argument'}->checkNotNull();
if(!${'parent_srl2_argument'}->isValid()) return ${'parent_srl2_argument'}->getErrorMessage();
if(${'parent_srl2_argument'} !== null) ${'parent_srl2_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title3_argument'} = new Argument('title', $args->{'title'});
if(!${'title3_argument'}->isValid()) return ${'title3_argument'}->getErrorMessage();
} else
${'title3_argument'} = NULL;if(${'title3_argument'} !== null) ${'title3_argument'}->setColumnType('varchar');

${'list_order4_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order4_argument'}->checkFilter('number');
${'list_order4_argument'}->checkNotNull();
if(!${'list_order4_argument'}->isValid()) return ${'list_order4_argument'}->getErrorMessage();
if(${'list_order4_argument'} !== null) ${'list_order4_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl1_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl2_argument'})
,new InsertExpression('`title`', ${'title3_argument'})
,new InsertExpression('`list_order`', ${'list_order4_argument'})
));
$query->setTables(array(
new Table('`xe_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>