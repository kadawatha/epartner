<?php
$post=$_REQUEST['post'];
$Cate=$_REQUEST['Cate'];
if (isset($_POST['feed'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    date_default_timezone_set("Asia/Colombo");
    $date=date("Y-m-d");
    if (empty($name) || empty($email) || empty($feedback)){

        echo "<script>window.top.location='viewpost.php?Cate=$Cate&&post=$post&&msg=1'</script>";
    }else{
            include 'Admin/connection.php';
            $insert=$db->query("INSERT INTO feedback(Feed_ID,P_ID,Feed_Name,Feed_Email,Feedback,Added_Date) VALUES ('','$post','$name','$email','$feedback','$date')");
            if ($insert){
                echo "<script>window.top.location='viewpost.php?Cate=$Cate&&post=$post&&msg=2'</script>";
            }else{
                echo "<script>window.top.location='viewpost.php?Cate=$Cate&&post=$post&&msg=3'</script>";
            }
    }
}
?>