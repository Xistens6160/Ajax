function callDate() {
    $.post('info.php', function (data) {
        var response = JSON.parse(data);
        var date = response.date;
        $('#demo').html(date);
})
}
function callDay() {
    $.post('info.php', function (data) {
        var response = JSON.parse(data);
        var day = response.day;
        $('#demo').html(day);
    })
}
function callMonth() {
    $.post('info.php', function (data) {
        var response = JSON.parse(data);
        var month = response.month;
        $('#demo').html(month);
    })
}
function callYear() {
    $.post('info.php', function (data) {
        var response = JSON.parse(data);
        var year = response.year;
        $('#demo').html(year);
    })
}



