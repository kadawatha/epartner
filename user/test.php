<?php


$a=$_POST['U_Name'];
$p=$_POST['password'];
$px=md5($p);

if(empty($a) || empty($p)){
    echo "<div class='alert alert-danger'>";
    echo "<b><strong><center><font color='white'>Please Enter User Details</font></center></strong></b>";
    echo"</div>";
}else{

    include 'connection.php';
    $find=$db->query("SELECT COUNT(Client_ID) AS ro FROM client WHERE C_Uname='$a' && password='$px'");
    $x= $find->fetch_assoc();
    echo $cou=$x['ro'];

    if($cou==0){

        echo "<strong><center><font color='white'>Incorrect User Details</font></center></strong>";

    }else{
        $getdetails=$db->query("SELECT *  FROM client WHERE C_Uname = '$a' && password ='$px'");
        $row= $getdetails->fetch_assoc();

        if($row['Status'] == "Online" ){
            session_start();

            if($_SESSION['id'] = $row['Client_ID']){

                echo "<script language='javascript'>window.location.href='home.php'</script>";
            }else{
                $msg="Sessions not Started,please try again";
                echo "<script>window.top.location='index.php?msg=$msg'</script>";
            }


        }
        else{

            echo "<b><strong><center><font color='white'>You are offline user ! please meet your Administrator !</font></center></strong></b>";


        }

    }



}






?>