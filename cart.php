<!DOCTYPE html>
<?php
    setcookie("Submit_Item", "#1");
    setcookie("Submit_Item", "#2");
    setcookie("Submit_Item", "#3");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form action="" method="post" target="_blank">
        <input type="cookie" name="fname"><br>
        <input type="submit" value="Submit">
        </form>

        <?php
            if(isset($_COOKIE["Submit_Item"])) {
                echo "Gekozen item: " . $_COOKIE["Submit_Item"];
            } elseif(isset($_COOKIE["Submit_Item"])) {
                echo "Gekozen item: " . $_COOKIE["Submit_Item"];
            } elseif(isset($_COOKIE["Submit_Item"])) {
                echo "Gekozen item: " . $_COOKIE["Submit_Item"];
            } else {
                echo "Geen waarde aangegeven!";
            }
        ?>

    </body>
</html>