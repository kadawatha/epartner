<?php
if (isset($_POST['register'])){

    $Name=$_POST['fname'];

    $name=$_FILES["image"] ["name"];
    $type=$_FILES["image"] ["type"];
    $size=$_FILES["image"] ["size"];
    $temp=$_FILES["image"] ["tmp_name"];
    $error=$_FILES["image"] ["error"];
    $extension=strtolower(substr($name,strpos($name, '.') + 1));

    if(($extension=='png') || ($extension=='jpg') )
    {
        if(move_uploaded_file($temp,"../../../images/categories/".$name)){


            $user=$_REQUEST['user'];
            date_default_timezone_set("Asia/Colombo");
            $date=date("Y-m-d");

            if (empty($Name)){
                $msg="Can not send empty Records";
                echo "<script>window.top.location='../Newcategory.php?msg=$msg'</script>";
            }else{
                include '../../connection.php';
                $insert=$db->query("INSERT INTO category(C_ID,Category,Link,U_ID,Date) VALUES ('','$Name','$name','$user','$date')");
            if ($insert){
                $msg="Successfully Uploaded";
                echo "<script>window.top.location='../categories.php?msg=$msg'</script>";
            }else{
                $msg="Uploading Failed,Please try again later";
                echo "<script>window.top.location='../newcategory.php?msg=$msg'</script>";
            }
            }


        }else{
            $msg="File can not transfer to the folder";
            echo "<script>window.top.location='../newcategory.php?msg=$msg'</script>";
        }

    }  else{
        $msg="Invalid File Format.use JPG and PNG";
        echo "<script>window.top.location='../newcategory.php?msg=$msg'</script>";
    }


}else{
    $msg="Something was wrong.Please Try again Later Error Code 2";
    echo "<script>window.top.location='../newcategory.php?msg=$msg'</script>";
}

?>