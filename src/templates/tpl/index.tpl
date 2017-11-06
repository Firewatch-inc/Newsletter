<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NewsLetter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/semantic.js"></script>
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
                        <h4 class="ui header">{$smarty.now|date_format:"%d.%m.%Y"} | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
                    <div class="ui piled segment">
                        <h4 class="ui header">{$smarty.now|date_format:"%d.%m.%Y"} | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
                    <div class="ui piled segment">
                        <h4 class="ui header">{$smarty.now|date_format:"%d.%m.%Y"} | A header</h4>
                        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                        <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                    </div>
                    <div id="bottom"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">

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
                $("#bottom").before('<h4 class="ui header">{$smarty.now|date_format:"%d.%m.%Y"} | A header</h4>');
            }, 300000);

        </script>

    </body>
</html>