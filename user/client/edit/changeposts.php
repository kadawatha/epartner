<?php
if (isset($_POST['others'])){
   $cate=$_REQUEST['cate'];
     $sub=$_POST['sub'];
      $P=$_REQUEST['P'];
    include '../../connection.php';
    $update=$db->query("UPDATE posts SET  Sc_ID='$sub' WHERE P_ID='$P'");
    if ($update){
        $msg="Successfully changed";
         echo "<script>window.top.location='../Post.php?ID=$P&&msg=$msg'</script>";
    }else{
        $msg="Can not changed";
         echo "<script>window.top.location='../Post.php?ID=$P&&msg=$msg'</script>";
    }


}elseif (isset($_POST['package'])){
     $pack=$_POST['pack'];
    $Post_ID=$_REQUEST['Post'];
    include '../../connection.php';
    $update=$db->query("UPDATE posts SET  Package_ID='$pack' WHERE P_ID='$Post_ID'");
    if ($update){
        $msg="Successfully changed";
        echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
    }else{
        $msg="Can not changed";
        echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
    }

}elseif (isset($_POST['cli'])){
     $client=$_POST['client'];
     $Post_ID=$_REQUEST['P'];
    include '../../connection.php';
    $update=$db->query("UPDATE posts SET  Client='$client' WHERE P_ID='$Post_ID'");
    if ($update){
        $msg="Successfully changed";
        echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
    }else{
        $msg="Can not changed";
        echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
    }

}elseif (isset($_POST['alldetails'])){
    $cname=$_POST['cname'];
    $city=$_POST['city'];
    $moto=$_POST['moto'];
    $ophr=$_POST['ophr'];
    $clhr=$_POST['clhr'];
    $location=$_POST['location'];
    $des=$_POST['des'];
    $day1=$_POST['day1'];
    $day2=$_POST['day2'];
    $Post_ID=$_REQUEST['Post'];
    if($day1==0){
        $msg="Please select the Opening day";
        echo "<script>window.top.location='../editpost.php?ID=$Post_ID&&msg=$msg'</script>";
    }else{
        if ($day2==0){
            $msg="Please select the Closing day";
            echo "<script>window.top.location='../editpost.php?ID=$Post_ID&&msg=$msg'</script>";
        }else{

            include '../../connection.php';
            $getpost=$db->query("SELECT * FROM posts WHERE P_ID='$Post_ID'");
            $getpostdata=$getpost->fetch_assoc();

            $Post_Name=$getpostdata['Post_Name'];
            $City=$getpostdata['City'];
            $Moto=$getpostdata['Moto'];
            $Opening=$getpostdata['Opening'];
            $Closing=$getpostdata['Closing'];
            $Geo=$getpostdata['Geo'];
            $Des=$getpostdata['Des'];

            if (empty($cname)){  $pname=$Post_Name;}else{ $pname=$cname;}
            if (empty($city)){  $pcity=$City;}else{  $lname=$city;}
            if (empty($moto)){  $pmoto=$Moto;}else{  $uname=$moto;}
            if (empty($ophr)){  $popening=$Opening;}else{  $email=$ophr;}
            if (empty($clhr)){  $pclosing=$Closing;}else{echo $tp=$clhr;}
            if (empty($location)){  $plocation=$Geo;}else{echo $tp=$location;}
            if (empty($des)){  $pdes=$Des;}else{echo $tp=$des;}



            include '../../connection.php';
            $update=$db->query("UPDATE posts SET Post_Name='$pname',City='$pcity',Moto='$pmoto',Des='$pdes',Geo='$plocation',Opening='$popening',Closing='$plocation',Opening_Day='$day1',Closing_Day='$day2' WHERE P_ID='$Post_ID'");
            if ($update){
                $msg="Successfully changed";
                echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
            }else{
                $msg="Can not changed";
                echo "<script>window.top.location='../Post.php?msg=$msg'</script>";
            }
        }
    }




}

?>