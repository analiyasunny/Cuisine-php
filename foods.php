 <?php
 
   include('shared/db.php');
   $sql = 'SELECT * FROM foods' ;
   $cmd = $db->prepare($sql);
   $cmd->execute();
   $foods = $cmd->fetchAll();
            
   foreach ($foods as $food) {
     echo '<option>' . $food['name'] . '</option>';
     echo '<tr>
    <td>
     <a href="delete-show.php?foodId=' .$food['foodId'] . '" onclick="return confrimDelete();">Delete</a></td>
    </tr>';
    }
        
     $db = null;
     ?>
</body>
 </html>