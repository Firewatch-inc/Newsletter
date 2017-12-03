
/*!
  @descp Скрипт для определения дня недели
*/

var date = new Date;
var day = date.getDay();

if (day != 0) {
  document.getElementById(day).setAttribute("class", "ui active red step");
} else {

}