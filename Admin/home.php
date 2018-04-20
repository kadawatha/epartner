<?php

session_start();
if(!$_SESSION['id'])
{
    $msg="Session Not Started";
    echo "<script>window.top.location='index.php?msg=$msg'</script>";
//header("Location:index.php");	

}
?>
<?php
include 'connection.php';
$id=$_SESSION['id'];
$getdetails=$db->query("SELECT * FROM users WHERE U_ID='$id'");
$val= $getdetails->fetch_assoc();

$ch=$val['Role'];

if($ch=="Administrator")
{
    $logingg="Login Successfull";
    echo "<script language='javascript'>window.location.href='admin/index.php?msg=$logingg'</script>";
}elseif($ch=="user"){
    $logingg="Login Successfull";
    echo "<script language='javascript'>window.location.href='client/index.php?msg=$logingg'</script>";
}



?>
            
            