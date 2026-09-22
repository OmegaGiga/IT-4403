<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 2 :: Exercise 2</title>
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
                    <p>Lab 2: Exercise 2</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 2: Exercise 2</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>jQuery ready() and Event Handling</h3>
                    <p id="paragraph1">p1</p>
                    <p id="paragraph2">p2</p>
                    <button type="button" id="button1">b1</button>
                    <button type="button" id="button2">b2</button>

                    <!--$(document).read() helps because it waits for the DOM to load, 
                    so you can run the script from anywhere.-->
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("#button1").click(function(){
                                $("#paragraph1").hide();
                            });
                            $("#button2").click(function(){
                                $("#paragraph2").hide();
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