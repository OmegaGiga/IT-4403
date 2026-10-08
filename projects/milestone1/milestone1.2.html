<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Project Milestone 1 :: Exercise 2</title>
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
                    <p>Project Milestone 1: Exercise 2</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Project Milestone 1: Exercise 2</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Book Search Results</h3>
                    <div id="booklist"></div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $.getJSON("../../json/openlibrary-search.json", function(data){
                                for (let i = 0; i < data.docs.length; i++) {
                                    let book = $("<section>");
                                    let title = $("<h4>");
                                    let author = $("<p>");
                                    let first_publish_year = $("<p>");
                                    let edition_count = $("<p>");
                                    
                                    let cover_image = $("<img>");
                                    let cover_URL = "https://covers.openlibrary.org/b/id/" 
                                    + data.docs[i].cover_i + "-M.jpg";
                                    let cover_alt_text = "Cover of " + data.docs[i].title;

                                    let openlibrary_record_link = $("<p>");
                                    let record_URL = "https://openlibrary.org" + data.docs[i].key;
                                    
                                    let language = $("<p>");
                                    let ebook_access = $("<p>");
                                    let has_fulltext = $("<p>");
                                    let cover_edition_key = $("<p>");
                                    let subtitle = $("<p>");

                                    title.html(data.docs[i].title);
                                    author.html("Author(s): " + data.docs[i].author_name.join(", "));
                                    first_publish_year.html("First Publication Year: " + data.docs[i].first_publish_year);
                                    edition_count.html("Edition Count: " + data.docs[i].edition_count);
                                    cover_image.attr("src", cover_URL);
                                    cover_image.attr("alt", cover_alt_text);
                                    
                                    openlibrary_record_link.html("Open Library Record: <a href='https://openlibrary.org" 
                                    + data.docs[i].key + "' target='_blank'>https://openlibrary.org" 
                                    + data.docs[i].key + "</a>");
                                    
                                    language.html("Language(s): " + data.docs[i].language.join(", "));
                                    ebook_access.html("eBook Access: " + data.docs[i].ebook_access.replace("_", " "));
                                    has_fulltext.html("Has Fulltext: " + data.docs[i].has_fulltext);
                                    
                                    cover_edition_key.html("Cover Edition: <a href='https://openlibrary.org/books/" 
                                    + data.docs[i].cover_edition_key 
                                    + "' target='_blank'>https://openlibrary.org/books/" 
                                    + data.docs[i].cover_edition_key + "</a>");

                                    subtitle.html("Subtitle: " + data.docs[i].subtitle);
                                    
                                    if (data.docs[i].title) {
                                        book.append(title);
                                    }
                                    if (data.docs[i].author_name) {
                                        book.append(author);
                                    }
                                    if (data.docs[i].first_publish_year) {
                                        book.append(first_publish_year);
                                    }
                                    if (data.docs[i].edition_count) {
                                        book.append(edition_count);
                                    }
                                    if (data.docs[i].cover_i) {
                                        book.append(cover_image);
                                    }
                                    if (data.docs[i].key) {
                                        book.append(openlibrary_record_link);
                                    }
                                    if (data.docs[i].language) {
                                        book.append(language);
                                    }
                                    if (data.docs[i].ebook_access) {
                                        book.append(ebook_access);
                                    }
                                    if (data.docs[i].has_fulltext) {
                                        book.append(has_fulltext);
                                    }
                                    if (data.docs[i].cover_edition_key) {
                                        book.append(cover_edition_key);
                                    }
                                    if (data.docs[i].subtitle) {
                                        book.append(subtitle);
                                    }

                                    if (i < data.docs.length - 1) {
                                        book.append("<hr>")
                                    }

                                    $("#booklist").append(book);
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