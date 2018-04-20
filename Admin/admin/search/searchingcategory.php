<?php
include '../../connection.php';
$search=$db->query("SELECT * FROM category WHERE Category LIKE '$_GET[search]%'");
$ro=$search->num_rows;
if($ro==0){
    ?>
    <div class="form-group">

        <div class="col-sm-8">
            <button id="ad" name="register" type="submit" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Upload</button>
        </div>
    </div>
    <?php
}else{
    while ($allresult=$search->fetch_assoc()){

        echo "<center><strong>".$allresult['Category']."</strong></center><br>";
    }

}



?>



