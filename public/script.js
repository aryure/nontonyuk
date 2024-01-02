$(document).ready(function() {
    $('.releaseYear').each(function() {
        var releaseDate = $(this).text();
        var year = new Date(releaseDate).getFullYear();

        // Check if the year is a valid number
        if (!isNaN(year)) {
            $(this).html(year);
        } else {
            console.error('Invalid date format:', releaseDate);
        }
    });
});
