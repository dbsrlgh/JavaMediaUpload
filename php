uploaded_image.php

<?php
  
  if(isset($_FILES["uploaded_file"]["name"])){
    $name = $_FILES["uploaded_file"]["name"];
    $tmp_name = $_FILES["uploaded_file"]["tmp_name"];
    $error = $_FILES["uploaded_file"]["error"];

    if(!empty($name))
    {
        $location = './image/';
        if(!is_dir($location))
            mkdir($location);
        
        if(move_uploaded_file($tmp_name, $location . $name))
            echo 'Uploaded';
    }
    else
        echo 'Please Choose a File';

}
 
?>




uploaded_video.php

<?php
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$file_name = $_FILES['myFile']['name'];
		$file_size = $_FILES['myFile']['size'];
		$file_type = $_FILES['myFile']['type'];
		$temp_name = $_FILES['myFile']['tmp_name'];
				
		$location = "image/";
			
		move_uploaded_file($temp_name, $location.$file_name);
		echo "your ip address".$file_name;
	}else{
		echo "Error";
	}
 
?>
