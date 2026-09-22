<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 2 :: Exercise 4</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" type="image/x-icon" href="../../images/favicon.png">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <style>
            table, th, td {
                border: 1px solid black;
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
                    <p>Lab 2: Exercise 4</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 2: Exercise 4</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Table Selection and Event Handling</h3>
                    <table>
                        <th colspan="3">
                            Hello
                        </th>
                        <tr>
                            <td>
                                data1
                            </td>
                            <td>
                                data2
                            </td>
                            <td>
                                data3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                data1
                            </td>
                            <td>
                                data2
                            </td>
                            <td>
                                data3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                data1
                            </td>
                            <td>
                                data2
                            </td>
                            <td>
                                data3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                data1
                            </td>
                            <td>
                                data2
                            </td>
                            <td>
                                data3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                data1
                            </td>
                            <td>
                                data2
                            </td>
                            <td>
                                data3
                            </td>
                        </tr>
                    </table>

                    <br>

                    <button type="button" id="hide">Hide Odd Rows</button>
                    
                    <br>

                    <button type="button" id="show">Show Odd Rows</button>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("tr:odd").attr("style", "background-color: red;color: white;");
                            $("#hide").click(function() {
                                $("tr:odd").hide();
                            });
                            $("#show").click(function() {
                                $("tr:odd").show();
                            });
                            $("tr").click(function() { //this will also affect <th>
                                $(this).hide();
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