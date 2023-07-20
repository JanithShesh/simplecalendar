function previousMonth() {
    // Send an AJAX request to the server to get the previous month's events
    // Update the calendar with the new events using jQuery's $.ajax() and .html() methods
    $.ajax({
        url: 'calendar.php',
        type: 'GET',
        data: {
            year: calendar.active_year,
            month: calendar.active_month - 1
        },
        success: function(data) {
            calendar.previous_month();
            calendar.add_events(data);
            $('#calendar').html(calendar);
        }
    });
}

function nextMonth() {
    // Send an AJAX request to the server to get the next month's events
    // Update the calendar with the new events using jQuery's $.ajax() and .html() methods
    $.ajax({
        url: 'calendar.php',
        type: 'GET',
        data: {
            year: calendar.active_year,
            month: calendar.active_month + 1
        },
        success: function(data) {
            calendar.next_month();
            calendar.add_events(data);
            $('#calendar').html(calendar);
        }
    });
}

