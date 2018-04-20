<table>
<?php
include 'Admin/connection.php';
$check=$db->query("SELECT * FROM images ORDER BY Img_ID DESC");
$rw=$check->num_rows;

$i=0;
while ($i<=$rw){

     $link=$check->fetch_assoc();
        if ($i%3==0){
            echo "<tr>";
        }
        echo "<td>".$link['Link']."</td>";
        $i;
        $i++;
        if ($i%10==0){
            echo "</tr>";
        }

}
?>
</table>
