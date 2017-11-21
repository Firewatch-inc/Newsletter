<?php
/* Smarty version 3.1.29, created on 2017-11-12 23:43:53
  from "C:\OpenServer\domains\Newsletter\src\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a08b28909e4f7_53814859',
  'file_dependency' => 
  array (
    '3b35a2897379f834cd0cbc4ff9fb15d9c44be9cc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter\\src\\templates\\tpl\\index.tpl',
      1 => 1510519432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08b28909e4f7_53814859 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter\\src\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NewsLetter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/semantic.js"><?php echo '</script'; ?>
>
        <style type="text/css">
        
            body {
                background-color: #EFF0EA;
            }

            .six.wide.column {
                height: 100vh;
                overflow: scroll;
            }

            #news {
                text-align: center;
            }

            @keyframes fade {
                from {
                    opacity: 0;
                    margin-top: -100px;
                }
                to {
                    opacity: 1;
                }
            }
            
            .news {
                text-align: left;
                word-wrap: break-word;
                animation-name: fade;
                animation-duration: 1.5s;
                animation-iteration-count: 1;
                animation-timing-function: ease;
            }
            

        </style>
    </head>
    <body>
        <div class="ui internally celled grid">
            <div class="row">
                <div class="ten wide column">
                    <div class="ui three cards">
                      <a class="orange card">
                        <div class="content">
                            <div class="header">Заметка</div>
                            <div class="meta">
                              <span class="category">11.11.2017</span>
                            </div>
                            <div class="description">
                              <p>Инвентаризация в кабинетах: 101, 102, 103</p>
                            </div>
                          </div>
                          <div class="extra content">
                            <div class="right floated author">
                                Департамент информатизации
                            </div>
                          </div>
                      </a>
                      <a class="red card">
                        <div class="content">
                            <div class="header">Изменения в расписании</div>
                            <div class="meta">
                              <span class="category">12.11.2017</span>
                            </div>
                            <div class="description">
                              <p>Сегодня у нас изменения</p>
                            </div>
                          </div>
                          <div class="extra content">
                            <div class="right floated author">
                                Институт ТПП
                            </div>
                          </div>
                      </a>
                      <a class="blue card">
                        <div class="content">
                            <div class="header">Объявление</div>
                            <div class="meta">
                              <span class="category">12.11.2017</span>
                            </div>
                            <div class="description">
                              <p>C 20.11.2017 по 25.11.2017 СПРУТ будет недоступен для использования, так как будут проводиться профилактические работы</p>
                            </div>
                          </div>
                          <div class="extra content">
                            <div class="right floated author">
                                Департамент информатизации
                            </div>
                          </div>
                      </a>
                    </div>
                </div>
                <div class="six wide column" id="news">
                    <div id="top"></div>
                    <?php if ($_smarty_tpl->tpl_vars['news']->value != NULL) {?>
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
                            <div class="ui piled segment news">
                                <h4 class="ui header"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_news']->value->date(),"%d.%m.%Y");?>

                                |
                                <?php echo $_smarty_tpl->tpl_vars['one_news']->value->caption();?>

                                </h4>
                                <p>                                
                                    <?php echo $_smarty_tpl->tpl_vars['one_news']->value->content();?>

                                </p>
                                <hr>
                                <i><?php echo $_smarty_tpl->tpl_vars['one_news']->value->author();?>
</i>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['one_news'] = $__foreach_one_news_0_saved_local_item;
}
if ($__foreach_one_news_0_saved_item) {
$_smarty_tpl->tpl_vars['one_news'] = $__foreach_one_news_0_saved_item;
}
?>
                    <?php } else { ?>
                        <i class="massive frown icon"></i>
                        <h3>Новостей пока нет</h3>
                    <?php }?>
                    <div id="bottom"></div>
                </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">

            var scroll_to_down = 10000;
            var scroll_to_top = 2500;
            
            var timeout = setTimeout(function step() {
            
                $("#news").stop().animate({
                    "scrollTop": $("#bottom").offset().top
                }, scroll_to_down).animate({
                    "scrollTop": $("#top").offset().top
                }, scroll_to_top);

                setTimeout(step, (scroll_to_down+scroll_to_top));
            }, 1000);
            /*
            setInterval(function(){
                
                $.ajax({
                    url: "php/get_news.php",
                    type: "POST",
                    data: "",
                    success: function (replay) {
                        $("#bottom").before(replay);
                    }
                });

            }, 5000);
            */
        <?php echo '</script'; ?>
>

    </body>
</html><?php }
}
