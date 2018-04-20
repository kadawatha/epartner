<?php
$users=$_REQUEST['user'];

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
    $weekendopening=$_POST['weekendopening'];
    $weekendclosing=$_POST['weekendclosing'];
      $weekendday1=$_POST['weekendday1'];
      $weekendday2=$_POST['weekendday2'];

    date_default_timezone_set("Asia/Colombo");
    $date=date("Y-m-d");

    if (empty($Name) || empty($review) || empty($geo) || empty($city) || empty($phone)){
        $msg="Can not save Empty Records";
        echo "<script>window.top.location='../newpost.php?msg=$msg'</script>";
    }else{

        include '../../connection.php';

        $insert=$db->query("INSERT INTO posts(P_ID,C_ID,Client,Package_ID,Post_Name,City,Moto,Des,Geo,Opening,Closing,Opening1,Closing1,Opening_Day,Closing_Day,Opening_day1,Closing_day2,web,phone,U_ID,Post_Date) VALUES ('','$cate','$client','$package','$Name','$city','$moto','$review','$geo','$opening','$closing','$weekendopening','$weekendclosing','$day1','$day2','$weekendday1','$weekendday2','$web','$phone','$users','$date')");

        if ($insert){
            $msg="Successfully Created";
            echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
        }else{
            $msg="Something was wrong.Please Try again Later Error Code 1";
            echo "<script>window.top.location='../newpost.php?msg=$msg'</script>";
        }
    }

}else{
    $msg="Something was wrong.Please Try again Later Error Code 2";
    echo "<script>window.top.location='../newpost.php?msg=$msg'</script>";
}
?>