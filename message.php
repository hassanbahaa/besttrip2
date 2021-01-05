<?php

include 'header.php';
?>


<table>

<th>Client Name</th>
<th>Client Email</th>
<th>Client Phone</th>
<th>hotel</th>
<th>Client Message</th>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "besttrip";

$conn = mysqli_connect($host,$user,$pass,$dbname);


$query = " SELECT * FROM cmessages ";
$result = mysqli_query($conn,$query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        //echo $row['Fullname']

        echo "<tr><td>" . $row['Fullname'] . "</td>" . " <td>" . $row['Email'] . "</td>" . " <td>" . $row['Phone'] . " <td>" . $row['hotel'] . "</td>". "</td>" . " <td>" . $row['mersal'] . "</td> </tr>";
    }
    echo "</table>";
}

?>

<form action="excel.php" method="post">
    <button type="submit" class="exporting" name="export"> Export </button>
</form>



