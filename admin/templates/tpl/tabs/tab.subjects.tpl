<div class="ui internally stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeSubjectsForm" method="POST" class="ui form">
                <div class="actinos">
                    <div class="ui borderless menu">
                        <a class="item"><input type="number" name="s_limit" placeholder="С" min="0"></a>
                        <a class="item"><input type="number" name="e_limit" placeholder="По" min="0"></a>
                        <div class="right menu">
                            <a class="item"><input type="button" name="showSubjects" value="Показать" class="ui positive button"></a>
                            <a class="item"><input type="submit" name="removeSubjectsButton" value="Удалить" class="ui red button"></a>
                        </div>
                    </div>
                </div>
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Выбрать</th>
                        </tr>
                    </thead>
                    <tbody id="subjects_table_body">

                    </tbody>
                </table>
            </form>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление предмента</b></legend>
                <form name="addSubjectForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption">
                    </div>
                    <div class="field">
                        <input type="submit" name="addSubjectButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<script type="text/javascript">

    $("[name='showSubjects']").on("click", function(){
        let start = $("[name='s_limit']").val();
        let end = $("[name='e_limit']").val();

        if (start < end) {
            $.ajax({
                url: "php/get_limit_subjects.php",
                type: "POST",
                data: { interval: { start: start, end: end} },
                success: function (replay) {
                    $("#subjects_table_body").html("");
                    $("#subjects_table_body").html(replay);
                },
                error: function (replay) {
                    
                }
            });
        }

    });

</script>