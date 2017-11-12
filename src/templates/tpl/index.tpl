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
                    {if $news != NULL}
                        {foreach $news as $one_news}     
                            <div class="ui piled segment news">
                                <h4 class="ui header">{$one_news->date()|date_format:"%d.%m.%Y"}
                                |
                                {$one_news->caption()}
                                </h4>
                                <p>                                
                                    {$one_news->content()}
                                </p>
                                <hr>
                                <i>{$one_news->author()}</i>
                            </div>
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
        </script>

    </body>
</html>