<?php
session_start();
if ( !isset( $_SESSION[ 'TO_DO_LIST' ]))
{
    $_SESSION[ 'TO_DO_LIST' ] = array();
}

array_push ( $_SESSION['TO_DO_LIST'], $GET['MAY_2020'] );

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
    <form action="./index.php" method = "GET">

        <lable for = "TO_DO_LIST" > TO DO LIST MAY 2020 :
        <input type = "text" name = "MAY_2020" id="MAY_2020" >
        </lable>

        <input type = "submit" value = "ADD TO LIST">
    
    </form>

      <?php if (!empty ( $_SESSION[ 'TO_DO_LIST' ]) ): ?>
       <h2> MAY 2020:</h2>
        <ul>
          <?php  foreach ( $_SESSION[ 'TO_DO_LIST' ] as $MAY_2020) : ?> 
            <li>
                <?php echo $MAY_2020; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <pre>
        <strong>$_GET contents:</strong>
        <?php var_dump ( $_GET ); ?>
    </pre>S

      <pre>
        <strong>$_SESSION contents:</strong>
        <?php var_dump ( $_SESSION ); ?>
    </pre>
     
</body>
</html>