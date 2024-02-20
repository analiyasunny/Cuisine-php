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
            // set up & run query, store data results
            $sql = 'SELECT * FROM cuisines ORDER BY name';
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $cuisines = $cmd->fetchAll();
            // loop through list of services, adding each one to dropdown 1 at a time
            foreach ($cuisines as $cuisine) {
                echo '<option>' . $cuisine['name'] . '</option>';
            }
            //disconnet
            $db = null;
            ?>
        </select> 
        </fieldset>
        <button>Get Foods</button>
</form>
</body>
</html>