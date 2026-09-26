<!DOCTYPE html>
<html>
    <head lang="en-us">
        <meta charset="UTF-8">
        <meta name="author" content="Leonardo Mendez-Rivera">
        <meta name="description" content="Site for showcasing IT 4403 labs, exercises, and projects.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT 4403 - Project Showcase :: Lab 3 :: Exercise 4</title>
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
                    <p>Lab 3: Exercise 4</p>
                </div>

                <hr>

                <div class="site-heading">
                    <h1>Lab 3: Exercise 4</h1>
                </div>

                <nav class="navbar">
                    <a href="../../index.php">Home</a>
                </nav>
            </header>
            
            <main class="window-content">
                <div>
                    <h3>Work with Nested JSON Data</h3>
                    <p>JSON structure:</p>
<pre>
{
    "student": {
        "name": "Giga Tyoujigen",
        "major": "Japanese",
        "email": "Tgiga9@kennesaw.students.edu",
        "courses": [
            {
                "code": 1103,
                "title": "Intro to Asian Cultures",
                "credits": 3
            },
            {
                "code": 1001,
                "title": "Elementary Japanese I",
                "credits": 3
            },
            {
                "code": 1108,
                "title": "World History",
                "credits": 4
            }
        ]
    }
}
</pre>
                    <h4>Student Information</h4>
                    <p id="student_name"></p>
                    <p id="student_major"></p>
                    <p id="student_email"></p>

                    <h4>Student Courses</h4>
                    <div id="student_courses"></div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            const student_data = {
                                "student": {
                                    "name": "Giga Tyoujigen",
                                    "major": "Japanese",
                                    "email": "Tgiga9@kennesaw.students.edu",
                                    "courses": [
                                        {
                                            "code": 1103,
                                            "title": "Intro to Asian Cultures",
                                            "credits": 3
                                        },
                                        {
                                            "code": 1001,
                                            "title": "Elementary Japanese I",
                                            "credits": 3
                                        },
                                        {
                                            "code": 1108,
                                            "title": "World History",
                                            "credits": 4
                                        }
                                    ]
                                }
                            };

                            //display student information
                            $("#student_name").html("Name: " + student_data.student.name);
                            $("#student_major").html("Major: " + student_data.student.major);
                            $("#student_email").html("Email: " + student_data.student.email);

                            //display student courses
                            for (let i = 0; i < student_data.student.courses.length; i++) {
                                $("#student_courses").append("<p>Course Code: " + student_data.student.courses[i].code + "</p>");
                                $("#student_courses").append("<p>Course Title: " + student_data.student.courses[i].title + "</p>");
                                $("#student_courses").append("<p>Credit Hours: " + student_data.student.courses[i].credits + "</p>");

                                if (i < student_data.student.courses.length - 1) {
                                    $("#student_courses").append("<br>");
                                };
                            };
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