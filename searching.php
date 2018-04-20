<?php
if (isset($_POST['search'])){

   $keyword=$_POST['keyword'];
   $category=$_POST['category'];

    if ($category=="0" && empty($keyword)){
        include 'selectcatsz.php';
    }elseif ($category=="0"){

        include 'Admin/connection.php';
        $checkname=$db->query("SELECT * FROM posts WHERE Post_Name LIKE '%$keyword%'");
        $checkname_result=$checkname->num_rows;



        if ($checkname_result==0){
            include 'Admin/connection.php';
            $checkmeta=$db->query("SELECT * FROM posts WHERE posts.Moto LIKE '%$keyword%'");
            $checkmeta_result=$checkmeta->num_rows;
            if ($checkmeta_result=0){

                include 'Admin/connection.php';
                $check_category=$db->query("SELECT Category FROM category WHERE Category LIKE '%$keyword%'");
                $check_category_result=$check_category->num_rows;
                $check_category_details=$check_category->fetch_assoc();
                $category=$check_category_details['Category'];
                if ($check_category_result==0){
                    include 'nothing.php';
                }else{
                    echo "<script>window.top.location='Category.php?Cate=$category'</script>";
                }

            }else{

                include 'searchmeta.php';
            }


        }else{

            include 'searchpost.php';


        }



    }elseif (empty($keyword)){
        echo "<script>window.top.location='Category.php?Cate=$category'</script>";

    }

}

?>

