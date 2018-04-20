<?php
if (isset($_POST['register'])){
     $pck_ID=$_REQUEST['package'];
    $package=$_POST['fname'];

    include '../../connection.php';

    $update=$db->query("UPDATE package SET Package_Name='$package' WHERE Package_ID='$pck_ID'");
    if ($update){
        $msg="Successfully Changed";
        echo "<script>window.top.location='../packages.php?msg=$msg'</script>";
    }else{
        $msg="Something was Wrong,please try again";
       echo "<script>window.top.location='../editpackage.php?msg=$msg'</script>";
    }
}

?>