<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 2 :: Exercise 6</title>
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
                    <p>Lab 2: Exercise 6</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 2: Exercise 6</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>jQuery Calculator Application</h3>

                    <label for="num1">Number 1:</label>
                    <input type="text" id="num1"><br>
                    <label for="num2">Number 2:</label>
                    <input type="text" id="num2"><br>
                    <label type="text">Color:</label>
                    <input type="text" id="color">

                    <br>

                    <label for="operation">Operation:</label>
                    <select id="operation">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>

                    <br>

                    <button type="button" id="submit">Submit</button>
                    <p id="result"></p>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#submit").click(function() {
                                let num1 = $("#num1").val();
                                let num2 = $("#num2").val();
                                let operation = $("#operation").val();
                                let color = $("#color").val();
                                let result;

                                //validate input and ensure that spaces don't count with trim()
                                if (num1.trim() == "" || num2.trim() == "") {
                                    $("#result").text("Please enter both numbers.");
                                    return; //leave the click handler and don't perform the calculation
                                }

                                //Convert strings into numbers
                                num1 = Number(num1);
                                num2 = Number(num2);

                                //validate that numbers were entered
                                if (isNaN(num1) || isNaN(num2)) {
                                    $("#result").text("Please enter valid numbers.")
                                    return;
                                }

                                if (operation == "/" && num2 == 0) {
                                    $("#result").text("Cannot divide by zero.");
                                    return;
                                }

                                switch (operation) {
                                    case "+":
                                        result = num1 + num2;
                                        break;
                                    case "-":
                                        result = num1 - num2;
                                        break;
                                    case "*":
                                        result = num1 * num2;
                                        break;
                                    case "/":
                                        result = num1 / num2;
                                        break;
                                };

                                $("#result").text("Result: " + result);
                                $("#result").css("color", color);
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