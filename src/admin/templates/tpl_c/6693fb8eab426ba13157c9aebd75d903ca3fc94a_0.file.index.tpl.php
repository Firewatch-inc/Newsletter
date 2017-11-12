<?php
/* Smarty version 3.1.29, created on 2017-11-12 23:39:20
  from "C:\OpenServer\domains\Newsletter\src\admin\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a08b17805f1e6_40174520',
  'file_dependency' => 
  array (
    '6693fb8eab426ba13157c9aebd75d903ca3fc94a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter\\src\\admin\\templates\\tpl\\index.tpl',
      1 => 1510519156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a08b17805f1e6_40174520 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter\\src\\engine\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Admin Panel", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="news">Новости</a>
              <a class="item" data-tab="notes">Заметки</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="news">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="ten wide column">
                            <form name="removeNewsForm" method="POST">                         
                                <div class="actions">
                                    <input type="submit" name="removeNewsButton" value="Удалить" class="ui basic negative button">
                                </div>
                                <table class="ui table">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Загловок</th>
                                            <th>Автор</th>
                                            <th>Дата</th>
                                            <th>Выбрать</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_one_news_0_saved_item = isset($_smarty_tpl->tpl_vars['one_news']) ? $_smarty_tpl->tpl_vars['one_news'] : false;
$_smarty_tpl->tpl_vars['one_news'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['one_news']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['one_news']->value) {
$_smarty_tpl->tpl_vars['one_news']->_loop = true;
$__foreach_one_news_0_saved_local_item = $_smarty_tpl->tpl_vars['one_news'];
?>                                        
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['one_news']->value->id();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['one_news']->value->caption();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['one_news']->value->author();?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_news']->value->date(),"%d.%m.%Y");?>
</td>
                                                <td style="text-align: center;">
                                                    <div class="ui checkbox">
                                                        <input type="checkbox" name="id_news[]" value="<?php echo $_smarty_tpl->tpl_vars['one_news']->value->id();?>
">
                                                        <label></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['one_news'] = $__foreach_one_news_0_saved_local_item;
}
if ($__foreach_one_news_0_saved_item) {
$_smarty_tpl->tpl_vars['one_news'] = $__foreach_one_news_0_saved_item;
}
?>
                                    </tbody>
                                </table>
                            </form>
						</div>
						<div class="six wide column">
							<div class="ui segments">
								<div class="ui segment">
									<form name="addNewsForm" method="POST" class="ui form">
										<div class="field">
											<label>Заголовок</label>
											<input type="text" name="n_caption">
										</div>
										<div class="field">
											<label>Автор</label>
											<input type="text" name="n_author">
										</div>
										<div class="field">
											<label>Содержание</label>
											<textarea name="n_content"></textarea>
										</div>
										<div class="field">
											<label>Дата</label>
											<input type="date" name="n_date">
										</div>
										<div class="field">
											<input type="submit" name="addNewsButton" class="ui basic positive button">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				Notes
            </div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
