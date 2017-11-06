<?php
/* Smarty version 3.1.29, created on 2017-11-06 14:53:14
  from "E:\OpenServer\domains\Newsletter.mgutm\src\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a004d2a89b422_75810070',
  'file_dependency' => 
  array (
    'efcfe367f53090773e522425cf5b8b34976ebff7' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\templates\\tpl\\index.tpl',
      1 => 1509968759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a004d2a89b422_75810070 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\engine\\smarty\\plugins\\modifier.date_format.php';
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

        </style>
    </head>
    <body>
        <div class="ui internally celled grid">
            <div class="row">
                <div class="ten wide column">
                    
                </div>
                <div class="six wide column" id="news">
                    <div id="top"></div>
                    <div class="ui piled segment">
                        <h4 class="ui header"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
 | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
                    <div class="ui piled segment">
                        <h4 class="ui header"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
 | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
                    <div class="ui piled segment">
                        <h4 class="ui header"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
 | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
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
                $("#bottom").before('<h4 class="ui header"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
 | A header</h4>');
            }, 300000);

        <?php echo '</script'; ?>
>

    </body>
</html><?php }
}
