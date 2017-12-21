{$title = "Newsletter | Главная"}
{include file="html/begin.tpl"}
    <div class="ui menu">
        <a class="item">
            <div class="ui mini statistic">
                <div class="value">
                    {$count_institutes}
                </div>
                <div class="label">
                    Институтов
                </div>
            </div>
        </a>
        <a class="item">        
            <div class="ui mini statistic">
                <div class="value">
                    {$count_groups}
                </div>
                <div class="label">
                    Групп
                </div>
            </div>
        </a>
        <a class="item">
            <div class="ui mini statistic">
                <div class="value">
                    {$count_subjects}
                </div>
                <div class="label">
                    Предметов
                </div>
            </div>
        </a>
        <div class="right menu">
            <a class="item" id="guideButton"><i class="circle question large icon"></i></a>
        </div>
    </div>
    <div id="wrapper" class="ui two column centered grid"> <!-- FIXME: -->
        <div class="one column centered row" id="background">
            <div class="column">
                <h1><i class="book icon"></i>Система Электронного Расписания</h1>
            </div>
        </div>
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
        <div class="row">
            <div class="ui vertical footer segment">
                <div class="ui center aligned container">
                    <div class="ui horizontal inverted small divided link list">
                        <a class="item" href="#" style="font-size: 32px; color: black;">Сегодня: {$smarty.now|date_format:"%d.%m.%Y"}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {include file="modals/modal.main_schedule.tpl"}
    {include file="modals/modal.change_schedule.tpl"}
    {include file="modals/modal.dop_schedule.tpl"}
    {include file="modals/modal.guide.tpl"}

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

        $("#guideButton").on('click', function() {
            $("#guide").modal("show");
        });
        
        $(".ui.accordion").accordion();
        
        function getGroups(institute, education_course, education_form) {
            $.ajax({
                url: "admin/php/get_groups.php",
                type: "POST",
                data: { institute: institute, education_course: education_course, education_form: education_form },
                success: function(replay) {
                    if (replay !== "") {
                        $("[name='group']").html("");
                        $("[name='group']").html(replay);
                    } else {
                        $("[name='group']").html("");
                    }
                },
                error: function (replay) {
                    console.log(replay);
                }
            });
        }

        $(document).ready(function() {
            $("[name='institute']").val(localStorage.getItem("current_institute"));
            $("[name='education_course']").val(localStorage.getItem("current_education_course"));
            $("[name='education_form']").val(localStorage.getItem("current_education_form"));
            getGroups(
                localStorage.getItem("current_institute"),
                localStorage.getItem("current_education_course"),
                localStorage.getItem("current_education_form")
            );
        });

        $("[name='institute'], [name='education_course'], [name='education_form']").on("change", function() {
            getGroups($("[name='institute']").val(), $("[name='education_course']").val(), $("[name='education_form']").val());

            localStorage.setItem("current_institute", $("[name='institute']").val());
            localStorage.setItem("current_education_course", $("[name='education_course']").val());
            localStorage.setItem("current_education_form", $("[name='education_form']").val());
        });
        
        
        var updateInterval = 900000;
        setTimeout(function update() {
            document.location.href = "index.php";
            setTimeout(update, updateInterval);
        }, updateInterval);
        
		
    </script>


{include file="html/end.tpl"}