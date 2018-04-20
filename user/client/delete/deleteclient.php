<?php

$client_ID=$_REQUEST['ID'];

include '../../connection.php';

$check=$db->query("SELECT * FROM posts WHERE posts.Client='$client_ID'");
$clcount=$check->num_rows;

if($clcount==0){
    $del=$db->query("DELETE FROM client WHERE client.Client_ID='$client_ID'");
    if ($del){
        $msg="Successfully Deleted";
        echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
    }else{
        $msg="Something was Wrong,please try again";
        echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
    }
}else{
    $msg="Posts Already Link to this Client";
    echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
}






?>