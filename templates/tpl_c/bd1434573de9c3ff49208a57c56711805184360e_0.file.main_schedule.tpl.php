<?php
/* Smarty version 3.1.29, created on 2018-02-04 16:11:20
  from "E:\OpenServer\domains\Newsletter.mgutm\templates\tpl\main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7706788f8928_39588392',
  'file_dependency' => 
  array (
    'bd1434573de9c3ff49208a57c56711805184360e' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\templates\\tpl\\main_schedule.tpl',
      1 => 1517749879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a7706788f8928_39588392 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Основное расписание", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['institute']->value;?>
</h1>
                <h2 align="center">Группа: <u><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</u></h2>
                <h3 align="center">Форма обучения: <b><?php echo $_smarty_tpl->tpl_vars['education_form']->value;?>
</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Новая форма расписания
                    </div>
                    <div class="content">
                        <table class="ui selectable celled table">
                            <thead>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Понедельник</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2" colspan="2">Финансовый менеджмент (лекции) ауд.1202-5 12.02-11.06 доц.Кроткова Т.А.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2" colspan="2">Финансовый менеджмент (лекции) ауд.1202-5 12.02-11.06 доц.Кроткова Т.А.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">14.20-15.50</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2">Управление качеством (лекции) ауд.1402-5 12.02-09.04 доц. Пластинина И.П.</td>
                                    <td>Таможенные пошлины и расчеты (лекции) ауд. 1202-5 09.02-11.06 доц. Кроткова Т.А.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td>Муниципальное хозяйство (лекции) ауд.1202-5 12.02-07.05 ст. пр. Шовунова Н.Ю.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">16.20-17.50</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2">Управление качеством (лекции) ауд.1402-5 12.02-09.04 доц. Пластинина И.П.</td>
                                    <td>Таможенные пошлины и расчеты (лекции) ауд. 1202-5 09.02-11.06 доц. Кроткова Т.А.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td>Муниципальное хозяйство (лекции) ауд.1202-5 12.02-07.05 ст. пр. Шовунова Н.Ю.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Вторник</th>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2" colspan="2">Проектирование (практика) ауд 412-5 15.02-16.05 проф. Рябова Т.Ф.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Среда</th>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2" colspan="2">Инвестиционный анализ (лекции) ауд.1202-5 14.02-16.05 доц. Немченко В.А.</td>
                                    <td>Государственные и муниципальные финансы (лекции) ауд.505-5 21.02-13.06 доц. Штрикунова М.М.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2" colspan="2">Инвестиционный анализ (лекции) ауд.1202-5 14.02-16.05 доц. Немченко В.А.</td>
                                    <td>Государственные и муниципальные финансы (лекции) ауд.505-5 21.02-13.06 доц. Штрикунова М.М.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">14.20-15.50</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2">Инновационный менеджмент (лекции) ауд.1202-5 14.02-28.03 проф. Женжебир В.Н.</td>
                                    <td></td>
                                    <td rowspan="2">Инновационный менеджмент (лекции) ауд.1202-5 14.02-28.03 проф. Женжебир В.Н.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">16.20-17.50</td>
                                    <td>Нечётная</td>
                                    <td rowspan="2">Инновационный менеджмент (лекции) ауд.1202-5 14.02-28.03 проф. Женжебир В.Н.</td>
                                    <td></td>
                                    <td rowspan="2">Инновационный менеджмент (лекции) ауд.1202-5 14.02-28.03 проф. Женжебир В.Н.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Четверг</th>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2">Элективные модули по физической культуре и спорту спорт.площадка-5 22.03-03.05 ст.пр. Щепелев А.А.</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="2">Этика государственной и муниципальной службы (лекции) ауд.300-1* 15.02-14.06 доц. Полетаева Л.П.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="2">Этика государственной и муниципальной службы (лекции) ауд.300-1* 15.02-14.06 доц. Полетаева Л.П.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">14.20-15.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="2">Стратегический менеджмент (практика) ауд.300-1 15.02-10.05 доц. Воробьев Д.И.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">16.20-17.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="2">Стратегический менеджмент (практика) ауд.300-1 15.02-10.05 доц. Воробьев Д.И.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Пятница</th>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="2" colspan="2">Старославянский язык</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">14.20-15.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">16.20-17.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">3 курс ОФО</th>
                                    <th colspan="7">Суббота</th>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>Неделя</td>
                                    <td>38.03.02 ПМ</td>
                                    <td>38.03.02 ГМУ</td>
                                    <td>38.03.04 РУ</td>
                                    <td>38.03.01 БУ</td>
                                    <td>38.03.01 ЭО</td>
                                    <td>38.03.01 ФиК</td>
                                    <td>40.03.01</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9.00-10.30</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">10.40-12.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">12.40-14.10</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">14.20-15.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">16.20-17.50</td>
                                    <td>Нечётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Чётная</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ui styled accordion">
                    <div class="title">
                        Старая форма вывода расписания
                    </div>
                    <div class="content"><?php
$_from = $_smarty_tpl->tpl_vars['days']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_0_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_0_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                            <div class="ui styled accordion">
                                <div class="active title">
                                    <?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>

                                </div>
                                <div class="active content">
                                    <table class="ui fixed celled table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th colspan="3">Нечётная</th>
                                                <th colspan="3">Чётная</th>
                                            </tr>
                                            <tr> <!-- FIXME -->
                                                <th>Пара</th>
                                                <th>Предмет</th>
                                                <th>Аудитория</th>
                                                <th>Преподаватель</th>
                                                <th>Предмет</th>
                                                <th>Аудитория</th>
                                                <th>Преподаватель</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['pairs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pair_1_saved_item = isset($_smarty_tpl->tpl_vars['pair']) ? $_smarty_tpl->tpl_vars['pair'] : false;
$_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pair']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
$__foreach_pair_1_saved_local_item = $_smarty_tpl->tpl_vars['pair'];
?>
                                                <tr>
                                                    <!-- FIXME: -->
                                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1] != NULL) {?>
                                                        <?php $_smarty_tpl->tpl_vars['subj_1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->first_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_1', 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['subj_2'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->second_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_2', 0);?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['subj_1']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_1();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->teacher_1();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['subj_2']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_2();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->teacher_2();?>
</td>
                                                    <?php }?>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_1_saved_local_item;
}
if ($__foreach_pair_1_saved_item) {
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_1_saved_item;
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_local_item;
}
if ($__foreach_day_0_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_item;
}
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
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
