{$title = "Newsletter | Главная"}
{include file="html/begin.tpl"}
    <div id="wrapper" class="ui two column centered grid" style="margin-top: 25%;"> <!-- FIXME: -->
        <div class="four column centered row">
            <div class="column">
            <a class="ui positive button" id="main_schedule_button">Расписание</a>
            </div>
            <div class="column">
            <a class="ui orange button" id="change_schedule_button">Изменения</a>
            </div>
            <div class="column">
            <a class="ui primary button" id="dop_schedule_button">Элективные курсы</a>
            </div>
        </div>
    </div>

    {include file="modals/modal.main_schedule.tpl"}
    {include file="modals/modal.change_schedule.tpl"}
    {include file="modals/modal.dop_schedule.tpl"}

    <script type="text/javascript">

        $("#main_schedule_button").on("click", function () {
            $("#main_schedule").modal("show");
        });

        $("#change_schedule_button").on("click", function () {
            $("#c_schedule").modal("show");
        });

        $("#dop_schedule_button").on("click", function () {
            $("#dop_schedule").modal("show");
        });
		
    </script>
{include file="html/end.tpl"}