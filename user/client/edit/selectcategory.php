<?php
$category=$_POST['category'];
$user=$_REQUEST['user'];
$P=$_REQUEST['P'];

if ($category==0){
    echo "<center><strong><font>Please Select The category First</font></strong></center>";
}else{
    ?>
    <form action="edit/changeposts.php?P=<?php echo $P;?>&&cate=<?php $category;?>&&user=<?php echo $user;?>" method="post" class="form-horizontal">

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Select Sub Category</label>
            <div class="col-sm-8">
                <select name="sub" class="form-control1" id="focusedinput">
                    <?php
                    include '../../connection.php';
                    $allss=$db->query("SELECT * FROM subcategory WHERE C_ID='$category'");
                    while ($subcategories=$allss->fetch_assoc()){
                        ?>
                        <option value="<?php echo $subcategories['Sc_ID'];?>"><?php echo $subcategories['Subcategory'];?></option>
                        <?php
                    }
                    ?>
                </select>

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8">
                <button style="margin-left: 180px;" type="submit" name="others" class="btn btn-default">Change</button>
            </div>
        </div>
    </form>





    <?php
}
?>
