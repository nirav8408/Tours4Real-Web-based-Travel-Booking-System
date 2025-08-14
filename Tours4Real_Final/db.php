<?php
    include("config.php");

    $arr=[        

    ];
        /*  
        Code for editing Images of Package Table 
        $cat_id=5;
        $sql=mysqli_query($conn,"SELECT package_id FROM package WHERE pack_category_id=$cat_id;");
        $row=mysqli_fetch_assoc($sql);

        $tab="package";
        $val="package_img";
        $id="package_id";
        for($i=0,$j=$row['package_id'];$i<count($arr);$i++,$j++)
        {
            $sql=mysqli_query($conn,"UPDATE $tab SET $val='$arr[$i]' WHERE $id=$j AND pack_category_id=$cat_id;");
            echo '"'.$j.$arr[$i].'"<br>';
        }
        */

        /* 
        Code for editing Images of Tables : package_category, place_360, photogallery
        $tab="package";
        $val="package_img";
        $id="package_id";
        for($i=0,;$i<count($arr);$i++)
        {
            $sql=mysqli_query($conn,"UPDATE $tab SET $val='$arr[$i]' WHERE $id=$i+1;");
            echo '"'.$i+1.$arr[$i].'"<br>';
        }
        */ 
    ?>