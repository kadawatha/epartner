<?php
$users=$_REQUEST['user'];

if (isset($_POST['register'])){


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $tp=$_POST['tp'];
    $status="Online";
    $ch=0;
    date_default_timezone_set("Asia/Colombo");
    $date=date("Y-m-d");
        if (empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($pass) || empty($cpass) || empty($tp)){
            $msg="Can not save Empty Records";
            echo "<script>window.top.location='../newclient.php?msg=$msg'</script>";
        }else{

            if ($pass==$cpass){
                $convert=md5($cpass);
                include '../../connection.php';

                $insert=$db->query("INSERT INTO client(Client_ID,C_Fname,C_Lname,Email,password,C_Uname,Status,TP,Chat,Added_ID,Added_Date) VALUES ('','$fname','$lname','$email','$convert','$uname','$status','$tp','$ch','$users','$date')");
                if ($insert){
                    $msg="Successfully Created";
                    echo "<script>window.top.location='../clients.php?msg=$msg'</script>";
                }else{
                    $msg="Something was wrong.Please Try again Later Error Code 1";
                    echo "<script>window.top.location='../newclient.php?msg=$msg'</script>";
                }
            }else{
                $msg="Password Not Matched";
                echo "<script>window.top.location='../newclient.php?msg=$msg'</script>";
            }



        }




}else{
    $msg="Something was wrong.Please Try again Later Error Code 2";
    echo "<script>window.top.location='../newclient.php?msg=$msg'</script>";
}
?>