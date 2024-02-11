<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://classless.de/classless-tiny.css">
    </head>
    <title>Simple Calculator  </title>

    <body>

    <form action="includes/calculation.inc.php" method="post">
    <p> Simple Calculator </p>

    <input type="number" name="operand1" placeholder="First Number">
    <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <input type="number" name="operand2" placeholder="Second Number">
    <button type="submit" name="submit">Calculate</button>


    </form>
    </body>
</html>