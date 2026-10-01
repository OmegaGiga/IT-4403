<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Project Milestone 1 :: Exercise 1</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.png">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <style>
            @font-face {
                font-family: "Noto Sans JP";
                src: url("../../css/fonts/NotoSansJP-VariableFont_wght.ttf") format("truetype");
                font-weight: 100 900;
            }
            @font-face {
                font-family: "Noto Serif JP";
                src: url("../../css/fonts/NotoSerifJP-VariableFont_wght.ttf") format("truetype");
                font-weight: 200 900;
            }
            @font-face {
                font-family: "Unifont-JP";
                src: url("../../css/fonts/unifont_jp-17.0.03.otf") format("opentype");
            }
            @font-face {
                font-family: "KHドット日比谷32";
                src: url("../../css/fonts/KH-Dot-Hibiya-32.ttf") format("truetype");
            }
            * {
                box-sizing: border-box;
            }
            body {
                background-color: darkgray;
                margin: 0;
                font-family: "Noto Serif JP";
            }
            .window {
                padding: 5px;
                padding-bottom: 10px;
                background-color: lightgray;
                border: 1px solid gray;
                box-shadow: 2px 2px 6px #777;
                width: 50%;
                margin: auto;
                
            }
            @media (max-width: 1280px) {
                .window {
                    width: 60%;
                }
            }
            @media (max-width: 1080px) {
                .window {
                    width: 70%;
                }
            }
            @media (max-width: 900px) {
                .window {
                    width: 100%;
                }
            }
            .window-content {
                background-color: white;
                padding: 12px;
            }
            .welcome p {
                margin: 0;
                margin-bottom: 10px;
            }
            .title-bar {
                display: flex;
                gap: 5px;
                align-items: center;
            }
            .title-bar p {
                margin: 0;
                padding-left: 5px;
            }
            .title-bar button {
                width: 25px;
                border: 1px solid gray;
                border-radius: 10px;
            }
            .site-heading {
                background-color: white;
                text-align: center;
            }
            .site-heading h1 {
                font-size: 24px;
                margin: 0;
            }
            .site-heading h2 {
                font-size: 18px;
                margin: 0;
            }
            .navbar {
                background-color: #eee;
                display: flex;
                border-style: outset;
                border-color: #eee;
                border-width: 2px 2px 2px 0;
            }
            .navbar a {
                flex: 1;
                padding: 7px;
                font-size: larger;
                text-align: center;
            }
            .navbar a:hover {
                background-color: lightgray;
            }
            .navbar a:active {
                background-color: darkgray;
            }
            .coursework {
                display: flex;
                gap: 10px;
            }
            .coursework > section {
                flex: 1;
                padding: 10px;
                background-color: #eee;
                border: 1px solid lightgray;
            }
            @media (max-width: 600px) {
                .site-heading h1 {
                    font-size: 20px;
                }
                .site-heading h2 {
                    font-size: 16px;
                }
                .coursework {
                    flex-direction: column;
                }
                .navbar {
                    flex-wrap: wrap;
                }
                .navbar a {
                    flex: 0 0 50%;
                }
            }
            .footer {
                background-color: lightgray;
                padding: 8px;
            }
            .footer p {
                margin: 0;
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
                    <p>Project Milestone 1: Exercise 1</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Project Milestone 1: Exercise 1</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Single Book Data</h3>
                    <h4 id="title"></h4>
                    <p id="publisher">Publisher(s): </p>
                    <p id="publication_date"></p>
                    <p id="page_count"></p>
                    <p id="isbn_10"></p>
                    <p id="isbn_13"></p>
                    <div id="cover_image">
                        <p>Book Cover(s): </p>
                    </div>
                    <p id="author">Author(s): </p>
                    <p id="first_sentence"></p>
                    <p id="openlibrary_record">Open Library Record: </p>
                    <p id="contributions">Contributions: </p>
                    <p id="language">Language(s): </p>
                    <div id="works_div">
                        <p>Works: </p>
                        <ul id="works"></ul>
                    </div>
                    

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $.getJSON("../../json/openlibrary-book.json", function(data){
                                $("#title").html(data.title);
                                
                                for (let i = 0; i < data.publishers.length; i++) {
                                    if (i < data.publishers.length - 1) {
                                        $("#publisher").append(data.publishers[i] + ", ");
                                    } else {
                                        $("#publisher").append(data.publishers[i]);
                                    }
                                }

                                $("#publication_date").html("Publication Date: " + data.publish_date);
                                $("#page_count").html("Page Count: " + data.number_of_pages);
                                $("#isbn_10").html("ISBN-10: " + data.isbn_10);
                                $("#isbn_13").html("ISBN-13: " + data.isbn_13);

                                for (let i = 0; i < data.covers.length; i++) {
                                    if (data.covers[i] != -1) {
                                        let cover_URL = "https://covers.openlibrary.org/b/id/" + data.covers[i] + "-M.jpg";
                                        $("#cover_image").append("<img src='" + cover_URL + "' alt='Cover of " + data.title + "'>");
                                        if (i < data.covers.length - 1) {
                                            $("#cover_image").append(" ");
                                        }
                                    }
                                }

                                for (let i = 0; i < data.authors.length; i++) {
                                    $.getJSON("https://openlibrary.org" + data.authors[i].key + ".json", function (authorData) {
                                        if(i < data.authors.length - 1) {
                                            $("#author").append(authorData.name + ", ");
                                        } else {
                                            $("#author").append(authorData.name);
                                        }
                                    });
                                }

                                $("#first_sentence").html("First Sentence: " + data.first_sentence.value);
                                
                                $("#openlibrary_record").append("<a href='https://openlibrary.org" + data.key 
                                + "' target='_blank'>https://openlibrary.org" + data.key + "</a>");
                                
                                for (let i = 0; i < data.contributions.length; i++) {
                                    if (i < data.contributions.length - 1) {
                                        $("#contributions").append(data.contributions[i] + ", ");
                                    } else {
                                        $("#contributions").append(data.contributions[i]);
                                    }
                                }

                                for (let i = 0; i < data.languages.length; i++) {
                                    $.getJSON("https://openlibrary.org" + data.languages[i].key + ".json", function(languageData) {
                                        if (i < data.languages.length - 1) {
                                            $("#language").append(languageData.name + ", ");
                                        } else {
                                            $("#language").append(languageData.name);
                                        }
                                    });
                                }

                                for (let i = 0; i < data.works.length; i++) {
                                    $("#works").append("<li><a href='https://openlibrary.org" 
                                        + data.works[i].key 
                                        + "' target='_blank'>https://openlibrary.org" 
                                        + data.works[i].key + "</a></li>");
                                }
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