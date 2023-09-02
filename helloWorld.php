<?php

    //This is a PHP code block
    //echo "Hello World!";  //Similar to document.write()

    $studentName = "Mary"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

        let studentName = "<?php echo $studentName; ?>";

        let cars = ["Chevy", "Ford"];

    </script>
</head>
<body>
    <h1 <?php echo "style='color: red'"?>>WDV 341 Intro PHP</h1>
    <h2>Unit-2 PHP Basics <?php echo "Welcome to PHP" ?></h2>
    <p>Welcome to Intro PHP! <?php echo $studentName; ?></p>
    <p>JavaScript thinks your name is <script>document.write(studentName);</script>.</p>
</body>
</html>