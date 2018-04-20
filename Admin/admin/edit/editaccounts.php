<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$tp=$_POST['tp'];



$ID=$_REQUEST['ID'];




if (empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($tp)){
    echo "<script>window.top.location='myaccount.php?ID=$ID'</script>";
}else{

    include '../../connection.php';
    $update=$db->query("UPDATE users SET F_Name='$fname',L_Name='$lname',U_Name='$uname',Email='$email',TP='$tp' WHERE U_ID='$ID'");
    if ($update){
        $msg="Successfully Changed";
        echo "<script>window.top.location='myaccount.php?msg=$msg'</script>";
    }else{
        echo "Can not Updated,Please Try again or Contact System Developer.";
    }

}
