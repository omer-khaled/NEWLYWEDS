<?php
    if(isset($_POST['submit'])){
        // var_dump("Here");
        $img_name=$_FILES['img_upload']['name'];
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $internal_floder=$_POST['flexRadioDefault'];
        $folder='images/'.$internal_floder.'/';
        move_uploaded_file($tmp_img_name,$folder.$img_name);
        $cureent_data  = file_get_contents('data.json');
        $php_Array = json_decode($cureent_data,true);
        $json = array(
                    "src" => $folder.$img_name,
                    "Weight" => $_POST['Weight'],
                    "name"=> $_POST['name']
        );
        $php_Array[] = $json;
        $final_data = json_encode($php_Array);  
        $file_name = 'data.json';
        file_put_contents($file_name ,$final_data);
        header('Location: setting_Admin.php');
        exit;
    }
?>