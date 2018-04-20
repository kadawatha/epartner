<?php

    $pck_ID=$_REQUEST['ID'];

    include '../../connection.php';

    $check=$db->query("SELECT * FROM posts WHERE Package_ID='$pck_ID'");
    $pkcount=$check->num_rows;

    if($pkcount==0){
        $del=$db->query("DELETE FROM package WHERE Package_ID='$pck_ID'");
        if ($del){
            $msg="Successfully Deleted";
            echo "<script>window.top.location='../packages.php?msg=$msg'</script>";
        }else{
            $msg="Something was Wrong,please try again";
            echo "<script>window.top.location='../packages.php?msg=$msg'</script>";
        }
    }else{
        $msg="Posts Already Link to this package";
        echo "<script>window.top.location='../packages.php?msg=$msg'</script>";
    }






?>