<?php /* Smarty version Smarty-3.1.19, created on 2016-06-03 15:49:16
         compiled from "/Applications/MAMP/htdocs/monmiel/www/admin5582gihon/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130713329457518adce9dcd5-96751376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e898eb6bc182c4a9aaded794158a4ec2a261ba0' => 
    array (
      0 => '/Applications/MAMP/htdocs/monmiel/www/admin5582gihon/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1460106276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130713329457518adce9dcd5-96751376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57518adcee9a06_20223843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57518adcee9a06_20223843')) {function content_57518adcee9a06_20223843($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
