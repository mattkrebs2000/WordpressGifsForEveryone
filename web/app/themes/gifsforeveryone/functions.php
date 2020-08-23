<?php
function add_js_functions(){
?>
<script>
$(document).ready(function() {
    const interests = ["funny", "crying", "falling", "dancing"];

    const renderButtons = () => {
        $("#buttons").empty();
        $.each(interests, function(index, value) {
            var a = $("<button>");
            a.addClass("buttons");
            a.attr("data-a", value);
            a.text(value);
            $("#buttons").append(a);
        });
    }

    $(document).on("click", "#submit", function(event) {
        event.preventDefault();
        //take the text value and trim white space. 
        var newInterest = $("#topic").val().trim();
        interests.push(newInterest);
        // take off the first one to keep it at 4 buttons. 
        interests.splice(0, 1);
        renderButtons();
    });

    $(document).on("click", ".buttons", function() {
        var sports = $(this).attr("data-a").trim();
        var queryURL =
            "https://api.giphy.com/v1/gifs/search?q=" +
            sports +
            "&api_key=BkaUZZWcFij6J7AoQj3WtPb1R2p9O6V9&limit=10";
        $.ajax({
            url: queryURL,
            method: "GET",
        }).then(function(response) {
            var results = response.data;
            $("#gifs-appear-here").empty();
            $.each(results, function(index, value) {
                var getDiv = $("#gifs-appear-here");
                var sportsDiv = $("<div>");
                var p = $("<p>").text("Gif Rating: " + results[index].rating);
                var pp = $("<p>").text("Title: " + results[index].title);
                sportsDiv.addClass("carousel-item");
                sportsDiv.addClass("active");
                p.addClass("gifdirections");
                pp.addClass("gifdirections");
                sportsDiv.attr("number", index);
                var sportsImage = $("<img>");
                sportsImage.addClass("d-block");
                sportsImage.addClass("img-fluid");
                sportsImage.addClass("changeImage");
                sportsImage.attr("src", results[index].images.original_still.url);
                sportsImage.attr(
                    "data-animate",
                    results[index].images.fixed_height.url
                );
                sportsImage.attr(
                    "data-still",
                    results[index].images.fixed_height_still.url
                );
                sportsImage.attr("data-state", "still");
                sportsImage.addClass("gif");
                sportsDiv.append(pp);
                sportsDiv.append(p);
                sportsDiv.append(sportsImage);
                getDiv.prepend(sportsDiv);
                getDiv.prepend("<br>");
                $("#photoModal").modal("show");
                $("#mycarousel").carousel();
            });
        });
    });
    renderButtons();
    $(document).on("click", ".gif", function() {
        var state = $(this).attr("data-state");
        if (state === "animate") {
            $(this).attr("src", $(this).attr("data-still"));
            $(this).attr("data-state", "still");
        } else {
            $(this).attr("src", $(this).attr("data-animate"));
            $(this).attr("data-state", "animate");
        }
    });
});
</script>
<?php
}
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
add_action('wp_head','add_js_functions');