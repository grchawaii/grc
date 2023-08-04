<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentsForPlanner_all");
$query->setAction("select");
$query->setPriority("");

${'var_search_extra_idx2_argument'} = new ConditionArgument('var_search_extra_idx', $args->var_search_extra_idx, 'equal');
${'var_search_extra_idx2_argument'}->ensureDefaultValue('8');
${'var_search_extra_idx2_argument'}->createConditionValue();
if(!${'var_search_extra_idx2_argument'}->isValid()) return ${'var_search_extra_idx2_argument'}->getErrorMessage();
if(${'var_search_extra_idx2_argument'} !== null) ${'var_search_extra_idx2_argument'}->setColumnType('number');

${'var_03_argument'} = new ConditionArgument('var_0', $args->var_0, 'notin');
${'var_03_argument'}->ensureDefaultValue('0');
${'var_03_argument'}->createConditionValue();
if(!${'var_03_argument'}->isValid()) return ${'var_03_argument'}->getErrorMessage();
if(${'var_03_argument'} !== null) ${'var_03_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = NULL;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->var_category_srl)) {
${'var_category_srl5_argument'} = new ConditionArgument('var_category_srl', $args->var_category_srl, 'in');
${'var_category_srl5_argument'}->createConditionValue();
if(!${'var_category_srl5_argument'}->isValid()) return ${'var_category_srl5_argument'}->getErrorMessage();
} else
${'var_category_srl5_argument'} = NULL;if(${'var_category_srl5_argument'} !== null) ${'var_category_srl5_argument'}->setColumnType('number');

${'var_period_end6_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end6_argument'}->checkNotNull();
${'var_period_end6_argument'}->createConditionValue();
if(!${'var_period_end6_argument'}->isValid()) return ${'var_period_end6_argument'}->getErrorMessage();
if(${'var_period_end6_argument'} !== null) ${'var_period_end6_argument'}->setColumnType('bigtext');

${'var_period_start7_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start7_argument'}->checkNotNull();
${'var_period_start7_argument'}->createConditionValue();
if(!${'var_period_start7_argument'}->isValid()) return ${'var_period_start7_argument'}->getErrorMessage();
if(${'var_period_start7_argument'} !== null) ${'var_period_start7_argument'}->setColumnType('bigtext');

${'var_period_end8_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end8_argument'}->checkNotNull();
${'var_period_end8_argument'}->createConditionValue();
if(!${'var_period_end8_argument'}->isValid()) return ${'var_period_end8_argument'}->getErrorMessage();
if(${'var_period_end8_argument'} !== null) ${'var_period_end8_argument'}->setColumnType('bigtext');

${'var_period_start9_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start9_argument'}->checkNotNull();
${'var_period_start9_argument'}->createConditionValue();
if(!${'var_period_start9_argument'}->isValid()) return ${'var_period_start9_argument'}->getErrorMessage();
if(${'var_period_start9_argument'} !== null) ${'var_period_start9_argument'}->setColumnType('bigtext');

${'var_period_end10_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end10_argument'}->checkNotNull();
${'var_period_end10_argument'}->createConditionValue();
if(!${'var_period_end10_argument'}->isValid()) return ${'var_period_end10_argument'}->getErrorMessage();
if(${'var_period_end10_argument'} !== null) ${'var_period_end10_argument'}->setColumnType('bigtext');

${'var_period_start11_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start11_argument'}->checkNotNull();
${'var_period_start11_argument'}->createConditionValue();
if(!${'var_period_start11_argument'}->isValid()) return ${'var_period_start11_argument'}->getErrorMessage();
if(${'var_period_start11_argument'} !== null) ${'var_period_start11_argument'}->setColumnType('bigtext');

${'var_period_end12_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end12_argument'}->checkNotNull();
${'var_period_end12_argument'}->createConditionValue();
if(!${'var_period_end12_argument'}->isValid()) return ${'var_period_end12_argument'}->getErrorMessage();
if(${'var_period_end12_argument'} !== null) ${'var_period_end12_argument'}->setColumnType('bigtext');

${'var_period_start13_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start13_argument'}->checkNotNull();
${'var_period_start13_argument'}->createConditionValue();
if(!${'var_period_start13_argument'}->isValid()) return ${'var_period_start13_argument'}->getErrorMessage();
if(${'var_period_start13_argument'} !== null) ${'var_period_start13_argument'}->setColumnType('bigtext');

${'var_period_end14_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end14_argument'}->checkNotNull();
${'var_period_end14_argument'}->createConditionValue();
if(!${'var_period_end14_argument'}->isValid()) return ${'var_period_end14_argument'}->getErrorMessage();
if(${'var_period_end14_argument'} !== null) ${'var_period_end14_argument'}->setColumnType('bigtext');

${'var_period_start15_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start15_argument'}->checkNotNull();
${'var_period_start15_argument'}->createConditionValue();
if(!${'var_period_start15_argument'}->isValid()) return ${'var_period_start15_argument'}->getErrorMessage();
if(${'var_period_start15_argument'} !== null) ${'var_period_start15_argument'}->setColumnType('bigtext');

${'var_period_end16_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end16_argument'}->checkNotNull();
${'var_period_end16_argument'}->createConditionValue();
if(!${'var_period_end16_argument'}->isValid()) return ${'var_period_end16_argument'}->getErrorMessage();
if(${'var_period_end16_argument'} !== null) ${'var_period_end16_argument'}->setColumnType('bigtext');

${'var_period_start17_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start17_argument'}->checkNotNull();
${'var_period_start17_argument'}->createConditionValue();
if(!${'var_period_start17_argument'}->isValid()) return ${'var_period_start17_argument'}->getErrorMessage();
if(${'var_period_start17_argument'} !== null) ${'var_period_start17_argument'}->setColumnType('bigtext');

${'var_start_mmdd18_argument'} = new ConditionArgument('var_start_mmdd', $args->var_start_mmdd, 'more');
${'var_start_mmdd18_argument'}->checkNotNull();
${'var_start_mmdd18_argument'}->createConditionValue();
if(!${'var_start_mmdd18_argument'}->isValid()) return ${'var_start_mmdd18_argument'}->getErrorMessage();

${'var_end_mmdd19_argument'} = new ConditionArgument('var_end_mmdd', $args->var_end_mmdd, 'less');
${'var_end_mmdd19_argument'}->checkNotNull();
${'var_end_mmdd19_argument'}->createConditionValue();
if(!${'var_end_mmdd19_argument'}->isValid()) return ${'var_end_mmdd19_argument'}->getErrorMessage();

${'var_period_end20_argument'} = new ConditionArgument('var_period_end', $args->var_period_end, 'less');
${'var_period_end20_argument'}->checkNotNull();
${'var_period_end20_argument'}->createConditionValue();
if(!${'var_period_end20_argument'}->isValid()) return ${'var_period_end20_argument'}->getErrorMessage();
if(${'var_period_end20_argument'} !== null) ${'var_period_end20_argument'}->setColumnType('bigtext');

${'var_period_start21_argument'} = new ConditionArgument('var_period_start', $args->var_period_start, 'more');
${'var_period_start21_argument'}->checkNotNull();
${'var_period_start21_argument'}->createConditionValue();
if(!${'var_period_start21_argument'}->isValid()) return ${'var_period_start21_argument'}->getErrorMessage();
if(${'var_period_start21_argument'} !== null) ${'var_period_start21_argument'}->setColumnType('bigtext');

${'var_start_mmdd222_argument'} = new ConditionArgument('var_start_mmdd2', $args->var_start_mmdd2, 'more');
${'var_start_mmdd222_argument'}->checkNotNull();
${'var_start_mmdd222_argument'}->createConditionValue();
if(!${'var_start_mmdd222_argument'}->isValid()) return ${'var_start_mmdd222_argument'}->getErrorMessage();

${'var_end_mmdd223_argument'} = new ConditionArgument('var_end_mmdd2', $args->var_end_mmdd2, 'less');
${'var_end_mmdd223_argument'}->checkNotNull();
${'var_end_mmdd223_argument'}->createConditionValue();
if(!${'var_end_mmdd223_argument'}->isValid()) return ${'var_end_mmdd223_argument'}->getErrorMessage();
if(isset($args->var_search_title)) {
${'var_search_title24_argument'} = new ConditionArgument('var_search_title', $args->var_search_title, 'like');
${'var_search_title24_argument'}->createConditionValue();
if(!${'var_search_title24_argument'}->isValid()) return ${'var_search_title24_argument'}->getErrorMessage();
} else
${'var_search_title24_argument'} = NULL;if(${'var_search_title24_argument'} !== null) ${'var_search_title24_argument'}->setColumnType('varchar');
if(isset($args->var_search_content)) {
${'var_search_content25_argument'} = new ConditionArgument('var_search_content', $args->var_search_content, 'like');
${'var_search_content25_argument'}->createConditionValue();
if(!${'var_search_content25_argument'}->isValid()) return ${'var_search_content25_argument'}->getErrorMessage();
} else
${'var_search_content25_argument'} = NULL;if(${'var_search_content25_argument'} !== null) ${'var_search_content25_argument'}->setColumnType('bigtext');
if(isset($args->var_search_user_name)) {
${'var_search_user_name26_argument'} = new ConditionArgument('var_search_user_name', $args->var_search_user_name, 'like');
${'var_search_user_name26_argument'}->createConditionValue();
if(!${'var_search_user_name26_argument'}->isValid()) return ${'var_search_user_name26_argument'}->getErrorMessage();
} else
${'var_search_user_name26_argument'} = NULL;if(${'var_search_user_name26_argument'} !== null) ${'var_search_user_name26_argument'}->setColumnType('varchar');
if(isset($args->var_search_nick_name)) {
${'var_search_nick_name27_argument'} = new ConditionArgument('var_search_nick_name', $args->var_search_nick_name, 'like');
${'var_search_nick_name27_argument'}->createConditionValue();
if(!${'var_search_nick_name27_argument'}->isValid()) return ${'var_search_nick_name27_argument'}->getErrorMessage();
} else
${'var_search_nick_name27_argument'} = NULL;if(${'var_search_nick_name27_argument'} !== null) ${'var_search_nick_name27_argument'}->setColumnType('varchar');
if(isset($args->var_search_user_id)) {
${'var_search_user_id28_argument'} = new ConditionArgument('var_search_user_id', $args->var_search_user_id, 'like');
${'var_search_user_id28_argument'}->createConditionValue();
if(!${'var_search_user_id28_argument'}->isValid()) return ${'var_search_user_id28_argument'}->getErrorMessage();
} else
${'var_search_user_id28_argument'} = NULL;if(${'var_search_user_id28_argument'} !== null) ${'var_search_user_id28_argument'}->setColumnType('varchar');
if(isset($args->var_search_tags)) {
${'var_search_tags29_argument'} = new ConditionArgument('var_search_tags', $args->var_search_tags, 'like');
${'var_search_tags29_argument'}->createConditionValue();
if(!${'var_search_tags29_argument'}->isValid()) return ${'var_search_tags29_argument'}->getErrorMessage();
} else
${'var_search_tags29_argument'} = NULL;if(${'var_search_tags29_argument'} !== null) ${'var_search_tags29_argument'}->setColumnType('text');
if(isset($args->var_search_extra_value)) {
${'var_search_extra_value30_argument'} = new ConditionArgument('var_search_extra_value', $args->var_search_extra_value, 'like');
${'var_search_extra_value30_argument'}->createConditionValue();
if(!${'var_search_extra_value30_argument'}->isValid()) return ${'var_search_extra_value30_argument'}->getErrorMessage();
} else
${'var_search_extra_value30_argument'} = NULL;if(${'var_search_extra_value30_argument'} !== null) ${'var_search_extra_value30_argument'}->setColumnType('bigtext');

${'page39_argument'} = new Argument('page', $args->{'page'});
${'page39_argument'}->ensureDefaultValue('1');
if(!${'page39_argument'}->isValid()) return ${'page39_argument'}->getErrorMessage();

${'page_count40_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count40_argument'}->ensureDefaultValue('10');
if(!${'page_count40_argument'}->isValid()) return ${'page_count40_argument'}->getErrorMessage();

${'list_count41_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count41_argument'}->ensureDefaultValue('50');
if(!${'list_count41_argument'}->isValid()) return ${'list_count41_argument'}->getErrorMessage();

${'sort_index37_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index37_argument'}->ensureDefaultValue('sort_index_default');
if(!${'sort_index37_argument'}->isValid()) return ${'sort_index37_argument'}->getErrorMessage();

${'order_type38_argument'} = new SortArgument('order_type38', $args->order_type);
${'order_type38_argument'}->ensureDefaultValue('asc');
if(!${'order_type38_argument'}->isValid()) return ${'order_type38_argument'}->getErrorMessage();

${'sort_index_235_argument'} = new Argument('sort_index_2', $args->{'sort_index_2'});
${'sort_index_235_argument'}->ensureDefaultValue('sort_index_default_2');
if(!${'sort_index_235_argument'}->isValid()) return ${'sort_index_235_argument'}->getErrorMessage();

${'order_type_236_argument'} = new SortArgument('order_type_236', $args->order_type_2);
${'order_type_236_argument'}->ensureDefaultValue('asc');
if(!${'order_type_236_argument'}->isValid()) return ${'order_type_236_argument'}->getErrorMessage();

${'sort_index_1_133_argument'} = new Argument('sort_index_1_1', $args->{'sort_index_1_1'});
${'sort_index_1_133_argument'}->ensureDefaultValue('sort_index_default_1_1');
if(!${'sort_index_1_133_argument'}->isValid()) return ${'sort_index_1_133_argument'}->getErrorMessage();

${'order_type_1_134_argument'} = new SortArgument('order_type_1_134', $args->order_type_1_1);
${'order_type_1_134_argument'}->ensureDefaultValue('asc');
if(!${'order_type_1_134_argument'}->isValid()) return ${'order_type_1_134_argument'}->getErrorMessage();

${'sort_index_131_argument'} = new Argument('sort_index_1', $args->{'sort_index_1'});
${'sort_index_131_argument'}->ensureDefaultValue('sort_index_default_1');
if(!${'sort_index_131_argument'}->isValid()) return ${'sort_index_131_argument'}->getErrorMessage();

${'order_type_132_argument'} = new SortArgument('order_type_132', $args->order_type_1);
${'order_type_132_argument'}->ensureDefaultValue('asc');
if(!${'order_type_132_argument'}->isValid()) return ${'order_type_132_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
,new SelectExpression('`extra_vars_t1`.`value`', '`extra_value_start`')
,new SelectExpression('`extra_vars_t2`.`value`', '`extra_value_end`')
,new SelectExpression('`extra_vars_t7`.`value`', '`extra_value_time`')
,new SelectExpression('`extra_vars_t8`.`value`', '`extra_value_group`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t1`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t1`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t1`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t1`.`var_idx`','1',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t1`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t2`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t2`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t2`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t2`.`var_idx`','2',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t2`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t5`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t5`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t5`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`var_idx`','5',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t6`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t6`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t6`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t6`.`var_idx`','6',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t6`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t7`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t7`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t7`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t7`.`var_idx`','7',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t7`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_t8`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_t8`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_t8`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t8`.`var_idx`','8',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t8`.`lang_code`','`documents`.`lang_code`',"equal", 'and')))
))
,new JoinTable('`xe_document_extra_vars`', '`extra_vars_search`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars_search`.`module_srl`','`documents`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_vars_search`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`extra_vars_search`.`var_idx`',$var_search_extra_idx2_argument,"equal", 'and')))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$var_03_argument,"notin")
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl4_argument,"in", 'and')
,new ConditionWithoutArgument('`extra_vars_t1`.`module_srl`','`documents`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t1`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`category_srl`',$var_category_srl5_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end6_argument,"less")
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_start7_argument,"more", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end8_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start9_argument,"more", 'and')
,new ConditionWithoutArgument('substr(`extra_vars_t6`.`value`,1,1)','``',"null", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end10_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start11_argument,"more", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`value`','``',"null", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end12_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start13_argument,"more", 'and')
,new ConditionWithoutArgument('substr(`extra_vars_t6`.`value`,1,1)','2',"notequal", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end14_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start15_argument,"more", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`value`','12',"notequal", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end16_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start17_argument,"more", 'and')
,new ConditionWithoutArgument('substr(`extra_vars_t6`.`value`,1,1)','2',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`value`','12',"equal", 'and')
,new ConditionWithArgument('substr(`extra_vars_t1`.`value`,5,4)',$var_start_mmdd18_argument,"more", 'and')
,new ConditionWithArgument('substr(`extra_vars_t1`.`value`,5,4)',$var_end_mmdd19_argument,"less", 'and')
,new ConditionWithArgument('`extra_vars_t1`.`value`',$var_period_end20_argument,"less", 'or')
,new ConditionWithArgument('`extra_vars_t2`.`value`',$var_period_start21_argument,"more", 'and')
,new ConditionWithoutArgument('substr(`extra_vars_t6`.`value`,1,1)','2',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars_t5`.`value`','12',"equal", 'and')
,new ConditionWithArgument('substr(`extra_vars_t1`.`value`,5,4)',$var_start_mmdd222_argument,"more", 'and')
,new ConditionWithArgument('substr(`extra_vars_t1`.`value`,5,4)',$var_end_mmdd223_argument,"less", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`title`',$var_search_title24_argument,"like")
,new ConditionWithArgument('`documents`.`content`',$var_search_content25_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`user_name`',$var_search_user_name26_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`nick_name`',$var_search_nick_name27_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`user_id`',$var_search_user_id28_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`tags`',$var_search_tags29_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars_search`.`value`',$var_search_extra_value30_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index_131_argument'}, $order_type_132_argument)
,new OrderByColumn(${'sort_index_1_133_argument'}, $order_type_1_134_argument)
,new OrderByColumn(${'sort_index_235_argument'}, $order_type_236_argument)
,new OrderByColumn(${'sort_index37_argument'}, $order_type38_argument)
));
$query->setLimit(new Limit(${'list_count41_argument'}, ${'page39_argument'}, ${'page_count40_argument'}));
return $query; ?>