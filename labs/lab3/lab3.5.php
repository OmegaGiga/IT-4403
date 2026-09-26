<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 3 :: Exercise 5</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" type="image/x-icon" href="../../images/favicon.png">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    </head>
    <body>
        <div class="window">
            <header>
                <div class="title-bar">
                    <button type="button">x</button>
                    <button type="button">-</button>
                    <button type="button">+</button>
                    <p>Lab 3: Exercise 5</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 3: Exercise 5</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Read and Display JSON from a File</h3>
                    <h4>Weather</h4>
                    <p id="city"></p>
                    <p id="country"></p>
                    <p id="temp"></p>
                    <p id="humidity"></p>
                    <p id="wind_speed"></p>
                    <p id="description"></p>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $.getJSON("../../json/weather.json", function(data) {
                                $("#city").html("City: " + data.name);
                                $("#country").html("Country: " + data.sys.country);
                                $("#temp").html("Temperature: " + data.main.temp);
                                $("#humidity").html("Humidity: " + data.main.humidity);
                                $("#wind_speed").html("Wind Speed: " + data.wind.speed);
                                $("#description").html("Weather description: " + data.weather[0].description);
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