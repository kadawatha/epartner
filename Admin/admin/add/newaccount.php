<?php
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $uname=$_POST['uname'];
   $email=$_POST['email'];
   $tp=$_POST['tp'];
   $pass=$_POST['pass'];
   $cpass=$_POST['cpass'];
   $role="Administrator";
   $Status="Online";


   if (empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($tp) || empty($pass) || empty($cpass)){

       echo "<div class=\"alert alert-danger\" style='width: 170px;'><span>Fill all Inputs first</span></div>";

   }else{

       if ($pass==$cpass){
           $password=md5($cpass);
            include '../../connection.php';
            $insert=$db->query("INSERT INTO users(U_ID,F_Name,L_Name,U_Name,Email,password,TP,Status,Role) VALUES ('','$fname','$lname','$uname','$email','$password','$tp','$Status','$role')");
            if ($insert){

                $msg="1";
                echo "<script>window.top.location='accessusers.php?msg=$msg'</script>";
            }else{
                echo "<div class=\"alert alert-danger\" style='width: 170px;'><span>Can not Insert,Please Try again or Contact System Developer.</span></div>";
            }


       }else{
           echo "<div class=\"alert alert-danger\" style='width: 170px;'><span>Password Not Matched.</span></div>";

       }


   }
