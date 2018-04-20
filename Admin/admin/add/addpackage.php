<?php
if (isset($_POST['register'])){

    $package=$_POST['fname'];
    $user=$_REQUEST['user'];

    if (empty($package)){
        $msg="Please Enter Package Name";
        echo "<script>window.top.location='../newpackage.php?msg=$msg'</script>";
    }else{

        include '../../connection.php';
        $check=$db->query("SELECT * FROM package WHERE Package_Name='$package'");
        $checkcount=$check->num_rows;
        $checkcount;
        if ($checkcount==1){
            $msg=$package." is already exist";
            echo "<script>window.top.location='../newpackage.php?msg=$msg'</script>";
        }else{
            include '../../connection.php';
            $insert=$db->query("INSERT INTO package(Package_ID,Package_Name,Added_ID) VALUES ('','$package','$user')");

            if ($insert){
                $msg="Successfully Added";
                echo "<script>window.top.location='../packages.php?msg=$msg'</script>";
            }else{
                $msg="something was wrong,please try again";
                echo "<script>window.top.location='../newpackage.php?msg=$msg'</script>";
            }

        }


    }
}
?>