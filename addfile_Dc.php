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

	//เพิ่มไฟล์
	$upload=$_FILES['fileupload'];
	if($upload != '') {   

		//โฟลเดอร์ที่จะ upload file เข้าไป 
		// $path="C:/xampp/htdocs/se204372/up/";
		$path="up/";  

		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['fileupload']['name'],".");
			
		

		$userid = $_POST['userid'];
		echo $userid;
		
		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		
		$newname = "application form_".$numrand.$type;
		// $newname = "new".$userid.$type;
		$path_copy=$path.$newname;
		$path_link="up/".$newname;

		//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
		move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	

		// post value
		$date = $_POST['date'];
        $y =$_POST['y'];
        
        $phone = $_POST['phone'];
        $faceB = $_POST['faceB'];
        $position = $_POST['position'];

        $approve_name = $_POST['approve_name'];
        $approve_lastname = $_POST['approve_lastname'];
        $approve_position = $_POST['approve_position'];


        $company_no = $_POST['company_no'];
        $company_road = $_POST['company_road'];
        $company_sub = $_POST['company_sub'];
        $company_dis = $_POST['company_dis'];
        $company_prov = $_POST['company_prov'];
        $company_code = $_POST['company_code'];

        $hr_name = $_POST['hr_name'];
        $hr_lastname = $_POST['hr_lastname'];
        $hr_phone = $_POST['hr_phone'];
        $hr_mail = $_POST['hr_mail'];

        $start = $_POST['start'];
        $finish = $_POST['finish'];
        $pay = $_POST['pay'];
        $room = $_POST['room'];

		$company_name = $_POST['company_name'];

		echo "<br>".$company_name."<br>";
        
			echo $date.$userid.$y.$faceB.$phone.$position
			.$approve_name.$approve_lastname.$approve_position.
			$company_no.$company_road.$company_sub.$company_dis.$company_prov.$company_code.
			$hr_name.$hr_lastname.$hr_phone.$hr_mail.
			$pay.$room."dc".$start.$finish."01";

        if(isset($_POST['company_id'])){
            $company_id = $_POST['company_id'];
			echo "<br>".$company_id;
            $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `academicY_p`,`FB_p`, `phone_p`,`position_p`, 
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `dc_id`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id` ,`file_p`) 
                                VALUES ('$date','$userid','$y','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname',',$approve_position',
                                        '$company_id','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','dc','$start','$finish','01','$newname')";

        }
        if(isset($_POST['company_name'])){
            $company_name = $_POST['company_name'];
			echo "<br>".$company_name;
            $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `academicY_p`,`FB_p`, `phone_p`, `position_p`,
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `comName_p`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id` ,`file_p`) 
                                VALUES ('$date','$userid','$y','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname','$approve_position',
                                        '$company_name','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','dc','$start','$finish','01','$newname')";

        }

		
	}
		
	$result = $conn->query($sql);
		
	require("connection_close.php");

	// javascript แสดงการ upload file
		
		if($result){
			$userid;
			echo "<script type='text/javascript'>";
			echo "alert('Upload File Succesfuly');";
			echo "window.location.assign('http://localhost/se204372/index.php?controller=nisit&action=index&userid=$userid')";
			echo "</script>";

		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Error back to upload again');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
	}
?>