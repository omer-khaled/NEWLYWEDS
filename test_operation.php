<?php
    if(isset($_POST['submit'])){
        $NUM =((int)$_POST['number']) - 1;
        $cureent_data  = file_get_contents('data.json');
        $php_Array = json_decode($cureent_data,true);
        $starting = 0;
        var_dump($NUM);
        echo "<br>";
        foreach($php_Array as $fileobj){
            var_dump($fileobj);
            echo "<br>";
            if($starting == $NUM){
                $cur_obj_src = $php_Array[$starting]['src'];
                unlink($cur_obj_src);
                echo "Here   ";
                var_dump($fileobj);
                echo "<br>";
                unset($php_Array[$starting]);
            }
            $starting++;
        }
        // var_dump($php_Array);
        // $json = array(
        //             "src" => $folder.$img_name,
        //             "Weight" => $_POST['Weight'],
        //             "name"=> $_POST['name']
        // );
        // $php_Array[] = $json;
        $final_data = json_encode($php_Array);  
        $file_name = 'data.json';
        file_put_contents($file_name ,$final_data);
        // header('Location: test.php');
        exit;
    }
?>