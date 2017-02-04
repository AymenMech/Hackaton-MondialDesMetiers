function countdown() {
    var countdown = document.getElementById("countdown");
    var current_date = new Date();
    var event_date = new Date("Feb 02 10:00:00 2017");
    var total_seconds = (event_date - current_date) / 1000;

    function doubleZero($time) {
        if ($time < 10) {
            $time = '0' + $time;
        }
        return $time;
    }

    if (total_seconds > 0) {
        var days = Math.floor(total_seconds / (60 * 60 * 24));
        var hours = Math.floor((total_seconds - (days * 60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((total_seconds - ((days * 60 * 60 * 24 + hours * 60 * 60))) / 60);
        var seconds = Math.floor(total_seconds - ((days * 60 * 60 * 24 + hours * 60 * 60 + minutes * 60)));

        countdown.innerHTML =
            '<p id="countTime">' + doubleZero(hours) + ':' + doubleZero(minutes) + ':' + doubleZero(seconds) + '</p>' +
            '<p id="countDay">J - ' + days;
    }

    var actualisation = setTimeout("countdown()", 1000);
}

countdown();
