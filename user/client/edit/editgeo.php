<?php
 $ID=$_REQUEST['user'];

if (isset($_POST['register'])){
    $geo=$_POST['geo'];

    include '../../connection.php';
    $check=$db->query("SELECT * FROM categorygeo WHERE C_ID='$ID'");
    $check_num=$check->num_rows;
    if ($check_num==0){
        include '../../connection.php';
        $edit=$db->query("INSERT INTO categorygeo(Geo_ID,C_ID,Geo) VALUES ('','$ID','$geo')");
        if ($edit){
            $msg="Successfully Updated";
             echo "<script>window.top.location='../geocategory.php?ID=$ID&&msg=$msg'</script>";
        }else{
            $msg="Can not update,please try agian";
              echo "<script>window.top.location='../categories.php?ID=$ID&&msg=$msg'</script>";
        }
        $msg="Something was wrong.Please Try again Later Error Code 2";
         echo "<script>window.top.location='../categories.php?ID=$ID&&msg=$msg'</script>";
    }else{
        include '../../connection.php';
        $edit=$db->query("UPDATE categorygeo SET Geo='$geo' WHERE C_ID='$ID'");
        if ($edit){
            $msg="Successfully Updated";
             echo "<script>window.top.location='../geocategory.php?ID=$ID&&msg=$msg'</script>";
        }else{
            $msg="Can not update,please try agian";
              echo "<script>window.top.location='../categories.php?ID=$ID&&msg=$msg'</script>";
        }
        $msg="Something was wrong.Please Try again Later Error Code 2";
         echo "<script>window.top.location='../categories.php?ID=$ID&&msg=$msg'</script>";
    }







}

?>