<?php
$ID=$_REQUEST['user'];

if (isset($_POST['register'])){
    $Name=$_POST['fname'];

    include '../../connection.php';
    $edit=$db->query("UPDATE category SET Category='$Name' WHERE C_ID='$ID'");
    if ($edit){
        $msg="Successfully Updated";
        echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
    }else{
        $msg="Can not update,please try agian";
        echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
    }
    $msg="Something was wrong.Please Try again Later Error Code 2";
    echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
}

?>