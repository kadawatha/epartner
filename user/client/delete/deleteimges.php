<?php

$ID=$_REQUEST['ID'];

include '../../connection.php';
$check=$db->query("SELECT * FROM images WHERE Img_ID='$ID'");
$checklink=$check->fetch_assoc();
$link=$checklink['Link'];
$MID=$checklink['P_ID'];

include '../../connection.php';
$del=$db->query("DELETE FROM images WHERE Img_ID='$ID'");
if ($del){
    unlink("../../../images/images/".$link);
    $msg="Successfully Deleted";
    echo "<script>window.top.location='../newimages.php?ID=$MID&&msg=$msg'</script>";
}else{
    $msg="Something was Wrong,Please Try again Later";
    echo "<script>window.top.location='../ewimages.php?ID=$MID&&msg=$msg'</script>";
}


?>