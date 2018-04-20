<?php
$client_ID=$_REQUEST['client_ID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$tp=$_POST['tp'];
$uname=$_POST['uname'];
$status=$_POST['status'];
$chat=$_POST['chat'];

if (empty($fname) || empty($lname) || empty($email) || empty($tp) || empty($uname)){
    $msg="Can not save empty Records";
    echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
}else{

    include '../../connection.php';
    $update=$db->query("UPDATE client SET C_Fname='$fname',C_Lname='$lname',Email='$email',C_Uname='$uname',Status='$status',TP='$tp',Chat='$chat' WHERE Client_ID='$client_ID'");
    if ($update){
        $msg="successfully Updated";
        echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
    }else{
        $msg="Can not update please try again";
        echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
    }
}

?>