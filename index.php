<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div>
        <h4>
            <?php
                include('connection.php');
                include('query.php');
                
                $obj=new Query();

                if(isset($_GET['type']) &&$_GET['type']=='delete' ){
                    $id=$_GET['id'];
                    $condition_arr=array('id'=>$id);
                    $result=$obj->deleteData('tb',$condition_arr);
                }
                $result=$obj->getData('tb');

                date_default_timezone_set('Asia/Kathmandu');
                echo "Date: ".date("Y-m-d");
                echo "<br>";
                echo "Time: ".date("h:i:s A");
            ?>
        </h4>
    </div>

        <a href="manageUser.php">
            <button class="button">+</button>
        </a>

        <div>
            <table id="ledger" class="table">
                <thead>
                    <th>S. No. </th>
                    <th>Description</th>
                    <th>Expense</th>
                    <th>Income</th>
                    <th>Category</th>
                    <th>Actions</th>
                </thead>
                <?php
                    if(isset($result))
                    {
                        
                        foreach($result as $list)
                        {
                            echo 
                            "<tr>
                                <td> ".$list['id']." </td>
                                <td> ".$list['description']." </td>
                                <td> ".$list['expense']." </td>
                                <td> ".$list['income']." </td>
                                <td> ".$list['category']." </td>
                                <td> <a href='?type=delete&id=".$list['id']."'>delete</a> | <a href='manageUser.php?id=".$list['id']."'>edit</a> </td>
                            </tr>";
                        }  
                        
                    } 
                    
                    else 
                    {
                        echo
                        "<tr>
                            <td colspan='6' align='center'>NO record found!</td>
                        </tr>";
                    } 
                ?>
            </table>
        </div>
    </body>
</html>