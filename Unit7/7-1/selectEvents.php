<?php

    //database work flow
    //  1. Connect to the database
    //  2. Create your SQL command
    //  3. Prepare your Statement       PDO Prepared Statements
    //  4. Bind any parameters as needed
    //  5. Execute your SQL command/prepared statement
    //  6. Process your result-set/object

    //include an external PHP file into this file
    //  include
    //  require

    //1. 
    require '../../Unit6/6-2/dbConnect.php';    //copies the content of the dbConnect.php INTO this page       

    //2. create the SQL command
    $sql = "SELECT events_name,events_description FROM wdv341_events";     //all rows in that table

    //3. prepare out statement object PDO Prepared Statements
    $stmt = $conn->prepare($sql);   // -> is used instead of . for object->property or object->method
    
        //$stmt = $conn.prepare($sql);    //concatenating $conn with the prepare()

    //4. No parameters

    //5. Execute the statement
    $stmt->execute();   //runs the prepared statement, stores the results within the statement object      

    //6. 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);      //setting ALL fetch commands to return associative array

    /*
    $row = $stmt->fetch();      //should get the first row from the result set within the statement object
    echo $row["events_name"];

    $row = $stmt->fetch();      //should get the first row from the result set within the statement object
    echo $row["events_name"];

    $row = $stmt->fetch();      //should get the first row from the result set within the statement object
    echo $row["events_name"];

    $row = $stmt->fetch();      //should get the first row from the result set within the statement object
    echo $row["events_name"];

    $row = $stmt->fetch();      //should get the first row from the result set within the statement object
    echo $row["events_name"];
    */

    /*
    while($row = $stmt->fetch() ){      //$row is an associative array
        echo "<h3>";
        echo $row["events_name"];
        echo "</h3>";
        echo "<p>Event Description: ";
        echo $row["events_description"];
        echo "</p>";
    */




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .eventBox {
            border:thin solid black;
            margin-bottom:20px;
        }

        .boldEvent {
            font-weight:bold;
        }

    </style>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Unit-7 Select data from events table</h2>
    <h3>Event Names</h3>

    <p>Create a PHP page called selectEvents.php.  This page will use and SQL SELECT query pull all of the events on your events table.  It will display them in a table on the page.  If there is nothing in your table it will display a message for your client.</p>

    <p>The page will do the following:</p>
    <ol>
        <li>Connect the page to your database using the dbConnect file.</li>
        <li>Create an SQL SELECT command in PDO that uses Prepared Statements to pull all the events from your events table.</li>
        <li>Process the SQL command and create a result.  It will include error handling in case your SELECT fails to run properly or the table is empty.</li>
        <li>Use a PHP loop to process each row in the result.</li>
        <li>Format each row from the result into a table like row. You can build an HTML table, or use CSS Flexbox or CSS Grid layouts to make it look like a table.</li>
        <li>Display the final results to the client.</li>
    </ol>

    <?php 
        while($row = $stmt->fetch() ){      //$row is an associative array
            echo "<div class='eventBox'>";
                echo "<h3>";
                    echo $row["events_name"];
                echo "</h3>";
                    echo "<p><span class='boldEvent'>Event Description:</span> ";
                    echo $row["events_description"];
                echo "</p>";
            echo "</div>\n";        // \n puts the next on a new line
        }
        /*
        $stmt->execute();   //runs the prepared statement, stores the results within the statement object      
        while($row = $stmt->fetch() ){
            echo "<p>";
            echo $row["events_name"];
            echo "</p>";
        }

        to display the index we need to iterate through an array
        array?  The array of rows in the result set of the Statement object
            how do I get an array of rows from result set?   use $stmt->fetchAll() returns an array
                foreach($rows as $key => $value){
                    //display the index of each column use $key
                    //display the value using $value
                }
        */
    ?>
</body>
</html>