<?php
$pas=$_POST['password'];

$pa=md5($pas);


$ID=$_REQUEST['ID'];




if (empty($pa)){
    echo "<script>window.top.location='changeclient.php?ID=$ID'</script>";
}else{

    include '../../connection.php';
    $update=$db->query("UPDATE client SET password='$pa' WHERE Client_ID='$ID'");
    if ($update){
        $msg="Successfully Changed";
        echo "<script>window.top.location='clients.php?msg=$msg'</script>";
    }else{
        echo "Can not Updated,Please Try again or Contact System Developer.";
    }

}
