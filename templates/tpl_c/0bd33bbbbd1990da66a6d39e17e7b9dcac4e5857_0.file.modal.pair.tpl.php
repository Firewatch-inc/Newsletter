<?php
/* Smarty version 3.1.29, created on 2017-11-29 15:33:21
  from "/var/www/html/templates/tpl/modals/modal.pair.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1ea9117eb682_74410626',
  'file_dependency' => 
  array (
    '0bd33bbbbd1990da66a6d39e17e7b9dcac4e5857' => 
    array (
      0 => '/var/www/html/templates/tpl/modals/modal.pair.tpl',
      1 => 1511958798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ea9117eb682_74410626 ($_smarty_tpl) {
?>
<div class="ui modal" id="schedule">
    <div class="header">
        Показать основной расписание
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <label>Институт</label>
                <select>
                    <option>БИРХ</option>
                    <option>ТПП</option>
                    <option>САИТП</option>
                    <option>СГТ</option>
                </select>
            </div>
            <div class="field">
                <label>Курс</label>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="field">
                <label>Группа</label>
                <select>
                    <option>16.03.03</option>
                </select>
            </div>
            <div class="field" style="text-align: center;">
                <a id="cl" class="ui primary button">Показать</a>
            </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>

    $("#cl").on("click", function(){
        alert("На данный момент расписание находиться на модерации");
    });

<?php echo '</script'; ?>
><?php }
}
