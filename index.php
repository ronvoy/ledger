<?php
include('index1.php');
$obj=new query();
$result=$obj->getData('tb');
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <h3>
    <?php

        date_default_timezone_set('Asia/Kathmandu');
        echo "Date: ".date("Y-m-d");
        echo "<br>";
        echo "Time: ".date("h:i:s A");

    ?>
    </h3>

    <hr>
    <a href="manage_user.php">
    <button class="button">+</button>
    </a>
    
    
    <hr>

    <div >
    <table id="ledger">
        
        <tr>
            <th>S. No. </th>
            <th>Description</th>
            <th>Expense</th>
            <th>Income</th>
            <th>Category</th>
        </tr>
        <?php
        if(isset($result['0'])){
            $id=1;
            foreach($result as $list){
            ?>
        <tr>
            
            <td><?php echo $id?></td>
            <td><?php echo $list['description']?></td>
            <td><?php echo $list['expense']?></td>
            <td><?php echo $list['income']?></td>
            <td><?php echo $list['category']?></td>
        </tr>
         <?php 
          $id++;
        }  } else {?>
            <tr>
                <td colspan="6" align="center">NO record found!</td>
        </tr>
        <?php } ?>

        
    </table>
</div>
<body>

   
  </body>
</html>