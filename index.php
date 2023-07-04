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
    <button class="button">+</button>
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
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

   
  </body>
</html>