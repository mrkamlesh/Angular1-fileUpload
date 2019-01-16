<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  

 if(isset($_FILES['file'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'upload/';
            if(move_uploaded_file($temp_name, $location.$name)){
                $res = array("response"=>"File uploaded successfully");
                echo json_encode($res);
            }
        }       
    }  else {
    	$res = array("response"=>"You should select a file to upload !!");
        echo json_encode($res);
    }
}
?>