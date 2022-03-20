<?php
	//1. เชื่อมต่อ database: 

	// require("C:/xampp/htdocs/se204372/connection_connect.php");
	require("connection_connect.php");
    //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

	//$fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
	$fileupload = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');

	echo $fileupload;
	//ฟังก์ชั่นสุ่มตัวเลข
		$numrand = (mt_rand());
        
        $userid=$_POST['userid'];
        echo $userid;

	//เพิ่มไฟล์
	$upload=$_FILES['fileupload'];
	if($upload != '') {   

		//โฟลเดอร์ที่จะ upload file เข้าไป 
		// $path="C:/xampp/htdocs/se204372/up/";
		$path="annoucement/";  

		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['fileupload']['name'],".");
			
		

		$userid = $_POST['userid'];
		echo $userid;
		
		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		
		$newname = "annouce_".$numrand.$type;
		// $newname = "new".$userid.$type;
		$path_copy=$path.$newname;
		
		//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
		move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	


		
	}
    $sql = "INSERT INTO `file`(`fileupload`) 
            VALUES ('$newname')";
		
	$result = $conn->query($sql);
		
	require("connection_close.php");

	// javascript แสดงการ upload file
		
		if($result){
			
			echo "<script type='text/javascript'>";
			echo "alert('Upload File Succesfuly');";
			echo "window.location.assign('http://localhost/se204372/index.php?controller=uploadAj&action=index&userid=$userid')";
			echo "</script>";

		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Error back to upload again');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
	}
?>