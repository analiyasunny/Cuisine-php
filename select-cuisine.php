<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Order Your Favorite Cuisine</h2>
    <form method="post" action="foods.php">
        <fieldset>
            <label for="cuisines">cuisines:*</label>
            <select name="cuisines" id="cuisines" required>
            <?php

            include('shared/db.php');
            
            $sql = 'SELECT * FROM cuisines ORDER BY name';
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $cuisines = $cmd->fetchAll();
            
            foreach ($cuisines as $cuisine) {
                echo '<option>' . $cuisine['name'] . '</option>';
            }
           
            $db = null;
            ?>
        </select> 
        </fieldset>
        <button>Get Foods</button>
</form>
