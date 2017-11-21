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