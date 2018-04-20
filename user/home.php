<?php

session_start();
if(!$_SESSION['id'])
{
    $msg="Session Not Started";
    echo "<script>window.top.location='index.php?msg=$msg'</script>";
//header("Location:index.php");	

}else{
    $logingg="Login Successfull";
    echo "<script language='javascript'>window.location.href='client/index.php?msg=$logingg'</script>";
}
?>

            
            