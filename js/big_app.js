$(document).ready(function() {
    var query = "rat";
    var apiKey = "z3YJ8ismnnJWET9peN2Av5ZUDPpxWqRcsuRBBrt3E6ztJQ6ix9tnixO3";
    var perPage = 20;
    var url = "https://api.pexels.com/v1/search?query=" + encodeURIComponent(query) + "&per_page=" + perPage;
    $.ajax({
        type: "GET",
        url: url,
        headers: {
            "Authorization": apiKey
        },
        success: function(data) {
            var results = data.photos;
            var randomResults = shuffleArray(results); // shuffle the results array
            var html = "";
            for (var i = 0; i < 20; i++) { // change the loop to iterate only 10 times
                html += "<img src='" + randomResults[i].src.medium + "'>";
            }
            $("#big_images").html(html);
        },
        error: function(xhr, status, error) {
            alert("Error: " + error);
        }
    });
});

function shuffleArray(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}
