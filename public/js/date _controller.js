var takenDates = [
    "25-07-2023", // Example taken date
    "28-07-2023 - 30-07-2023", // Another example taken date
    "10-08-2023 - 30-08-2023", // Another example taken date
    // Add more taken dates if needed
];

var dateToday = new Date();

$("#from, #to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    beforeShowDay: function(date) {
        var dateString = $.datepicker.formatDate('dd-mm-yy', date);
        var isTaken = isDateTaken(dateString);
        return [!isTaken, ''];
    },
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate";
        var instance = $(this).data("datepicker");
        var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        $("#from, #to").not(this).datepicker("option", option, date);
    }
});

function isDateTaken(dateString) {
    for (var i = 0; i < takenDates.length; i++) {
        var takenDate = takenDates[i];
        if (isDateRange(takenDate)) {
            var range = takenDate.split(" - ");
            var startDate = new Date(parseDateFormat(range[0]));
            var endDate = new Date(parseDateFormat(range[1]));
            var currentDate = new Date(parseDateFormat(dateString));

            if (currentDate >= startDate && currentDate <= endDate) {
                return true;
            }
        } else {
            if (dateString === takenDate) {
                return true;
            }
        }
    }
    return false;
}

function isDateRange(dateString) {
    return dateString.includes(" - ");
}

function parseDateFormat(dateString) {
    var parts = dateString.split("-");
    var day = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10) - 1;
    var year = parseInt(parts[2], 10);
    return new Date(year, month, day);
}
