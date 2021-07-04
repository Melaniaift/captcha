<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        $number1 = rand(1,9);
        $number2 = rand(1,9);
        $sum = $number1 + $number2;
        ?> 
        <form method='post' action='pag1.php'> 
            Name: <input type="text" name="text"><br>
            <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
                <?php echo $number1.' + '.$number2.' = '; ?>
            <input type="text" name="captcha" /><br/>
            <input type="submit" name="submit" value="Trimite"/> 
        </form>
        
    </body>
</html>
