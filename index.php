<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
        <h4>
            <?php
                include('connection.php');
                $obj=new query();
                $result=$obj->getData('tb');

                date_default_timezone_set('Asia/Kathmandu');
                echo "Date: ".date("Y-m-d");
                echo "<br>";
                echo "Time: ".date("h:i:s A");
            ?>
        </h4>
    </div>

        <a href="manage_user.php">
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
                                <td> <a href='/delete.php?id=".$list['id']."'>delete</a> | <a href='/edit.php?id=".$list['id']."'>edit</a> </td>
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