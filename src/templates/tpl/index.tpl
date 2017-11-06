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
                    {if $news != NULL}
                        {foreach $news as $one_news}
                            {$caption = $one_news->caption()}
                            {$content = $one_news->content()}
                            {$date = $one_news->date()}
                            {include file="one_news.tpl"}
                        {/foreach}
                    {else}
                        <i class="massive frown icon"></i>
                        <h3>Новостей пока нет</h3>
                    {/if}
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

        </script>

    </body>
</html>