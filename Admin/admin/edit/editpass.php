<?php
$pas=$_POST['password'];

$pa=md5($pas);


$ID=$_REQUEST['ID'];




if (empty($pa)){
    echo "<script>window.top.location='myaccount.php?ID=$ID'</script>";
}else{

    include '../../connection.php';
    $update=$db->query("UPDATE users SET password='$pa' WHERE U_ID='$ID'");
    if ($update){
        $msg="Successfully Changed";
        echo "<script>window.top.location='myaccount.php?msg=$msg'</script>";
    }else{
        echo "Can not Updated,Please Try again or Contact System Developer.";
    }

}
