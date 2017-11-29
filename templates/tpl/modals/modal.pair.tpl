<div class="ui modal" id="schedule">
    <div class="header">
        Показать основной расписание
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <label>Институт</label>
                <select>
                    <option>БИРХ</option>
                    <option>ТПП</option>
                    <option>САИТП</option>
                    <option>СГТ</option>
                </select>
            </div>
            <div class="field">
                <label>Курс</label>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="field">
                <label>Группа</label>
                <select>
                    <option>16.03.03</option>
                </select>
            </div>
            <div class="field" style="text-align: center;">
                <a id="cl" class="ui primary button">Показать</a>
            </div>
        </form>
    </div>
</div>

<script>

    $("#cl").on("click", function(){
        alert("На данный момент расписание находиться на модерации");
    });

</script>