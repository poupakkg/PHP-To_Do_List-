<?php
$message = 'Welcome back Poupak to make your new list';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>h1{ text-align:center;}</style>
    <title>TO DO LIST</title>
</head>
<body>
    <h1>TO DO LIST</h1>
    <?php echo $message; ?>
    <p>
        <lable for = "TO_DO_LIST" > TO DO LIST MAY 2020 :
        <input type = "text" name = "TO_DO_LIST" id="TO_DO_LIST" >
        </lable>

        <input type = "submit" value = "ADD TO LIST">
    </p>
   
</body>
</html>