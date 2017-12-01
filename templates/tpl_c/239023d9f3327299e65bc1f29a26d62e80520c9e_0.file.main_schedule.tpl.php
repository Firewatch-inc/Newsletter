<?php
/* Smarty version 3.1.29, created on 2017-12-01 11:44:37
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a211675808509_04641396',
  'file_dependency' => 
  array (
    '239023d9f3327299e65bc1f29a26d62e80520c9e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\main_schedule.tpl',
      1 => 1512117876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a211675808509_04641396 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter.mgutu\\engine\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Основное расписание", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui grid" id="wrapper">
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center">БИРХ. Группа 16.03.03</h1>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <h2 align="center">Даты недели: <?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
 - 01.12</h2>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Понедельник
                    </div>
                    <div class="content">
                        <table class="ui fixed table">
                            <thead>
                                <tr>
                                    <th>Пара</th>
                                    <th>Предмет</th>
                                    <th>Аудитория</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Вторник
                    </div>
                    <div class="content">

                            <table class="ui fixed table">
                                    <thead>
                                        <tr>
                                            <th>Пара</th>
                                            <th>Предмет</th>
                                            <th>Аудитория</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Среда
                    </div>
                    <div class="content">

                        <table class="ui fixed table">
                            <thead>
                                <tr>
                                    <th>Пара</th>
                                    <th>Предмет</th>
                                    <th>Аудитория</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Четверг
                    </div>
                    <div class="content">

                            <table class="ui fixed table">
                                    <thead>
                                        <tr>
                                            <th>Пара</th>
                                            <th>Предмет</th>
                                            <th>Аудитория</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Пятница
                    </div>
                    <div class="content">

                            <table class="ui fixed table">
                                    <thead>
                                        <tr>
                                            <th>Пара</th>
                                            <th>Предмет</th>
                                            <th>Аудитория</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Суббота
                    </div>
                    <div class="content">

                            <table class="ui fixed table">
                                    <thead>
                                        <tr>
                                            <th>Пара</th>
                                            <th>Предмет</th>
                                            <th>Аудитория</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">

        $('.ui.accordion').accordion();
    
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
