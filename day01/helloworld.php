<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <style>
        body{
            background: bisque;
        }
    </style>
</head>
<body>
    <h1> My first php file </h1>

    <?php

        echo "<h2 style='font-size: 30px; color: purple'>   Hello world </h2> ";
        echo "test  long string ";
        echo "<br>";
        echo "Application Nasr city 42";
        # single line comment
        // single-line comment
        /*
         * multi-line comment
         *
         *
         *
         * */

        echo "<p>Now, Its ";
        echo date('H:i , jS F Y');
        echo "</p>";



    ?>

    <script>
        alert("I am happy to work with you")
    </script>
</body>
</html>
