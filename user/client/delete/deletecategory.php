<?php
$ID=$_REQUEST['ID'];

include '../../connection.php';

$check=$db->query("SELECT * FROM posts WHERE posts.C_ID='$ID'");
$del=$db->query("SELECT * FROM category WHERE C_ID='$ID'");
$getlink=$del->fetch_assoc();
$link=$getlink['Link'];
 $rows=$check->num_rows;
if ($rows==0){
    include '../../connection.php';
    $del=$db->query("DELETE FROM category WHERE C_ID='$ID'");
    unlink("../../../images/categories/".$link);
    if ($del){
        $msg="Successfully Deleted";
       echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
    }else{
        $msg="Something was Wrong,Please Try again Later";
        echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
    }

}else{
    $msg="Please delete posts First";
    echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
}




?>