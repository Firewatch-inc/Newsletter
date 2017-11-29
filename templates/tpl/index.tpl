{$title = "Newsletter | Главная"}
{include file="html/begin.tpl"}
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="ui two column centered grid">
        <div class="four column centered row">
          <div class="column">
            <a class="ui positive button" id="main_schedule">Расписание</a>
          </div>
          <div class="column">
            <a class="ui orange button" id="change_schedule">Изменения</a>
          </div>
          <div class="column">
            <a class="ui primary button" id="dop_schedule">Элективные курсы</a>
          </div>
        </div>
      </div>

    <p id="bottom"></p>

    {include file="modals/modal.pair.tpl"}
    {include file="modals/modal.change_schedule.tpl"}
    {include file="modals/modal.add_schedule.tpl"}

    <input type="hidden" id="updateInterval" value="{$updateInterval}">
    <script type="text/javascript">

        $("#main_schedule").on("click", function () {
            $("#schedule").modal("show");
        });

        $("#change_schedule").on("click", function () {
            $("#c_schedule").modal("show");
        });

        $("#dop_schedule").on("click", function () {
            $("#add_schedule").modal("show");
        });


        let updateInterval = document.getElementById("updateInterval").value;
        
        if (updateInterval > 0) {
            setTimeout(function reload() {
                location.reload();
                setTimeout(reload, updateInterval);
            }, updateInterval);
        }

        var scroll_to_down = 90000;
        var scroll_to_top = 2500;
        /*
        var timeout = setTimeout(function step() {
        
            $("html, body").stop().animate({
                "scrollTop": $("#bottom").offset().top
            }, scroll_to_down).animate({
                "scrollTop": $("#top").offset().top
            }, scroll_to_top);

            setTimeout(step, (scroll_to_down+scroll_to_top));
        }, 1000);
        
		*/
		
    </script>
{include file="html/end.tpl"}