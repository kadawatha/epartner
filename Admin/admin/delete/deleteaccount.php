<?php
$ID=$_REQUEST['ID'];


include '../../connection.php';

$che=$db->query("SELECT * FROM posts WHERE U_ID='$ID'");
echo $check=$che->num_rows;

if ($check=0){


    $delete=$db->query("DELETE FROM users WHERE U_ID='$ID'");
    if ($delete){
        $msg="3";
        echo "<script>window.top.location='../accessusers.php?msg=$msg'</script>";
    }else{
        $msg="Can not deleted.Please try again";
       echo "<script>window.top.location='../accessusers.php?msg=$msg'</script>";
    }
}else{
    $msg="Can not delete";
    echo "<script>window.top.location='../accessusers.php?msg=$msg'</script>";
}
