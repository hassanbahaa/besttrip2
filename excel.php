<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "elbohemy";

$conn = mysqli_connect($host,$user,$pass,$dbname);






//  completeeeeeeee ^___^


if(isset($_POST['export']))
{

    $sql = " SELECT * FROM cmessages ORDER BY Fullname DESC ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0 ) {

        $output .=  '
        <table class="table" bordered="1">
        <tr>

            <th>Fullname </th>
            <th>Email </th>
            <th>Phone </th>
            <th>Password </th>

        </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .= '
            <tr>
            <td>' . $row['Fullname'] . "</td>" . " <td>" . $row['Email'] . "</td>" . " <td>" . $row['Phone'] . "</td>" . " <td>" . $row['mersal'] . "</td> </tr>
            ";
        }
        $output .= '</table>';
        header("content-type: application/vnd.ms-excel");
        header("content-Disposition: attachment; filename=download.xls");
        echo $output;
    }
}






?>