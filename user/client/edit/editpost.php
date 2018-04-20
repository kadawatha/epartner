<?php
$P_ID=$_REQUEST['ID'];

if (isset($_POST['register'])){
    $package=$_POST['package'];
    $cate=$_POST['cate'];
    $Name=$_POST['Name'];
    $moto=$_POST['moto'];
    $review=$_POST['des'];
    $geo=$_POST['geo'];
    $opening=$_POST['opening'];
    $closing=$_POST['closing'];
    $day1=$_POST['day1'];
    $day2=$_POST['day2'];
    $city=$_POST['city'];
    $client=$_POST['clint'];
    $web=$_POST['web'];
    $phone=$_POST['phone'];
    $weekopening=$_POST['weekopening'];
    $weekclosing=$_POST['weekclosing'];
    $weekday1=$_POST['weekday1'];
    $weekday2=$_POST['weekday2'];

    date_default_timezone_set("Asia/Colombo");
    $date=date("Y-m-d");

    if (empty($Name)  || empty($review) || empty($geo) || empty($city) || empty($phone)){
        $msg="Can not save Empty Records";
        echo "<script>window.top.location='../editpost.php?msg=$msg&&ID=$P_ID'</script>";
    }else{

        include '../../connection.php';

        $insert=$db->query("UPDATE posts SET  C_ID='$cate',Client='$client',Package_ID='$package',Post_Name='$Name',City='$city',Moto='$moto',Des='$review',Geo='$geo',Opening='$opening',Closing='$closing',Opening1='$weekopening',Closing1='$weekclosing',Opening_day1='$weekday1',Closing_day2='$weekday2',Opening_Day='$day1',Closing_Day='$day2',web='$web',phone='$phone' WHERE P_ID='$P_ID'");

        if ($insert){
            $msg="Successfully updated";
            echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
        }else{
            $msg="Something was wrong.Please Try again Later Error Code 1";
            echo "<script>window.top.location='../editpost.php?msg=$msg'</script>";
        }
    }

}else{
    $msg="Something was wrong.Please Try again Later Error Code 2";
    echo "<script>window.top.location='../editpost.php?msg=$msg'</script>";
}
?>