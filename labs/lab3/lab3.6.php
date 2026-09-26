<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 3 :: Exercise 6</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" type="image/x-icon" href="../../images/favicon.png">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <style>
            ul {
                margin: 0;
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div class="window">
            <header>
                <div class="title-bar">
                    <button type="button">x</button>
                    <button type="button">-</button>
                    <button type="button">+</button>
                    <p>Lab 3: Exercise 6</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 3: Exercise 6</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Movie Information Page</h3>
                    <h4>Movie Information</h4>
                    <p id="title"></p>
                    <p id="release_info"></p>
                    <p id="genre">
                        Genres:
                        <ul id="genre_list"></ul>
                    </p>
                    <p id="description"></p>
                    <p id="rating">
                        Ratings:
                        <ul id="rating_list" ></ul>
                    </p>
                    <p id="cast">
                        Abridged Cast:
                        <ul id="cast_list"></ul>
                    </p>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $.getJSON("../../json/movie.json", function(data) {
                                $("#title").html("Title: " + data.title);
                                $("#release_info").html("Theater Release Date: " + data.release_dates.theater);
                                $("#release_info").append("<p>DVD Release Date: " + data.release_dates.dvd + "</p>");
                                
                                for (let i = 0; i < data.genres.length; i++) {
                                    $("#genre_list").append("<li>" + data.genres[i] + "</li>");
                                };

                                $("#description").html("Synopsis:<br><blockquote>" + data.synopsis + "</blockquote>");
                                $("#rating_list").append("<li>Critics Rating: " + data.ratings.critics_rating + "</li>");
                                $("#rating_list").append("<li>Critics Score: " + data.ratings.critics_score + "</li>");
                                $("#rating_list").append("<li>Audience Rating: " + data.ratings.audience_rating + "</li>");
                                $("#rating_list").append("<li>Audience Score: " + data.ratings.audience_score + "</li>");

                                for (let i = 0; i < data.abridged_cast.length; i++) {
                                    $("#cast_list").append("<li>Name: " + data.abridged_cast[i].name + "</li>");
                                    for (let k = 0; k < data.abridged_cast[i].characters.length; k++) {
                                        $("#cast_list").append("<li>Character(s): " + data.abridged_cast[i].characters[k] + "</li>");
                                    };
                                    if (i < data.abridged_cast.length - 1) {
                                        $("#cast_list").append("<br>");
                                    };
                                };
                            });
                        });
                    </script>
                </div>
            </main>

            <hr>
            
            <footer class="footer">
                <p><a href="https://campus.kennesaw.edu/colleges-departments/ccse/academics/information-technology/" target="_blank">
                    CCSE Department of IT Website</a> | 
                    Disclaimer: This is a student website created for course projects in IT 4403.</p>
            </footer>
        </div>
    </body>
</html>