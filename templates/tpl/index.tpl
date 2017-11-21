{$title = "Newsletter | Главная"}
{include file="html/begin.tpl"}
    <p id="top"></p>
    <div class="ui internally celled grid">
        {if $notes != NULL}
            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui three cards">
                        {foreach $notes as $note}
                            <a class="blue card">
                                <div class="content">
                                    <div class="header">
                                        {$note->caption()}
                                    </div>
                                    <div class="meta">
                                        <span class="category">{$note->date()|date_format:"%d.%m.%Y"}</span>
                                    </div>
                                    <div class="description">
                                        <p>{$note->content()}</p>
                                    </div>
                                </div>
                            </a>
                        {/foreach}
                    </div>
                </div>
            </div>
        {/if}
        <div class="row">
            <div class="sixteen wide column" id="notes">
                <table class="ui fixed table" border="1">
                    <thead>
                        <tr id="header">
                            <th>
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td>Аудитория</td>
                                        </tr>
                                        <tr>
                                            <td>Время</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </th>
                            <th>104</th>
                            <th>107</th>
                            <th>109</th>
                            <th>207</th>
                            <th>209</th>
                            <th>201</th>
                            <th>300</th>
                            <th>400</th>
                            <th>401 (мал. акт. зал)</th>
                            <th>405</th>
                            <th>406</th>
                            <th>409</th>
                            <th>Актовый зал</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="14"><h2 class="date">{$smarty.now|date_format:"%d.%m.%Y"}</h2></th>
                        </tr>
                        {foreach $schedule as $time => $data}
                            <tr>
                                <td>{$time}</td>
                                {foreach $data as $entry}
                                    {if $entry != ""}
                                    <td class="ui orange segment">{$entry}</td>
                                    {else}
                                    <td class="ui segment">{$entry}</td>
                                    {/if}
                                {/foreach}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p id="bottom"></p>

    <script type="text/javascript">
    
        setTimeout(function reload() {
            location.reload();
            setTimeout(reload, 300000);
        }, 300000);

        var scroll_to_down = 90000;
        var scroll_to_top = 2500;
        
        var timeout = setTimeout(function step() {
        
            $("html, body").stop().animate({
                "scrollTop": $("#bottom").offset().top
            }, scroll_to_down).animate({
                "scrollTop": $("#top").offset().top
            }, scroll_to_top);

            setTimeout(step, (scroll_to_down+scroll_to_top));
        }, 1000);
        
    </script>
{include file="html/end.tpl"}