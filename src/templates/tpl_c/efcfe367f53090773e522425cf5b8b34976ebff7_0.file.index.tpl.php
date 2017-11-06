<?php
/* Smarty version 3.1.29, created on 2017-11-06 19:27:30
  from "E:\OpenServer\domains\Newsletter.mgutm\src\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a008d72076ac9_72691532',
  'file_dependency' => 
  array (
    'efcfe367f53090773e522425cf5b8b34976ebff7' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\templates\\tpl\\index.tpl',
      1 => 1509985649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:one_news.tpl' => 1,
  ),
),false)) {
function content_5a008d72076ac9_72691532 ($_smarty_tpl) {
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

            .six.wide.column {
                height: 100vh;
                overflow: scroll;
            }

            #news {
                text-align: center;
            }

            .news {
                text-align: left;
            }

        </style>
    </head>
    <body>
        <div class="ui internally celled grid">
            <div class="row">
                <div class="ten wide column">
                    
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
                            <?php $_smarty_tpl->tpl_vars['caption'] = new Smarty_Variable($_smarty_tpl->tpl_vars['one_news']->value->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'caption', 0);?>
                            <?php $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable($_smarty_tpl->tpl_vars['one_news']->value->content(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'content', 0);?>
                            <?php $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable($_smarty_tpl->tpl_vars['one_news']->value->date(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'date', 0);?>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:one_news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

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
            var scroll_to_top = scroll_to_down/2;

            setInterval(function (){

                $("#news").stop().animate({
                    "scrollTop": $("#bottom").offset().top
                }, scroll_to_down).animate({
                    "scrollTop": $("#top").offset().top
                }, scroll_to_top);

            }, (scroll_to_down+scroll_to_top));

            setInterval(function(){
                
                // $.ajax({
                //     url: "php/get_news.php",
                //     success: function (replay) {
                //         alert(replay);
                //     },
                //     error: function () {
                //         alert("ERROROR! SUKA!");
                //     }
                // });

            }, 5000);

        <?php echo '</script'; ?>
>

    </body>
</html><?php }
}
