<?php
/* Smarty version 3.1.29, created on 2017-12-02 11:05:24
  from "E:\OpenServer\domains\Newsletter.mgutm\admin\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a225ec4f212f1_71950428',
  'file_dependency' => 
  array (
    '496470b31485464a892a932b10319a727b81e4c9' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\admin\\templates\\tpl\\index.tpl',
      1 => 1512153311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:tabs/tab.main_schedule.tpl' => 1,
    'file:tabs/tab.change_schedule.tpl' => 1,
    'file:tabs/tab.dop_schedule.tpl' => 1,
    'file:tabs/tab.groups.tpl' => 1,
    'file:tabs/tab.settings.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a225ec4f212f1_71950428 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Панель управления", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="schedule">Основное расписание</a>
			  <a class="item" data-tab="change_schedule">Изменения в расписании</a>
			  <a class="item" data-tab="courses">Элективные курсы</a>
			  <a class="item" data-tab="groups">Группы</a>
			  <a class="item" data-tab="settings">Настройки</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="schedule">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tabs/tab.main_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="ui bottom attached tab segment" data-tab="change_schedule">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tabs/tab.change_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
            <div class="ui bottom attached tab segment" data-tab="courses">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tabs/tab.dop_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
            <div class="ui bottom attached tab segment" data-tab="groups">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tabs/tab.groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			<div class="ui bottom attached tab segment" data-tab="settings">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tabs/tab.settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
