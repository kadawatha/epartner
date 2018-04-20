<?php

$name=$_FILES["image"] ["name"];
$type=$_FILES["image"] ["type"];
$size=$_FILES["image"] ["size"];
$temp=$_FILES["image"] ["tmp_name"];
$error=$_FILES["image"] ["error"];
$extension=strtolower(substr($name,strpos($name, '.') + 1));

if(($extension=='png') || ($extension=='jpg') )
{
    $sen=rand();
    $new=$sen.".".$extension;
    if(move_uploaded_file($temp,"../../../images/images/".$name)){


        $user=$_REQUEST['user'];
        $P_ID=$_REQUEST['P_ID'];
        date_default_timezone_set("Asia/Colombo");
        $date=date("Y-m-d");

       include '../../connection.php';
            $insert=$db->query("INSERT INTO images(Img_ID,P_ID,Link,Added_ID,Date) VALUES ('','$P_ID','$name','$user','$date')");
            if ($insert){
                $msg="Successfully Uploaded";
               echo "<script>window.top.location='../newimages.php?ID=$P_ID&&msg=$msg'</script>";
            }else{
                $msg="Uploading Failed,Please try again later";
                echo "<script>window.top.location='../newimages.php?ID=$P_ID&&msg=$msg'</script>";
            }



    }else{
        $msg="File can not transfer to the folder";
        echo "<script>window.top.location='../newimages.php?ID=$P_ID&&msg=$msg'</script>";
    }

}  else{
    $msg="Invalid File Format.use JPG and PNG";
    echo "<script>window.top.location='../newimages.php?ID=$P_ID&&msg=$msg'</script>";
}

?>